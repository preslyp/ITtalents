<?php

define("DSN", "mysql:host=localhost;dbname=library");
define("USERNAME", "root");
define("PASSWORD", "");

$options = array(PDO::ATTR_PERSISTENT => true);

try{
    $db = new PDO(DSN, USERNAME, PASSWORD, $options);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "connection successful";

}catch (PDOException $ex){
    echo "A database error occurred ".$ex->getMessage();
}
