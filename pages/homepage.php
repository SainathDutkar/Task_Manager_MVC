<!doctype html>

<html lang="en">
<head>

    <link rel="stylesheet" href="styleSheet.css">


    <meta charset="utf-8">

    <title>WSD FINAL PROJECT</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
<font color="white"><h5>Sainath Dutkar (sgd23)</h5></font>


<!--
<h1><a href="index.php?page=accounts&action=all">Show All Accounts</a></h1>
<h1><a href="index.php?page=tasks&action=all">Show All Tasks</a></h1>
-->
<font color="white">
<div class="login">
<form action="index.php?page=accounts&action=login" method="POST">

   <!-- <div class="container"> -->
        <h1>LOGIN</h1>
        <input type="text" placeholder="Enter Username" name="email" required>


        <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" class="btn btn-primary btn-block btn-large">Login</button>
    <BR>
  </form>

    <form action="index.php?page=accounts&action=registerUser" method="post">
        <h1>New User ?</h1>
        <button type="submit" class="btn btn-primary btn-block btn-large">Register</button>
    </form>
</div>
</font>


<!--<form action="index.php?page=tasks&action=delete&id=<?php /*$data['id'] */?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form>-->



<script src="js/scripts.js"></script>
</body>
</html>