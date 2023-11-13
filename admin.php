

<?php
session_start();
include("connection.php");
$adminid = $_POST['adid'];
$password = $_POST['pass'];
$admin="admin";
$adminpassword="admin";
$counterp=strcmp($password,$adminpassword);
$countera=strcmp($adminid,$admin); 
if(($counterp==0) && ($countera==0))
{
   echo "<script>alert('Welcome Admin');</script>";
   echo"<img src='./dashboard2.avif'>";
   echo "<style>
	img{
      width: 100%;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
</style>";
}
else
{
   echo "<script>alert('Wrong Id and Password Try Again');window.location ='admin.html';</script>";
}
?>

<!-- window.location ='dashboard1.jfif'; -->