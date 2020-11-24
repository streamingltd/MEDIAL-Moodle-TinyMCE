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

require_once("../../../../../config.php");

require_login();

// TinyMCE doesn't allow for customised icons in the theme, but we need this, so look for one manually.

$custompath = $CFG->dirroot."/theme/".$CFG->theme."/pix_plugins/tinymce/helixmedia/img/helix_grey.png";

if (file_exists($custompath)) {
    echo $CFG->wwwroot."/theme/".$CFG->theme."/pix_plugins/tinymce/helixmedia/img/helix_grey.png";
} else {
    echo $CFG->wwwroot."/lib/editor/tinymce/plugins/helixmedia/tinymce/img/helix_grey.png";
}
