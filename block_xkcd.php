<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * xkdc block is a quick and easy way to add the xkcd webcomic to Moodle.
 *
 * @package    block_xkcd
 * @copyright  2011 onwards Paul Vaughan, paulvaughan@southdevon.ac.uk
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * xkcd block class.
 *
 * @copyright   2011 onwards Paul Vaughan
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class block_xkcd extends block_base {

    public function init() {
        $this->title = get_string('pluginname', 'block_xkcd');
    }

    public function instance_allow_multiple() {
        return false;
    }

    public function has_config() {
        return false;
    }

    public function instance_allow_config() {
        return false;
    }

    public function applicable_formats() {
        return array('all' => true);
    }

    public function xkcd_image($html) {
        $dom = new DOMDocument();
        @$dom->loadHTML($html);
        $xpath = new DOMXPath($dom);
        $nodelist = $xpath->query("//body/div/div[@id='comic']/img/@src");
        return $nodelist->item(0)->nodeValue;
    }

    public function xkcd_title($html) {
        $dom = new DOMDocument();
        @$dom->loadHTML($html);
        $xpath = new DOMXPath($dom);
        $nodelist = $xpath->query("//body/div/div[@id='comic']/img/@title");
        return $nodelist->item(0)->nodeValue;
    }

    public function xkcd_alt($html) {
        $dom = new DOMDocument();
        @$dom->loadHTML($html);
        $xpath = new DOMXPath($dom);
        $nodelist = $xpath->query("//body/div/div[@id='comic']/img/@alt");
        return $nodelist->item(0)->nodeValue;
    }

    public function get_content() {
        $image  = '';
        $title  = '';
        $alt    = '';

        $url = 'http://xkcd.com/';
        $src = file_get_contents($url);

        $image  = $this->xkcd_image($src);
        $title  = $this->xkcd_title($src);
        $alt    = $this->xkcd_alt($src);

        $build  = '<h6 style="text-align:center;">'.$alt.'</h6>'."\n";
        $build .= '<div style="overflow:scroll;"><img src="'.$image.'" title="'.$title.'" alt="'.$alt.'" /></div>'."\n";

        $footer = '<p style="text-align:center;">|<- <  > ->|</p>'."\n";

        $this->content = new stdClass;
        $this->content->text = $build;
        //$this->content->footer = $footer;

        return $this->content;

    }
}
