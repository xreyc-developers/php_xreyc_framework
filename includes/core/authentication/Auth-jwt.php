<?php 

use \Firebase\JWT\JWT;

$token_payload = [
  'iss' => 'sss',
  'sub' => '123456',
  'name' => 'John Doe',
  'email' => 'info@auth0.com'
];

$key = '__test_secret__';

$jwt = JWT::encode($token_payload, base64_decode(strtr($key, '-_', '+/')), 'HS256');

print "JWT:\n";
print_r($jwt);

$decoded = JWT::decode($jwt, base64_decode(strtr($key, '-_', '+/')), ['HS256']);

print "\n\n";
print "Decoded:\n";
print_r($decoded);
?>