<?php
session_start();
require_once('../Model/db.php');
require_once('../Model/usermodel.php');

if ( isset ( $_POST [ 'submit' ])) 
{
	$id = $_SESSION['id'];
	$name = $_POST [ 'name' ];
	$email =$_POST [ 'email' ];
	$username = $_POST['username'];

	$user = array('name' => $name, 'email' => $email, 'username' => $username);
	$connection = getConnection();
	$check= updateuser($id, $user);
		if($check)
		{
			echo "profile updated!";
			header('location:../View/viewprofile.php');
		}
		else
		{
			echo "Error ";
		}

		if(isset($_POST['check']))
		{
			session_start();
			$_SESSION['check'] = true;
		}

}

?>
