<?php 

/**
 * MAIN CONTROLLER
 */

class Controller Extends Model {

    public function __contruct(){
        parent::__contruct();
    }

    public function escape_string($value){
        return $this->connection->real_escape_string($value);
    }
}

?>