<?php

$dbhost = "ec2-54-243-92-68.compute-1.amazonaws.com
";
$dbuser = "erbtjbzxgnerkz";
$dbpass = "e5b5e75974f65d29dbe357dfa17ac218c915b803b40cc97a9a7a1c96556ea438";
$dbname = "d8pveiffejcoc7";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
