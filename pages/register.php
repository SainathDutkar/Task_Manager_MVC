<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>


<form name="accountDetail" action="index.php?page=accounts&action=register" onsubmit="return validateForm()" method="post">
    First name: <input type="text" name="fname" required><br>
    Last name: <input type="text" name="lname" required><br>
    Email: <input type="text" name="email"><br>
    Phone: <input type="text" name="phone"><br>
    Birthday: <input type="text" name="birthday"><br>
    Gender: <input type="text" name="gender"><br>
    Password: <input type="password" name="password" minlength="6"><br>
    <input type="submit" value="Submit form">
</form>

<script>
    function validateForm() {
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var firstname = document.forms["accountDetail"]["fname"].value;
        var lastName = document.forms["accountDetail"]["lname"].value;
        var email = document.forms["accountDetail"]["email"].value;
        var password = document.forms["accountDetail"]["password"].value;

        var alertmessage = "";
       /* if (firstname =="")
        {
            alertmessage = alertmessage + "At least 1 character needed for First Name ,";
            // alert(alertmessage);
            // return false;
        }
        if (lastName == "")
        {
            alertmessage = alertmessage + "At least 1 character needed for Last Name ,";
        }
        if (password < "6")
        {
            alertmessage = alertmessage + "Password must be at least 6 character long ,";
        } */
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

<script src="js/scripts.js"></script>
</body>
</html>
