<?php
/*
 * Limit GravityFlow Pages to only show entries at a specific step
 * */

/* **********************************************************
 * Limit inbox display when using shortcode to specific step
 * ********************************************************** */

add_filter('gravityflow_inbox_search_criteria', 'bs_gravityflow_inbox_search_criteria', 10, 1);
function bs_gravityflow_inbox_search_criteria($search_criteria)
{
    $page_id = get_queried_object_id();

    switch ($page_id) {
        case 6624: // Page ID
            $step_id = 543; // Step ID
            break;
    }

    $search_criteria['field_filters'][] = array(
        'key' => 'workflow_step',
        'operator' => 'in',
        'value' => $step_id,
    );
    return $search_criteria;
}
