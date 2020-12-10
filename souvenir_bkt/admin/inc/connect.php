<?php
	$host = "localhost";
	$user = "postgres";
	$pass = "opal191299";
	$port = "5432";
	$dbname = "souvenir";
	$conn = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$pass) or die("Gagal");
?>