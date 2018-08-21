<?php
$x=null;
if(isset($_GET['y']))
{
    $y=$_GET['y'];
    if($y)
        $x="Incorrect Username or Password";
}

$str=<<<Demo
    <!DOCTYPE html>
    <html>
    <head>
    	<title>Login Page</title>
    </head>
    <body>
        <form name="login" action="DashBoard.php" method="POST">
            <fieldset>
                <legend>Login</legend>
                <center>$x</center>
                <table align="center" border="5" cellpadding="10" bordercolor=#80FF80>
                    <tr><td align="center">Username</td><td><input required type="text" name="nm" placeholder="Enter Username or Email"></td></tr>
                    <tr><td align="center">Password</td><td><input required type="password" name="pwd" placeholder="Enter Password"></td></tr>
                    <tr><td align="center" colspan="2"><input type=submit value="Login" name="login"></td></tr>
                </table>        
            </fieldset>
            <marquee scrollamount=20 behavior=alternate direction=left onmouseover=stop() onmouseout=start()>YO!</marquee>
        </form>
    </body>
    </html>
Demo;
echo $str;
?>

