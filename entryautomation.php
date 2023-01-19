<?php

add_filter( 'fg_entryautomation_export_field_value', function( $value, $form, $field_id, $entry, $task ) {

    $entry_id = rgar($entry, 'id');
    
    $field = GFAPI::get_field( $form, $field_id );
    return is_object( $field ) && is_array( $field->choices ) ? $field->get_value_export( $entry, $field_id, true ) : $value;

    $result = gfef_developer_decrypt($entry_id, $field_id)

}, 10, 5 );