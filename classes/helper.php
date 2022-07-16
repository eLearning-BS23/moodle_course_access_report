<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

namespace tool_coursereport;

/**
 * Additional helper functions
 *
 * @package    tool_coursereport
 * @copyright  2022 munem
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class helper
{
    /**
     * Checks if in the main course page
     */
    public static function is_course_page(): int
    {
        global $PAGE, $CFG;
        if ($PAGE->course && $PAGE->url->out_omit_querystring() === $CFG->wwwroot . '/course/view.php') {
            return $PAGE->course->id;
        }
        return 0;
    }

    public static function course_report_block(int $courseid)
    {
        global $CFG, $OUTPUT;

        $templatecontext = (object)[];
        return $OUTPUT->render_from_template("tool_coursereport/course_report_block", $templatecontext);
    }
}
