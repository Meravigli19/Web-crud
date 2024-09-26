<?php
$databaseHost = 'localhost';
$databaseName = 'test';
$databaseUsername = 'ubuntu';
$databasePassword = 'vockey';

// Open a new connection to the MySQL server
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
