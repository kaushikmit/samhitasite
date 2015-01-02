<?php
session_start();
define('DB_SERVER', 'mysql.samhita.org.in');
define('DB_USERNAME', 'samhitaitadbuser');
define('DB_PASSWORD', 'SIGSEGV_samhitadb');
define('DB_DATABASE', 'samhitaitadb');
$connection = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die(mysqli_error());
?>