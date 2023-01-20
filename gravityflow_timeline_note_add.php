<?php

/**
 * When a note is added, save the note to a field in the associated entry
 *
 */

add_filter('gravityflow_timeline_note_add', 'user_input_audit', 10, 5);
function user_input_audit($note, $entry_id, $user_id, $user_name, $step)
{
// Log the note so that you can see the variable to reference
    bs($note);

    // for a specific step id corresponding to your user input step
    if ($step->get_id() == 8) {

        // $entry = $step->get_entry();
        $note_to_add = $note[1]; // Will update this line after viewing the log for bs($note)

        $input_id = 20; // The field id in the form entry you want to add the note to
        $result = GFAPI::update_entry_field($entry_id, $input_id, $note_to_add);
    }
    return $note;
}
