# xkcd block for Moodle 2.x

Saves you a click or two. :)

## Introduction

xkcd in your course.

## Licence

xkcd block for Moodle 2.x, copyright &copy; 2009-2012 Paul Vaughan.

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program.  If not, see <http://www.gnu.org/licenses/>.

**xkcd** is [entirely the creation of Randall Munroe](http://xkcd.com/about/) and is licenced under a [Creative Commons licence](http://xkcd.com/license.html). Please spend some time on [xkcd.com](http://xkcd.com/) for more information and enlightenment.

## Purpose

To bring you the current xkcd cartoon right into your course.

## Installation

Installation is a matter of copying files to the correct location within your Moodle installation, but it is always wise to test new plugins in a sandbox environment first, and have the ability to roll back changes.

Download the archive and extract the files, or [clone the repository from GitHub](https://github.com/vaughany/moodle-block_xkcd). You should see the following files and structure:

    xkcd/
    |-- block_xkcd.php
    |-- lang
    |   `-- en
    |       `-- block_xkcd.php
    |-- readme.md
    |-- styles.css
    `-- version.php

Copy the 'xkcd' folder into your Moodle installation's **blocks** folder.

Log in to your Moodle as Admin and click on Notifications on the Admin menu.

The block should successfully install. If you receive any error messages at this point, please [raise an issue on GitHub](https://github.com/vaughany/moodle-block_xkcd/issues) giving as much detail as possible.

Add the block to a page. The block is able to be placed anywhere within Moodle, and is visible to all users.

## Use

Read comic. At this time you may need to scroll around a little to read the comic fully.

Don't forget to mouse-over the image for the alt-text. :)

## Configuration

This block has none at this time.

## Known Issues

The image currently needs to be scrolled to read it all.

Should you find a bug, have an issue, feature request or new language pack, please [log an issue in the tracker](https://github.com/vaughany/moodle-block_simplenotes/issues) or fork the repo, fix the problem and submit a pull request.

## To do

* Using a thumbnail within the block and using a kind of lightbox to display the image properly. (Hopefully via YUI.)
* Navigation.

## Acknowledgements

Thanks to Randall for what is arguably one of the most thought-provoking and illuminating web comics going.

## History

**April 20th, 2012**

* Version 1.0 for Moodle 2.x
* Build 2012042002

Removed the URL-scraping regex in favour of XPath (as I was using that for the alt and title text anyway).

Still in beta at this time.
