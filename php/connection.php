<?php

   $con = "dbname=d8pveiffejcoc7 host=ec2-54-243-92-68.compute-1.amazonaws.com
 port=5432 user=erbtjbzxgnerkz password=e5b5e75974f65d29dbe357dfa17ac218c915b803b40cc97a9a7a1c96556ea438 sslmode=require";

if (!$con) 
   {
     echo "Database connection failed.";
   }
   else 
   {
     echo "Database connection success.";
   }
?>
