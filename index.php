<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJAX</title>
    <script src="./assets/js/ajax.js"></script>
</head>
<body>
<script>
    let xhrTest = ajax();
    let test = function () {
        // intercepte chacun des évènements
        xhrTest.onreadystatechange = function () {
            if (xhrTest.readyState == 4 && xhrTest.status == 200){
                alert(xhrTest.responseText);
            }
        };
        xhrTest.open("GET", "test.php", true);
        xhrTest.send(null);
    };
</script>
<p onclick="test()">Clique-moi !</p>
</body>
</html>
