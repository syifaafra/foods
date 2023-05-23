<?php

$host = "localhost";
$db   = "foods";

$conn = mysqli_connect($host, $user, $pass);
mysqli_select_db($conn, $db);
