<?php

	
	function insertcontact($contact)
	{
		$conn = getConnection();
		$sql = "insert into contact values('', '{$contact['name']}', '{$contact['username']}', '{$contact['email']}', '{$contact['subject']}')";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}


	function getAllcontact()
	{
		$conn = getConnection();
		$sql = "select * from contact";
		$result = mysqli_query($conn, $sql);
		$users =[];

		while($row = mysqli_fetch_assoc($result))
		{
			array_push($users, $row); 
		}

		return $users;
	}



















?>