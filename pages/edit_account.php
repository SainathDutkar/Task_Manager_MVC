<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styleSheet.css">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

<!--
<h1>Email: <?php echo $data->email; ?></h1>
<h1>First Name: <?php echo $data->fname; ?></h1>
<h1>Last Name: <?php echo $data->lname; ?></h1>
-->

<?php
//this is how you print something  $data contains the record that was selected on the table.

//print_r($data);


?>
<font color="white">
<div class="login">
<form name="accountDetail" action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" onsubmit="return validateForm()" method="post">

    First name: <input type="text" name="fname" value="<?php echo $data->fname; ?>" required><br>
    Last name: <input type="text" name="lname" value="<?php echo $data->lname; ?>" required><br>
    Email: <input type="text" name="email" value="<?php echo $data->email; ?>"><br>
    Phone: <input type="text" name="phone" value="<?php echo $data->phone; ?>"><br>
    Birthday: <input type="text" name="birthday" value="<?php echo $data->birthday; ?>"><br>
    Gender: <input type="text" name="gender" value="<?php echo $data->gender; ?>"><br>
    <input type="submit" value="SAVE" class="btn btn-primary btn-block btn-large">
</form>
<br>

<form action="index.php?page=accounts&action=logout" method="post">
    <button type="submit" class="btn btn-primary btn-block btn-large">Logout</button>
</form>
</div>
</font>
<!--<form action="index.php?page=accounts&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form>
-->

<script src="js/scripts.js"></script>

<script>
    function validateForm() {
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var firstname = document.forms["accountDetail"]["fname"].value;
        var lastName = document.forms["accountDetail"]["lname"].value;
        var email = document.forms["accountDetail"]["email"].value;
        var password = document.forms["accountDetail"]["password"].value;

        var alertmessage = "";

        if (email == "")
        {
            alertmessage = alertmessage + "Please enter the Email address";
        }
        if (!email.match(mailformat) && email != "")
        {
            alertmessage = alertmessage + "Email address is not Valid.";
        }

        if (alertmessage != "")
        {
            alert(alertmessage);
            return false;
        }

    }
</script>
</body>
</html>
