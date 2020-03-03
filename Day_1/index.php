<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJAX</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="./assets/js/ajax.js"></script>
    <script src="./assets/js/getformData.js"></script>
    <script src="assets/js/test.js"></script>
</head>
<body>
<form class="w-50 mx-auto border border-dark p-3 mt-5" method="POST" action="" id="formulaire">
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" class="form-control" placeholder="First name">
            </div>
            <div class="col">
                <label for="prénom">Prénom</label>
                <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Last name">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" name="mail" id="mail" aria-describedby="emailHelp"
               placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <input type="reset" value="Effacer"/>
    <button class="btn btn-primary" onclick="test();">Submit</button>
</form>
</body>
</html>
