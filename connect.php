<?php
	$host = "ec2-52-206-15-227.compute-1.amazonaws.com";
	$user = "zfymuprvcudbfb";
	$pass = "7ddee8bbc2a0eeea83665f52614d7885cf991be9c915193ba773a40254686491";
	$port = "5432";
	$dbname = "deen1kj39tcbi8";
	$conn = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$pass) or die("Gagal");
?>
