<?php
require_once '../bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    <h1>Bienvenu : <?php echo userInfo() ; ?></h1>
    <p><a href="../src/check.php?back=1" >Accueil</a></p>
</body>
</html>