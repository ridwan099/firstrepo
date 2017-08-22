<html>
<head>
<title>Insert DATA ino DB</title>
<style type= "text/css">
table{
    border: 2px solid red;
    background-color:#ffc;
}
th{
    border-bottom:5px solid #000;
}
td{
    border-bottom: 2px solid #666;
}
</style>
</head>
<body>

<h1Insert Data into DB and Display></h1>

<?php
//Insert into Database
$host = 'localhost';
$user = 'root';
$password = '';

$con = mysql_connect($host,$user,$password);

if(!$con){
    die("couldnot connect:".mysql_error());
}echo("Enter Your Details Here");
if(isset($_POST['submit'])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];
mysql_select_db("HNGTEST");
$check= "INSERT INTO hngtb(firstname,lastname,age) VALUES ('$fname','$lname','$age')";
$result = mysql_query($check,$con);

if(!$result){
    die("Data not submitted:".mysql_error());
}echo("data Successfully submitted!!!!");

}

?>
<form method="post" action="insert-data.php">

<fieldset>
    <legend>New People</legend>
    <label>First Name: <input type="text" name="fname" /></label>
    <label>Last Name: <input type="text" name="lname" /></label>
    <label>Age: <input type="text" name="age" /></label>
</fieldset>
<br/>
<input type="submit" name="submit" value="add new person" />
</form>

<?php
//Display the Content of the Database
$host = 'localhost';
$user = 'root';
$password = '';

$con = mysql_connect($host,$user,$password);

if(!$con){
    die("couldnot connect:".mysql_error());
}echo("Here is the Database History");



mysql_select_db("HNGTEST");
$check= " SELECT firstname,lastname,age FROM hngtb";
$result = mysql_query($check,$con);

if(!$result){
    die("Data not submitted:".mysql_error());
}
echo"<table>";
echo"<tr><th>Serial Number</th><th>First Name</th><th>Last Name</th><th>Age</th></tr>";
$serial = 1;
while($row=mysql_fetch_array($result,MYSQL_ASSOC))
{
    echo"<tr>"."<td>$serial</td>"."<td>{$row['firstname']}</td>"."<td>{$row['lastname']}</td>"."<td>{$row['age']}</td>";
    $serial++;
}

echo"</table>";

?>



</body>
</html>