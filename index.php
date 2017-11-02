<?php
$servername = "sql2.njit.edu";
$username = "sp2344";
$password = "mzta4xT7I";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
        }
	    echo "Connected successfully";
	     ?>
