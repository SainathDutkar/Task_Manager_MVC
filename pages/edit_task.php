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


<form name="updateTask" action="index.php?page=tasks&action=updatetask&id=<?php echo $data->id; ?>" onsubmit="return validateForm()" method="POST">
    Owner email: <input type="text" name="owneremail" value="<?php echo $data->owneremail;?>"><br>
    Owner id: <input type="text" name="ownerid" value="<?php echo $data->ownerid;?>" readonly><br>
    Created date: <input type="text" name="cdate" value="<?php echo $data->createddate;?>" readonly><br>
    due date: <input type="text" name="ddate" value="<?php echo $data->duedate;?>" readonly><br>
    message: <input type="text" name="message" value="<?php echo $data->message;?>" required><br>
    isdone: <input type="text" name="isdone" value="<?php echo $data->isdone;?>"><br>
    <input type="submit" value="UPDATE">
</form>

<script src="js/scripts.js"></script>
<script>
    function validateForm() {
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var email = document.forms["updateTask"]["owneremail"].value;
        var isdone = document.forms["updateTask"]["isdone"].value;
        var temp;
       // alert(isdone);
        var alertmessage = "";


        if (email == "")
        {
            alertmessage = alertmessage + "Please enter the Email address  ,";
        }
        if (!email.match(mailformat) && email != "")
        {
            alertmessage = alertmessage + "Email address is not Valid ,";
        }
        if (isdone == "1" || isdone == "0"){temp = true}

        if(!temp){
            alertmessage = alertmessage + "Please enter BINARY value 0/1 for IS DONE.";
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


<!--<form action="index.php?page=tasks&action=delete&id=<?php $data['id'] ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form>

