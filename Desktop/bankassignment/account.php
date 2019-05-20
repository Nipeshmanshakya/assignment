<?php
include 'LoginController.php';
?>
<html>
<head>
    <title>Welcome to Secure Bank</title>
    <link rel="stylesheet" type="text/css" href="style.css">

<style>
	        body{
                background-image: url("image/img1.jpg");
                background-repeat: no-repeat;
                background-size: cover;
            }
</style>
</head>
<body>
<header>
    <span class="right"><img src="image/sblogo.png" alt="sb logog" style="width:10%; height:10%;"></span>
<div class="menu">
            <ul class="topmenu">
                <li class="topmenu"><a class="active" href="home.php">Home</a></li>
                <li class="topmenu"><a href="#accounts">Accounts</a></li>
                <li class="topmenu"><a href="#transactions">Transactions</a></li>
                <li class="topmenu"><a href="#estatements">Estatements</a></li>
                <li class="topmenu"><a href="#transfers">Transfers & pay</a></li>
                <li class="topmenu">
                    <a href="#manage">Manage</a></li>
                <li class="topmenu"><a href="#message">Message</a></li>
                <li class="topmenu"><a href="#aboutus">About us</a></li>
                 </ul>
</div>
    <div class="top-bottom"><a href="login.php">Logout</a></div>
</header>

<h1>
    <?php
        if (isset($_SESSION['message'])){
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }
    ?>
</h1>
</body>
</html>