<?php  if(isset($_POST['email'])){
   $gn=$_POST['name'];
   $mail=$_POST['email'];
   $msg=$_POST['mg'];
 $phone=$_POST['contact'];
include("Login_alacrity/link.php");
$query = mysqli_query($link,"INSERT INTO feedback values('$gn','$mail','$phone','$msg')");

if($query)
       echo("<script>alert(\"Submission Successful\");</script>");
else
	echo("<script>alert(\"Submission NOT Successful\");</script>");
echo"<script>setTimeout(\"location.href='contact us.html';\",10);</script>";
}else	header("location:index.html"); ?>