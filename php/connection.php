<?php

$dbhost = "sql10.freemysqlhosting.net";
$dbuser = "sql10417368";
$dbpass = "IPF9gv1jIf";
$dbname = "sql10417368";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
