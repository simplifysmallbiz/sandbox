<?php

add_filter( 'fg_entryautomation_export_field_value', function( $value, $form, $field_id, $entry, $task ) {

    $entry_id = rgar($entry, 'id');
    
    $field = GFAPI::get_field( $form, $field_id );

    $result = gfef_developer_decrypt($entry_id, $field_id)

    return $result;

}, 10, 5 );