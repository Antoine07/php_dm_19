<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
</head>
<body>
    <?php echo flashMessage() ; ?>
    <form action="./src/check.php" method="post" >
        <p> <small>(*)</small> champ(s) obligatoires</p>
        <p>
            <label for="firstname">FistName <small>(*)</small> :</label>
            <input type="text" value="<?php echo old('firstname') ?>" name="firstname">
            <?php echo error('firstname'); ?>
        </p>
        <p>
            <label for="lastname">Lastname  <small>(*)</small> :</label>
            <input type="text" value="<?php echo old('lastname') ?>" name="lastname">
            <?php echo error('lastname'); ?>
        </p>
        <p>
            <label for="email">Email  <small>(*)</small> :</label>
            <input type="email" value="<?php echo old('email') ?>" name="email">
            <?php echo error('email'); ?>
        </p>
        <p><input type="submit" value="Go"></p>
    </form>
</body>

</html>