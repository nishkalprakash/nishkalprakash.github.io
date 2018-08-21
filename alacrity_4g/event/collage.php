<?php  if(isset($_POST['email'])){

   $gn=$_POST['gname'];
   $m1=$_POST['mem1'];
   $m2=$_POST['mem2'];
   $m3=$_POST['mem3'];
   $mail=$_POST['email'];
   $ins=$_POST['inst'];
   $phone=$_POST['contact'];
include("../Login_alacrity/link.php");
 
 $query=mysqli_query($link,"INSERT INTO collage values('$gn','$m1','$m2','$m3','$mail','$ins','$phone')") ;
if($query)
         echo("<script>alert(\"Registration Successful\");</script>");
else
	echo("<script>alert(\"Registration NOT Successful\");</script>");
echo "<script>history.go(-2)</script>";
}else	header("location:../index.html"); ?>