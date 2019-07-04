# Gestion des erreurs dans un formulaire

Le choix des fichiers et de la structure est simple, vous verrez plus tard une mise en place plus technique dans l'architecture MVC.

- app.php est le "point d'entrée" de l'application
- bootstrap.php est un fichier d'amorçage de l'application, il permet de regrouper les constantes ou fonctions utiles à l'application dans notre cas.
- le dossier src contiendra la logique de l'application.
- le dossier utils l'algorithmique de notre application.
- le dossier views contiendra les vues de l'application.

## le fichie check.php

On utilise la fonction php suivante pour nettoyer/vérifier les données utilisateurs :

```php
$rules = [
    'firstname'    => FILTER_SANITIZE_STRING,
    'lastname'    => FILTER_SANITIZE_STRING,
    'email' => FILTER_VALIDATE_EMAIL,
];

$sanitize = filter_input_array(INPUT_POST, $rules);
```

Ainsi si l'une au moins des valeurs n'est pas correcte alors on retournera le formulaire au client pour qu'il corrige ses erreurs.

N'oubliez pas de faire systématiquement des redirections, nous verrons leurs statuts par la suite, pour nettoyer le formulaire et filtrer donc uniquement les données utiles pour l'application.

```php

// extrait de code
if ($error) {
    $_SESSION['flashMessage'] = 'there was a problem';

    header('Location: ../app.php');
    exit;
}
```
