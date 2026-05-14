<?php

/*
Problem:
WordPress emoji scripts were loading unnecessarily.

Solution:
Disabled emoji scripts and styles to reduce extra requests.

Result:
Improved website performance and reduced unused assets.
*/

// Disable emoji scripts
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');