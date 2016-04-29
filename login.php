<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Project Toscana</title>

    <link href="https://cdn.jsdelivr.net/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
</head>
<body>

<!-- Navigation -->

<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Project Toscana</a>
        </div>
    </div>
</nav>

<!-- Navigation ENDE -->

<div class="container">
    <div class="form-box">
        <form action="actions/login-action.php" method="post">
            <input type="password" name="password" class="form-control" placeholder="Passwort ...">
            <br>
            <button type="submit" class="btn btn-lg btn-success btn-block">Authentifizieren</button>
        </form>
    </div>
</div>


<!-- JS -->
<script src="https://cdn.jsdelivr.net/jquery/3.0.0-beta1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- JS ENDE -->
</body>
</html>