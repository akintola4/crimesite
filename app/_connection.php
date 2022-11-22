<?php

require 'info.php';

$db = new Mysqli($dbhost, "DB_USER", "DB_PASSWORD", "DB_NAME");

if ($db) == true ? "We up!" : exit("Error Connecting".$db->connect_error()");


?>
