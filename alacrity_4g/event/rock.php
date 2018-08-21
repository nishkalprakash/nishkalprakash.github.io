<?php  if(isset($_POST['email'])){

   $group=$_POST['gname'];
   $m1=$_POST['mem1'];
   $mail=$_POST['email'];
   $phone=$_POST['contact'];
include("../Login_alacrity/link.php");
 
$query=mysqli_query($link,"INSERT INTO rock_band values('$group','$m1','$mail','$phone')") ;
if($query)
         echo("<script>alert(\"Registration Successful\");</script>");
else
	echo("<script>alert(\"Registration NOT Successful\");</script>");
echo "<script>history.go(-2)</script>";
}else	header("location:../index.html"); ?>