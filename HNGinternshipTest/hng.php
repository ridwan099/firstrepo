<html>
<head>
<title>My PHP Script</title>
</head>
<body>

<?php
//Creation of Database
$host = 'localhost';
$user = 'root';
$password = '';

$con = mysql_connect($host,$user,$password);

if(!$con){
    die("couldnot connect:".mysql_error());
}echo("Successfully Connected to Database!!!!");


$check= "CREATE DATABASE HNGTEST";
$result = mysql_query($check,$con);

if(!$result){
    die("Database not created:".mysql_error());
}echo("database Successfully created!!!!");

?>

<?php
//Creation of Table
$host = 'localhost';
$user = 'root';
$password = '';

$con = mysql_connect($host,$user,$password);

if(!$con){
    die("couldnot connect:".mysql_error());
}echo("Successful!!!!");

mysql_select_db("HNGTEST");
$check= "CREATE TABLE hngtb(
  Post_Id INT(10) NOT NULL AUTO_INCREMENT,
  firstname VARCHAR(20) NOT NULL,
  lastname VARCHAR(20) NOT NULL,
  age INT(20) NOT NULL,
    PRIMARY KEY(Post_Id)
)";
$result = mysql_query($check,$con);

if(!$result){
    die("table not created:".mysql_error());
}echo("Table created successfully!");


?>


</body>



</html>