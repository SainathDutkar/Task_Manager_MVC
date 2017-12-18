<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styleSheet.css">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
    <style>
        table {
            border-collapse: collapse;
            width: 75%;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even){background-color: #f2f2f2}
        tr:nth-child(odd){background-color: #c7cfdb}
        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>

<body>
<font color="white"><h5>Sainath Dutkar (sgd23)</h5></font>
<center>
    <br><br>
    <?php
//this is how you print something  $data contains the record that was selected on the table.

print utility\htmlTable::generateTableFromOneRecord($data);
//print_r($data);
?>
</center>
<br>
<div class="loginAllTask">
<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete" class="btn btn-primary btn-block btn-large">Delete Task</button>
</form>
    <br>
<form action="index.php?page=tasks&action=edit&id=<?php echo $data->id; ?> " method="post" id="form2">
    <button type="submit" form="form2" value="delete" class="btn btn-primary btn-block btn-large">Edit Task</button>
</form>
<br>
        <h1><a href="index.php?page=accounts&action=show" class="btn btn-primary btn-block btn-large">My Profile </a></h1>
<br>
        <form action="index.php?page=accounts&action=logout" method="post">
            <button type="submit" class="btn btn-primary btn-block btn-large">Logout</button>
        </form>

</div>
</font>



<script src="js/scripts.js"></script>
</body>
</html>