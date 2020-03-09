<?php
require_once 'namespace1.php';

use espace1 as A;

if (!empty($_POST['submitted'])) {
    $messageA = new A\Message();
    $messageA->setAuteur($_POST['auteur']);
    $messageA->setEmail($_POST['email']);
    $messageA->setSujet($_POST['sujet']);
    $messageA->setContenu($_POST['contenu']);

    $auteur = $messageA->getAuteur();
    $email = $messageA->getEmail();
    $sujet = $messageA->getSujet();
    $contenu = $messageA->getContenu();
}

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
</head>
<body>
<form class="border border-dark rounded mx-auto p-3 mt-5 w-50" method="POST">
    <div class="form-group">
        <label for="auteur">Auteur</label>
        <input class="form-control" type="text" name="auteur" placeholder="auteur">
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input class="form-control" type="email" name="email" placeholder="e-mail">
    </div>
    <div class="form-group">
        <label for="sujet">Sujet</label>
        <input class="form-control" type="text" name="sujet" placeholder="sujet">
    </div>
    <div class="form-group">
        <label for="contenu">Contenu</label>
        <textarea class="form-control" name="contenu" rows="3"></textarea>
    </div>
    <div class="d-flex justify-content-around">
        <input class="btn btn-success" type="submit" name="submitted" value="Submit">
        <input class="btn btn-danger" type="reset" value="Erase">
    </div>
</form>
<br>
<?php
if (!empty($_POST['submitted'])) {
    echo
        "
    <dl class=\"row mx-auto w-50 p-1 border border-danger rounded\">
        <dt class=\"col-sm-3\">Auteur</dt>
        <dd class=\"col-sm-9\">" . $auteur . "</dd>
        <dt class=\"col-sm-3\">E-mail</dt>
        <dd class=\"col-sm-9\">" . $email . "</dd>
        <dt class=\"col-sm-3\">Sujet</dt>
        <dd class=\"col-sm-9\">" . $sujet . "</dd>
        <dt class=\"col-sm-3 text-truncate\">Contenu</dt>
        <dd class=\"col-sm-9\">" . $contenu . "</dd>
    </dl>";
}
?>
</body>
</html>
