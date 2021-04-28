<?php
session_start();
require_once('../Model/usermodel.php');

if ( isset ( $_POST [ 'submit' ] ) ) {

	$name = $_POST [ 'name' ];
	$email =$_POST [ 'email' ];
	$username =$_POST [ 'username' ];
	$password =$_POST [ 'password' ];
	$confirm_password = $_POST [ 'confirm_password' ];



    if ( $name == "" || $email == "" || $username == "" || $password == "" || $confirm_password == "")
    	{
    		echo "*Null submission...";
    	}
    	else
			{
			if(isset($name)){

				$name_len=strlen($name);
	
				if( $name_len>1 && ( ($name>='A'&&$name<='Z') || ($name>='a'&&$name<='z') || 
					($name>='0'&&$name<='9') || $name=='-' || $name=='_' || $name=='.') ){
						echo "successful name field";
						echo "<br>";
				}else{
					echo "*Name at least 2 characters";
					echo "<br>";
				}
			}
				if(isset($password)){

					$pass_len=strlen($password);

					if($pass_len>7 && ( $password=='@' || $password=='#'|| $password=='$' || 
						$password=='%' || ($password>='A'&&$password<='Z') || ($password>='a'
						&&$password<='z') || ($password>='0'&&$password<='9') || $password=='-' 
						|| $password=='_' || $password=='.') ){
							echo "successful password field";
							echo "<br>";
					}else{
						echo "*password at least 8 characters";
						echo "<br>";
					}
				}

			if( ($pass_len>7 && ($password == $confirm_password)) && $name_len>2 )
			{

				$user = [	
			                'name'=>$name, 
							'username'=>$username, 
							'email'=> $email,
							'password'=>$password, 
							//'gender'=> $gender,
							//'dob' => $dob
						];
						$status = insertUser($user);

						if($status)
						{
							header('location:../View/login.php');
						}
						else
						{
							echo "Error..Please Try Again";
						}

						//$_SESSION['current_user'] = $user;			//header('location:../View/login.php');
			}
			else
			{
				echo "Password and Confirm password mismatch..";
			}
		}
	}
?>
<DOCTYPE HTML!>
  <head>
    <title></title>
  </head>
  <body>
    
     <a href="../View/registration.html">Back</a>
     
  </body>