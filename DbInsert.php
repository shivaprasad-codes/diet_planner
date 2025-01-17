<?php
$servername="localhost";
$username="root";
$password="";
$db="ip3";

$user=$_POST["username"];
$pwd=$_POST["pwd"];
$email=$_POST["email"];
$age=$_POST["age"];
$height=$_POST["height"];
$gender=$_POST["gender"];

$conn=mysqli_connect($servername,$username,$password,$db);

if(!$conn)
{
    die("Connection Falied:".mysqli_connect_error());
}
else
{
$sql="INSERT INTO new_user VALUES('$email','$user','$pwd','$age','$height','$gender')";

if(mysqli_query($conn,$sql))
{
    header("location:login.html");
}
else
{
echo "Data is'nt inserted sucessfully!";
}
}
?>