<?php
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>

    <title>Project Toscana</title>

    <link href="https://cdn.jsdelivr.net/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css" rel="stylesheet">
</head>
<body>

<!-- Navigation -->


<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Project Toscana</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="upload.php">Hochladen</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown" id="menu1">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#menu1">
                    Sortierung
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="?sorting=upload_descending">Uploaddatum ↓</a></li>
                    <li><a href="?sorting=upload_ascending">Uploaddatum ↑</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>


<script>
    $('.dropdown-toggle').dropdown();
</script>


<!-- Navigation ENDE -->
