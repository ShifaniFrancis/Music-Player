<?php
session_start();
$_SESSION['usern']=$_POST["user"];
$_SESSION['starttime']=time();
$_SESSION['start']=1;
// Connecting to database
$conn=mysqli_connect('localhost','root','','musicapp');
if(!$conn){
die("connection failed:".mysqli_connect_error());}
$user=$_POST["user"];
$pass=$_POST["pass"];
$access="select * from userdetails where username='$user'";
$res=mysqli_query($conn,$access);
$arr=mysqli_fetch_array($res,MYSQLI_ASSOC);
// Checking if entered credentials are correct
if($arr["password"]==$pass){
    echo "<script>window.location.href = 'index.php'</script>";
}
else{
echo "<center><p>Wrong username and password combination</p><center>";
echo "<br><center><a href=login.php>Click here to go back</a></center>";
}
?>