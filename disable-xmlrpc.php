/*
Problem:
XML-RPC can be abused for brute-force attacks and unnecessary remote access.

Solution:
Disabled XML-RPC functionality in WordPress.

Result:
Improved WordPress security and reduced attack surface.
*/


<?php
add_filter('xmlrpc_enabled', '__return_false');