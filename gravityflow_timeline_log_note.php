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
    return $note;
}
