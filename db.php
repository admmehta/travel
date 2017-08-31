<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = 'pass';
$db = 'travel';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
