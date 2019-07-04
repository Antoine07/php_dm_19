<?php
require_once __DIR__ . '/../bootstrap.php';

if ( !empty($_POST) ) {

    $rules = [
        'firstname'    => FILTER_SANITIZE_STRING,
        'lastname'    => FILTER_SANITIZE_STRING,
        'email' => FILTER_VALIDATE_EMAIL,
    ];

    $sanitize = filter_input_array(INPUT_POST, $rules);

    $error = false;
    $_SESSION['old'] = [];
    $_SESSION['errors'] = [];

    $_SESSION['old']['firstname'] = $sanitize['firstname'];
    $_SESSION['old']['lastname'] = $sanitize['lastname'];
    $_SESSION['old']['email'] = $sanitize['email'];

    if (!$sanitize['firstname']) {
        $_SESSION['errors']['firstname'] = 'your firstname is invalid';

        $error = true;
    }

    if (!$sanitize['lastname']) {
        $_SESSION['errors']['lastname'] = 'your lastname is invalid';
        $error = true;
    }

    if (!$sanitize['email']) {
        $_SESSION['errors']['email'] = 'your email is invalid';
        $error = true;
    }

    if ($error) {
        $_SESSION['flashMessage'] = 'there was a problem';

        header('Location: ../app.php');
        exit;
    }

    else{
        $_SESSION['flashMessage'] = 'Super';
        $_SESSION['user'] = $sanitize['firstname'];

        header('Location: ../views/dashboard.php');
        exit;
    }
}


if( !empty($_GET)) {
    $_SESSION['flashMessage'] = "De retour sur la page d'accueil !";
    session_unset();

    header('Location: ../app.php');
    exit;
}