<?php

/**
 * error
 *
 * @param [string] $name
 * @param string $className
 * @return string
 * 
 * @abstract cette fonction permet de gérer l'affichage du message d'erreur
 */
function error($name, $className = 'error')
{
    if ( isset($_SESSION['errors'][$name]) ) {
        $message = $_SESSION['errors'][$name];

        return sprintf('<span class="%s" >%s</span>', $className, $message);
    }
}

/**
 * old function
 *
 * @param [string] $name
 * @return null | string
 * 
 * @abstract cette fonction permet de retourner en fonction de la clé la valeur d'un champ de formulaire
 * dans la gestion des erreurs du formulaire.
 */
function old($name){
    return $_SESSION['old'][$name] ?? null;
}

/**
 * flashMessage
 *
 * @return null | string
 * 
 * @abstract un flash message affiche un message puis l'efface de sa mémoire
 */
function flashMessage()
{
    if ( isset($_SESSION['flashMessage']) ) {

        $message = $_SESSION['flashMessage'];
        unset($_SESSION['flashMessage']);

        return "<p>Message : $message</p>";
    }
}

/**
 * userInfo
 *
 * @return string | null
 * 
 * @abstract cette fonction affiche des informations liées à l'utilisateur
 */
function userInfo(){

    return $_SESSION['user']?? '';
}

// une petite fonction de debug
function debug($data){

    echo '<pre>';
    print_r($data);
    echo '</pre>';

}