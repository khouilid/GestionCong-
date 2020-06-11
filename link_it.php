<?php 
$host = 'localhost';
$userName = 'root';
$password = '';
$dbname = 'gestion';
$link = 'mysql:host='. $host . '; dbname='. $dbname ;
$pdo = new PDO($link , $userName , $password);
?>