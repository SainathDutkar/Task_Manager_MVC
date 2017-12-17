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


<form action="index.php?page=tasks&action=addtask" method="POST">
    Owner email: <input type="text" name="owneremail"><br>
    Created date: <input type="text" name="cdate"><br>
    due date: <input type="text" name="ddate"><br>
    message: <input type="text" name="message"><br>
    isdone: <input type="text" name="isdone"><br>
    <button type="submit">Add Task</button>
</form>



    
<script src="js/scripts.js"></script>
</body>
</html>
