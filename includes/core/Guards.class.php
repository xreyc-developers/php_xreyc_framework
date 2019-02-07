<?php 

/**
 *  ROUTE  GUARDS
 */


/**
 * AUTHENTICATION
 */

$AUTH = [
    "ALL" => "UNGUARDED",
    "SESSION" => "GUARDED", 
    "JWT" => "GUARDED"
];

/**
 * PERMISSION
 */

$PERMISSION = [
    "ALL" => "ALL", 
    "AUTHENTICATED" => "AUTHENTICATED", 
    "ADMIN" => "ADMIN"
];



?>