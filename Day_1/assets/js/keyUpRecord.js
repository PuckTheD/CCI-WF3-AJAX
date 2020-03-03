function  record(x) {
    let compteur = 0;
    let chaine = x.value;
    let longueurChaine = chaine.length;
    let dernierCaractere = chaine.charAt(longueurChaine - 1);

    let xhr = ajax();

    let xhrTest = ajax();
    xhrTest.onreadystatechange = function() {
        if (xhrTest.readyState == 4 && xhrTest.status == 200) {
            compteur ++;
        }
    };

    xhrTest.open("GET", "write.php");
    xhrTest.send("value= " + dernierCaractere);
}