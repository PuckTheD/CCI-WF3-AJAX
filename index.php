<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJAX</title>
</head>
<body>
<script>
    let xhr = null; // création d'une variable null
    // vérification que l'objet existe
    if (window.XMLHttpRequest){
        xhr = new XMLHttpRequest(); // si oui je crée une instance
    } else if (window.ActiveXObject) {
        try {
            xhr = new ActiveXObject("Msxml12.XMLHTTP");
        }
        catch (e) {
            xhr = new ActiveXObject("Microsoft.XMLHTTP");
        }
    } else {
        alert('Mettez à jour votre navigateur');
        xhr = false;
    }
</script>
</body>
</html>
