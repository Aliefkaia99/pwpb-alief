<?php
$server		="localhost";
$database	="sekolahku";
$username	="root";
$password	="";
$koneksi	=mysqli_connect($server, $username, $password, $database)
			or trigger_error(mysqli_error(),E_USER_ERROR);
			?>