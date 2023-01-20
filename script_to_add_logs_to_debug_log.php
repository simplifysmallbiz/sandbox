<?php

/* Add this script to a plugin, functions.php, or to the plugin you are developing
+ The script will log output to debug.log, typically located in wp-content folder
 * The script will work if define(WP_DEBUG, true); in wp-config.php
 * See https://wordpress.org/documentation/article/debugging-in-wordpress/
 * log output by adding bs(output here) or bs("Display this Text"); to your script
//

/* ****************************************************************
 * ERROR LOGGING
 * ****************************************************************  */
function bs($log)
{
    if (true === WP_DEBUG) {
        if (is_array($log) || is_object($log)) {
            error_log(print_r($log, true));
        } else {
            error_log($log);
        }
    }
}
