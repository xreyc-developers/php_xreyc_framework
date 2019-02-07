<?php

/**
 * DEFINE ALL ROUTES HERE
 * 
 * ::ROUTING PARAMETERS 
 * Route::get("URL", "CONTROLLER", "AUTHENTICATION", "PERMISSIONS");
 * Route::create("URL", "CONTROLLER", "AUTHENTICATION", "PERMISSIONS");
 * Route::update("URL", "CONTROLLER", "AUTHENTICATION", "PERMISSIONS");
 * Route::delete("URL", "CONTROLLER", "AUTHENTICATION", "PERMISSIONS");
 * 
 * 
 * *******COMMON URL*******
 * These are some commonly url used
 * 
 * ::API
 * Api accept and sends json data
 * 
 * INDEX:   /api/
 * GET:     /api/users/
 * GETBYID: /api/user/(:num)
 * INSERT:  /api/users/
 * EDIT:    /api/user/(:num)
 * EDIT:    /api/user/(:num)/edit
 * DELETE:  /api/user/(:num)
 * SEARCH:  /api/user/search/(:any)
 * 
 * ::NON-API
 * Non-api directly forwards its data to the page.
 * INDEX:   /
 * GET:     /users/
 * GETBYID: /user/(:num)
 * INSERT:  /users/
 * EDIT:    /user/(:num)
 * EDIT:    /user/(:num)/edit
 * DELETE:  /user/(:num)
 * SEARCH:  /user/search/(:any)
 * 
 * 
 * *******COMMON CONTROLLER*******
 * Controller handles the model and the view.
 * 
 * UserController
 * ProductController
 * CategoriesController
 * 
 * 
 * *******COMMON AUTHENTICATION GUARD*******
 * This limits the access to authenticated users
 * 
 * $AUTH["ALL"]      - All is allowed to access
 * $AUTH["SESSION"]  - Guarded by session
 * $AUTH["JWT"]      - Guarded by JWT
 * 
 * 
 * *******COMMON PERMISSION GUARD*******
 * This limits the access to admin
 * 
 * $PERMISSION["ALL"]            - All is allowed to access
 * $PERMISSION["AUTHENTICATED"]  - Authenticated users only
 * $PERMISSION["ADMIN"]          - Admin only
 * 
 */

Route::get("/api/", "UserController", $AUTH["SESSION"], $PERMISSION["AUTHENTICATED"]);
Route::get("/api/products/(:num)", "UserController", $AUTH["SESSION"], $PERMISSION["AUTHENTICATED"]);

?>