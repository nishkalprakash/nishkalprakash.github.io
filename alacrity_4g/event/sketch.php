<?php  if(isset($_POST['email'])){

   $f=$_POST['fname'];
   $l=$_POST['lname'];
   $mail=$_POST['email'];
   $ins=$_POST['inst'];
   $phone=$_POST['contact'];
include("../Login_alacrity/link.php");
 
$query=mysqli_query($link,"INSERT INTO sketching values('$f','$l','$mail','$ins','$phone')") ;
if($query)
         echo("<script>alert(\"Registration Successful\");</script>");
else
	echo("<script>alert(\"Registration NOT Successful\");</script>");
echo "<script>history.go(-2)</script>";
}else	header("location:../index.html"); ?>