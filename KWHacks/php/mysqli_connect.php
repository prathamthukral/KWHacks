<?php

/*
Command that gives the database user the least amount of power
as is needed.
GRANT INSERT, SELECT, DELETE, UPDATE ON test3.*
//for some reason database instead of test3 does not work
TO 'virtualschedulerweb'@'localhost' 
IDENTIFIED BY 'a2+b2=c2';
SELECT : Select rows in tables
INSERT : Insert new rows into tables
UPDATE : Change data in rows
DELETE : Delete existing rows (Remove privilege if not required)
*/

// Defined as constants so that they can't be changed
DEFINE ('DB_USER', 'virtualschedulerweb');
DEFINE ('DB_PASSWORD', 'a2+b2=c2');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'test3');

// $dbc will contain a resource link to the database
// @ keeps the error from showing in the browser

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL: ' .
mysqli_connect_error());
?>
