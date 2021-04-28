<?php
	
require_once('db.php');

function validateUser($username, $password){
	$conn = getConnection();
	$sql = "select * from registration where username='{$username}' and password='{$password}'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	if(count($row) > 0){
		return true;
	}else{
		return false;
	}
}

function insertUser($user)
{
	$conn = getConnection();
	$sql = "insert into registration values('', '{$user['name']}', '{$user['email']}', '{$user['username']}', '{$user['password']}')";

	$result = mysqli_query($conn, $sql);

	if($result){
		return true;
	}else{
		return false;
	}

}


function getAllUser()
{
	$conn = getConnection();
	$sql = "select * from registration";
	$result = mysqli_query($conn, $sql);
	$users = [];
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($users, $row);
	}
	return $users;
}

	function updateuser($id, $user)
	{

		$conn = getConnection();
		$sql = "update registration set name = '{$user['name']}', email='{$user['email']}', username='{$user['username']}' where id='{$id}'";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

		function getuserbyid($id)
	{

		$conn = getConnection();
		$sql = "select * from registration where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function deleteuser($id)
	{
		$conn = getConnection();
		$sql = "delete from registration where id='{$id}'";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function getissues()
	{
		$conn = getConnection();
		$sql = "select * from issues";
		$result=mysqli_query($conn,$sql);
		$users = [];
		while ($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}
		return $users;

	}
	function getfeedback()
	{
		$conn = getConnection();
		$sql = "select * from contact";
		$result=mysqli_query($conn,$sql);
		$users = [];
		while ($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}
		return $users;

	}








?>