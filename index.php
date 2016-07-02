<!DOCTYPE html>
<?php 
	session_start();
	if (!isset($_SESSION['user'])) {
		header("Location: login.php");
		exit();
	}

    $page = 'players';
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="NovaGaming Admin Login panel">
    <meta name="author" content="Jack Miller">
    <link rel="icon" href="assets/favicon.ico">

    <title>Nova Admin Panel</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php include("navbar.html");?>

    <div class="container">
        <div class="centered">
            <h1>Players</h1>
            <select class="selection" name="test" size="25">
                <option>test1</option>
                <option>test1</option>
                <option>test1</option>
                <option>test1</option>
                <option>test1</option>
                <option>test1</option>
                <option>test1</option>
            </select>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
