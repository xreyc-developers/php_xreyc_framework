<?php 

class Auth Extends Authentication {

    protected $key = "secret_key";

    public function __contruct(){
        parent::__contruct();
    }

    public function sessionAuth(){
        
    }
    
    public function jwtAuth(){
        $admin_payload = [
            'id' => '1234234',
            'name' => 'Reyco Seguma',
            'name' => '',
            'email' => 'info@auth0.com'
        ];

        $admin_payload = [
            'id' => '1234234',
            'name' => 'Reyco Seguma',
            'name' => '',
            'email' => 'info@auth0.com'
        ];
    }

}



?>