<?php

if(!isset($_SESSION['userId'])){
    $AUTH = "SESSION";
}
else{
    $AUTH = "NONE";
}

?>