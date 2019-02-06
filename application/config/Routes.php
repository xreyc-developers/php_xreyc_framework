<?php

/**
 * DEFINE ALL ROUTES HERE
 * 
 * Route::get("URL", "CONTROLLER", "AUTHENTICATION", "PERMISSIONS");
 */


Route::get("/apiv2/", "UserController@get");
Route::get("/apiv2/products/", "UserController@getbyId");


?>