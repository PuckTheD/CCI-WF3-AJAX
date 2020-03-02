function getFormData() {
    let nom = document.getElementById('nom').value;
    let prenom = document.getElementById('prenom').value;
    let mail = document.getElementById('mail').value;

    nom = encodeURIComponent(nom);
    prenom = encodeURIComponent(prenom);
    mail = encodeURIComponent(mail);

    let data = new Array(nom, prenom, mail);

    return data;
}