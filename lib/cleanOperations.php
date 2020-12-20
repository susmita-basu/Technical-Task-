<?php
function clean($data)
{
    // return the clean data for processing purpose
    /*global $err_msg;
    if(empty($_POST['user']))
    {
    	$err_msg="ENTER USERNAME </ br>";
    }
    if(empty($_POST['pwd']))
    {
    	$err_msg="ENTER PASSWORD </ br>";
    }

    $con = mysqli_connect("localhost","root","1234") or die("DB Server is down");
	mysqli_select_db($con,"task") or die("DB not available");
	$username=mysqli_real_escape_string($con,$_POST['user']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$pwd=mysqli_real_escape_string($con,$_POST['pwd']);
	$cpwd=mysqli_real_escape_string($con,$_POST['cpwd']);

	$data['user']=$username;
	$data['pwd']=$pwd;
	$data['cpwd']=$cpwd;
	$data['email']=$email;*/

	return $data;
}
?>