function ajax() {
    let xhr = null;
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
    return xhr
}