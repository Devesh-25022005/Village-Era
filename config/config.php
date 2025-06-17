<?php

session_start();
error_reporting(0);

$siteUrl = 'http://'.$_SERVER['HTTP_HOST'].'/VILLAGE';
$SiteTitle = "Welcome to VILLAGE-ERA";



// Database Connection
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'village_era_db';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$conn){
	die('Database connection error!');
}

