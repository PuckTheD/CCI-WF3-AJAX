function test() {
    let xhrTest = ajax();
    xhrTest.onreadystatechange = function() {
        if (xhrTest.readyState == 4 && xhrTest.status == 200) {
            alert("OK");
        }
    };

    let data = getFormData();
    xhrTest.open("POST", "test.php");
    xhrTest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhrTest.send("nom=" + data[0] + "&prenom=" + data[1] + "&mail=" + data[2]);
}