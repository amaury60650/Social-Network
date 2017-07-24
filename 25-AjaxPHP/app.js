// Instance de l'objet XMLHttpRequest
var xhr = new XMLHttpRequest();
// On ouvre une url en AJAX
xhr.open('GET', 'ajax.php');
// On envoie la requête au serveur
xhr.send();
// On execute une fonction à chaque changement d'état de la requête
xhr.onreadystatechange = function() {
    // On vérifie si l'état de la requête est done (à 4)
    if (xhr.readyState === 4) {
        document.getElementsByTagName('h1')[0].innerHTML = xhr.responseText;
    }
};

$.get('ajax.php') // Requete AJAX en méthode GET avec jQuery
.done(function (data) { // On attend que la requête soit terminé et on récupére les données de la page
    $('h1').html(data);
});

// On execute un code dès que le formulaire est soumis
$('form').submit(function (event) {
    // Je supprime le comportement par défaut du formulaire
    event.preventDefault();
    // Je soumets une requete POST sur form.php avec les données du formulaire
    $.post({'url': 'form.php', 'data': $(this).serialize() }).done(function (data) {
        console.log(data);
        $('h1').html(data);
    });
});