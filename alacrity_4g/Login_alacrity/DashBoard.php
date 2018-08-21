<?php
$str=null;
$str1=null;
$x=null;
if(isset($_POST['nm'],$_POST['pwd']))
{
    $unm=$_POST['nm'];
	$pwd=$_POST['pwd'];
	
    include("link.php");
    
    $qry="select password from login where user_name='$unm'";
    $res=mysqli_query($link,$qry);
	$r=mysqli_fetch_row($res);
    if($res && (strcmp($pwd,$r[0])==0))
	{ 
		$str1=<<<Demo
                <!doctype html>
                <html>
                <head>
                    <title>DashBoard</title>
                </head>
                <body align="center">
                <form name="dash" action="show.php" method="post"></br></br></br></br>
                    <select name="event_name">
						<option value="antakshari">Antakshari</option>
						<option value="rock_band">Band Competition</option>
						<option value="collage">Collage Making Competition</option>
						<option value="dance">Dance Competition</option>
						<option value="debate">Debate</option>
						<option value="face_painting">Face Painting</option>
						<option value="fashion_parade">Fashion Parade</option>
						<option value="instrumental">Instrumental</option>
						<option value="jminute">Just a Minute</option>
						<option value="photography">Photography Competition</option>
						<option value="quiz">Quiz</option>
						<option value="shortfilm">Short-Film Making</option>
						<option value="sketching">Sketching</option>
						<option value="singing">Solo Singing</option>
						<option value="shirt_painting">T-Shirt Painting</option>
						<option value="t_hunt">Treasure Hunt</option>
						<option value="lan_cs">Counter Strike 1.6</option>
						<option value="lan_nfs">NFS-MW</option>
						<option value="lan_mini">Mini Militia</option>
						<option value="coding">CSE Coding</option>
						<option value="tquiz">Tech Quiz</option>
						<option value="me_welding">ME Welding</option>
						<option value="auto_cad">CE CAD Drawing</option>
						<option value="robo">Robo-Soccer</option>
						<option value="ee_wire">EE Wire Sprint</option>
                                                <option value="ee_wave">EE Wave Whizz</option>
                                                <option value="ee_wire">EE Transformer Design</option>
						<option value="ee_project">EE Project on non-conventional sources</option>
						<option value="ce_sectional">CE Sectional Elevation of multi-storeyed building</option>
						<option value="ce_roof">CE Reinforcement of Roof Slab</option>
						<option value="ce_ppt">CE PPT</option>
						<option value="ece_circuit">ECE Electronic Circuit Designing</option>
						<option value="ece_project">ECE Electronic Mini Project Demonstration</option>
						<option value="ece_seminar">ECE Technical Seminar</option>
						<option value="feedback">Feedbacks</option>
					</select>
					</br></br></br></br></br></br></br>
					<input type=submit value="Show" name="event_sub">
					$str
                </form>
                </body>
                </html>
Demo;
echo $str1;
	}
    else
		header("location:Login.php?y=1");
}
else
		header("location:Login.php?y=1");
?>