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
<br><br>
<center>
<?php
//this is how you print something  $data contains the record that was selected on the table.
//print_r($data);

print utility\htmlTable::generateTableFromOneRecord($data);

?>
</center>
<div class="login">
<form action="index.php?page=accounts&action=edit&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete" class="btn btn-primary btn-block btn-large">Edit</button>
</form>
<br>
<form action="index.php?page=accounts&action=logout" method="post">
     <button type="submit" class="btn btn-primary btn-block btn-large">Logout</button>
</form>

</div>
<script src="js/scripts.js"></script>

</body>
</html>