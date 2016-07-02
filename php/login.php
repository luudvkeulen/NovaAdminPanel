<?php
	session_start();
	
    $error = '';

    if(isset($_SESSION['user'])) {
        header("Location: index.php");
		exit();
    } else {
        if (isset($_POST['submit'])) {
            if(empty($_POST['username']) || empty($_POST['password'])) {
                $error = 'Username or Password is invalid';
            } else 
            {
                $username = $_POST['username'];
                $password = $_POST['password']
                $username = stripslashes($username);
                $password = stripslashes($password);
                $username = mysql_real_escape_string($username);
                $password = mysql_real_escape_string($password);
                if (!isset($_SESSION['user'])) {
                    $_SESSION['user'] = $username;
                }
            }
        }
    }	
?>