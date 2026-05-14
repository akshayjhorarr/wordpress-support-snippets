<?php

/*
Problem:
WordPress theme and plugin editors can be abused if admin accounts are compromised.

Solution:
Disabled built-in file editing from the WordPress admin dashboard.

Result:
Improved WordPress security and reduced risk of malicious code injection.
*/

// Disable file editing
define('DISALLOW_FILE_EDIT', true);