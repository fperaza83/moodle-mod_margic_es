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
 * Define all the backup steps that will be used by the backup_margic_activity_task
 *
 * @package mod_margic
 * @copyright 2022 coactum GmbH
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Define the complete margic structure for backup, with file and id annotations.
 *
 * @package mod_margic
 * @copyright 2022 coactum GmbH
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class backup_margic_activity_structure_step extends backup_activity_structure_step {

    /**
     * Define the complete data structure for backup, with file and id annotations
     *
     * @return void
     */
    protected function define_structure() {

        // To know if we are including userinfo.
        $userinfo = $this->get_setting_value('userinfo');

        // Define each element separated.
        $margic = new backup_nested_element('margic', array('id'),
                                           array('name',
                                                 'intro',
                                                 'introformat',
                                                 'days',
                                                 'scale',
                                                 'assessed',
                                                 'assesstimestart',
                                                 'assesstimefinish',
                                                 'timemodified',
                                                 'timeopen',
                                                 'timeclose',
                                                  'editall'));

        $entries = new backup_nested_element('entries');
        $entry = new backup_nested_element('entry', array('id'),
                                           array('userid',
                                                 'timecreated',
                                                 'timemodified',
                                                 'text',
                                                 'format',
                                                 'rating',
                                                 'entrycomment',
                                                 'teacher',
                                                 'timemarked',
                                                 'mailed'));

        $tags = new backup_nested_element('entriestags');
        $tag = new backup_nested_element('tag', array('id'),
                                         array('itemid',
                                               'rawname'));

        $ratings = new backup_nested_element('ratings');
        $rating = new backup_nested_element('rating', array('id'),
                                            array('component',
                                                  'ratingarea',
                                                  'scaleid',
                                                  'value',
                                                  'userid',
                                                  'timecreated',
                                                  'timemodified'));

        // Build the tree.
        $margic->add_child($entries);
        $entries->add_child($entry);
        $entry->add_child($ratings);
        $ratings->add_child($rating);
        $margic->add_child($tags);
        $tags->add_child($tag);

        // Define sources.
        $margic->set_source_table('margic', array('id' => backup::VAR_ACTIVITYID));

        // All the rest of elements only happen if we are including user info.
        if ($this->get_setting_value('userinfo')) {
            $entry->set_source_table('margic_entries', array('margic' => backup::VAR_PARENTID));

            $rating->set_source_table('rating', array('contextid'  => backup::VAR_CONTEXTID,
                                                      'itemid'     => backup::VAR_PARENTID,
                                                      'component'  => backup_helper::is_sqlparam('mod_margic'),
                                                      'ratingarea' => backup_helper::is_sqlparam('entry')));

            $rating->set_source_alias('rating', 'value');

            if (core_tag_tag::is_enabled('mod_margic', 'margic_entries')) {
                $tag->set_source_sql('SELECT t.id, ti.itemid, t.rawname
                                        FROM {tag} t
                                        JOIN {tag_instance} ti
                                          ON ti.tagid = t.id
                                       WHERE ti.itemtype = ?
                                         AND ti.component = ?
                                         AND ti.contextid = ?', array(
                    backup_helper::is_sqlparam('margic_entries'),
                    backup_helper::is_sqlparam('mod_margic'),
                    backup::VAR_CONTEXTID));
            }
        }

        // Define id annotations.
        $margic->annotate_ids('scale', 'scale');
        $entry->annotate_ids('user', 'userid');
        $entry->annotate_ids('user', 'teacher');
        $rating->annotate_ids('scale', 'scaleid');
        $rating->annotate_ids('user', 'userid');

        // Define file annotations.
        $margic->annotate_files('mod_margic', 'intro', null); // This file areas haven't itemid.
        $entry->annotate_files('mod_margic_entries', 'entry', 'id');
        $entry->annotate_files('mod_margic_entries', 'attachment', 'id');

        return $this->prepare_activity_structure($margic);
    }
}
