<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styleSheet.css">
    <title>WSD MVC PROJECT</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

  <!--  <link rel="stylesheet" href="css/styles.css?v=1.0">

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
<br>
<center>
<?php
//this is how you print something
$arr = (array)$data;
if (empty($arr)) {
    echo "<font color='white'><h1>You have no task on your ID, Please create by clicking ADD TASK</h1></font> ";
}
else
{
print utility\htmlTable::genarateTableFromMultiArray($data);
}
?>
</center>
<br>
<div class="loginAllTask">
    <br>
<h1><a href="index.php?page=accounts&action=show" class="btn btn-primary btn-block btn-large">View my profile </a></h1>
<div class="topright"><a href="index.php?page=tasks&action=create" class="btn btn-primary btn-block btn-large">Add Task </a></div>
<br>
<form action="index.php?page=accounts&action=logout" method="post">
    <button type="submit" class="btn btn-primary btn-block btn-large">Logout</button>
</form>
</div>
<script src="js/scripts.js"></script>
</body>
</html>