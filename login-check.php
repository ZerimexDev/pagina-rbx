<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);

		$sql = "SELECT * FROM users WHERE user_name='$uname'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname) {
            	$_SESSION['user_name'] = $row['user_name'];
            	header("Location: home.php");
		        exit();
            }

		}else{

			$coins = 0;
			$sql2 = "INSERT INTO users(user_name, coins, task1, task2, task3) VALUES('$uname', '$coins', 'no', 'no', 'no')";
            mysqli_query($conn, $sql2);
            $_SESSION['user_name'] = $uname;
            header("Location: home.php");
		    exit();


		}

	
}else{
	header("Location: index.php");
	exit();
}