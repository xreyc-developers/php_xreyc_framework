<?php

/**
 * MAIN ROUTES
 */

class Route {


    /**
     * GET
     */

    public static function get($url, $controller, $authentication, $permission){
        
        global $REQUEST_URI;

        echo ($url == $REQUEST_URI)?'match':'';

        
    }

    /**
     * CREATE
     */

    public static function create($url, $controller, $authentication, $permission){

    }

    /**
     * UPDATE
     */

    public static function update($url, $controller, $authentication, $permission){

    }

    /**
     * DELETE
     */

    public static function delete($url, $controller, $authentication, $permission){

    }

}
?>