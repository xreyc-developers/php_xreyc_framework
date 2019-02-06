<?php
class Route {


    /**
     * GET
     */

    public static function get($url){
        
        global $REQUEST_URI;

        if($url == $REQUEST_URI){
            echo "match";
        }
    }

    /**
     * CREATE
     */

    public static function create($url){

    }

    /**
     * UPDATE
     */

    public static function update($url){

    }

    /**
     * DELETE
     */

    public static function delete($url){

    }

}
?>