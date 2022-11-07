<?php
    $db =new mysqli("localhost", "root", "", "InService_db");
    if(!$db){
        echo "<h1>Unable to connect database</h1>";
    }
?>
