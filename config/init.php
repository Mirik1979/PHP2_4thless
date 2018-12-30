<?php
require('db.php');
$condb = new database(); 
$condb -> connect("root", 123456, "books", "localhost", 3306); 
session_start();
?>