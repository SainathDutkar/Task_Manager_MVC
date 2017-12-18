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
</head>

<body>
<font color="white">
    <div class="login">
    <?php
//this is how you print something  $data contains the record that was selected on the table.

print utility\htmlTable::generateTableFromOneRecord($data);
//print_r($data);
?>

<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete" class="btn btn-primary btn-block btn-large">Delete</button>
</form>
    <br>
<form action="index.php?page=tasks&action=edit&id=<?php echo $data->id; ?> " method="post" id="form2">
    <button type="submit" form="form2" value="delete" class="btn btn-primary btn-block btn-large">EDIT</button>
</form>
</div>
</font>



<script src="js/scripts.js"></script>
</body>
</html>