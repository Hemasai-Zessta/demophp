<?php 
	require_once 'connection.php';
 
	if(ISSET($_POST['login']))
    {
		if($_POST['username'] != "" || $_POST['password'] != "")
        {
			$username = $_POST['username'];
			$password = $_POST['password'];
			$sql = "SELECT * FROM userdetails WHERE username=? AND password=? ";
			$query = $conn->prepare($sql);
			$query->execute(array($username,$password));
			$row = $query->rowCount();
			$fetch = $query->fetch();
			if($row > 0) 
            {
				$_SESSION['user'] = $fetch['userid'];
				header("location: home.php");
			} 
            else{
				echo "Invalid username or password";
			}
		}
        else
        {
			echo "Please complete the required feild";
		}
	}
?>