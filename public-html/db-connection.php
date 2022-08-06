<?php

 try {

     //DOCKER
     $connection = new PDO('mysql:host=mysql;dbname=talker_db', 'root', 'talker-root-password');

     //VAGRANT
     //$connection = new PDO('mysql:host=localhost;dbname=talker_db', 'root', 'root');

     //XAMPP
     //$connection = new PDO('mysql:host=localhost;dbname=talker_db', 'root', '');

     print "Success! Connected to the database!";

 } catch (PDOException $e) {
     print "Error!: " . $e->getMessage() . "<br/>";
     die();
 }
 
 foreach($connection->query('SELECT * FROM movies') as $record) {
    print_r($record);
 }

?>
