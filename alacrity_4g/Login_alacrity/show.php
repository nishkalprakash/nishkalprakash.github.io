<?php
$str=null;
$str1=null;
$x=null;
$header=null;
if(isset($_POST['event_sub']))
{
	$event=$_POST['event_name'];
	include("link.php");
    $qry="select * from $event";
	$res=mysqli_query($link,$qry);
	if($res)
	{
		switch($event)
		{
			case "antakshari":
			case "collage":
			
			case "quiz":
                        case "ee_trans":
							$header="<tr><th>Group Name</th><th>Member 1</th><th>Member 2</th><th>Member 3</th><th>Email</th><th>College Name</th><th>Phone No</th></tr>";
							while($r=mysqli_fetch_assoc($res))
								$x.="<tr><td>$r[group_name]</td><td>$r[member_1]</td><td>$r[member_2]</td><td>$r[member_3]</td><td>$r[email]</td><td>$r[inst]</td><td>$r[contact]</td></tr>";
							break;
						
			case "debate":
			case "ee_project":
			case "ee_wire":
			case "robo":
			case "tquiz":
			case "ce_ppt":
			case "face_painting":
                        case "ee_wave":
							$header="<tr><th>Member 1</th><th>Member 2</th><th>Email</th><th>College Name</th><th>Phone No</th></tr>";
							while($r=mysqli_fetch_assoc($res))
								$x.="<tr><td>$r[member_1]</td><td>$r[member_2]</td><td>$r[email]</td><td>$r[inst]</td><td>$r[contact]</td></tr>";
							break;			
			case "ce_roof":
			case "ece_circuit":
			case "ece_project":
			case "ece_seminar":
			case "fashion_parade":
			case "lan_cs":
                        case "lan_mini":
			case "t_hunt":
							$header="<tr><th>Group Name</th><th>Group Coordinator</th><th>Email</th><th>College Name</th><th>Phone No</th></tr>";
							while($r=mysqli_fetch_assoc($res))
								$x.="<tr><td>$r[group_name]</td><td>$r[member_1]</td><td>$r[email]</td><td>$r[inst]</td><td>$r[contact]</td></tr>";
							break;
			case "feedback":
							$header="<tr><th>Name</th><th>Email</th><th>Phone no</th><th>Message</th></tr>";
							while($r=mysqli_fetch_assoc($res))
								$x.="<tr><td>$r[name]</td><td>$r[email]</td><td>$r[contact]</td><td>$r[mg]</td></tr>";
							break;
                        case "dance":
			case "rock_band":
							$header="<tr><th>Group Name</th><th>Group Coordinator</th><th>Email</th><th>Phone No</th></tr>";
							while($r=mysqli_fetch_assoc($res))
								$x.="<tr><td>$r[group_name]</td><td>$r[member_1]</td><td>$r[email]</td><td>$r[contact]</td></tr>";
							break;
			case "shirt_painting":
$header="<tr><th>Group Name</th><th>Member 1</th><th>Member 2</th><th>Email</th><th>College Name</th><th>Phone No</th></tr>";
							while($r=mysqli_fetch_assoc($res))
								$x.="<tr><td>$r[group_name]</td><td>$r[member_1]</td><td>$r[member_2]</td><td>$r[email]</td><td>$r[inst]</td><td>$r[contact]</td></tr>";
							break;                                                     
                         default:
							$header="<tr><th>First Name</th><th>Last Name</th><th>Email</th><th>College Name</th><th>Phone Number</th></tr>";
							while($r=mysqli_fetch_assoc($res))
								$x.="<tr><td>$r[fname]</td><td>$r[lname]</td><td>$r[email]</td><td>$r[inst]</td><td>$r[contact]</td></tr>";
		}
		$str=<<<Demo2
		<hr size="10" width="100%" color=#FF8040>
        <font color="#8080FF"><h1 align="center">Registration List</h1></font>
        <hr size="10" width="100%" color=#FF8040><br/>
		<table align="center" border="5" cellpadding="10" cellspacing="15" bordercolor=#80FF80>
            <tr><th colspan="12">Displaying Records for $event</th></tr>
			$header
			$x
Demo2;
		$str1=<<<Demo
                <!doctype html>
                <html>
                <head>
                    <title>Show</title>
                </head>
                <body>
					$str
                </body>
                </html>
Demo;
    
}
else
		header("location:Login.php?y=1");
echo $str1;
}
?>