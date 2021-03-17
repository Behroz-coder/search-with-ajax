<?php

$servername="localhost";
$username="root";
$password="";
$database="crud";

$conn=mysqli_connect($servername,$username,$password,$database);

mysqli_dump_debug_info($conn);


?>
