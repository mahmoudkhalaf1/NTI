<?php 
session_start();
$server = "localhost";
$dbName = "std";
$dbUser = "root";
$dbPassword = "";

$con = mysqli_connect($server,$dbUser,$dbPassword,$dbName);

//  if($con){
    
//      echo 'connecting ';
//  }
//  else
//  {
//     die("Error : ".mysqli_connect_error());
//  }

 if(!$con){
    
    die("Error : ".mysqli_connect_error());
}




?>