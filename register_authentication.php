<?php
	require_once 'connection.php';
 
	if(ISSET($_POST['register']))
    {
		if($_POST['firstname'] != "" || $_POST['username'] != "" || $_POST['password'] != "")
        {
			try
            {
				$firstname = $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$username = $_POST['username'];
				$password = $_POST['password'];
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "INSERT INTO userdetails VALUES ('', '$firstname', '$lastname', '$username', '$password')";
				$conn->exec($sql);
			}
            catch(PDOException $e)
            {
				echo $e->getMessage();
			}
			$conn = null;
			header('location:register_succ.php');
		}
        else
        {
			echo "Please fill up the required field!";
		}
	}
?>