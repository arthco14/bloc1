// Fonction pour changer la couleur de fond de la page
document.getElementById('changeColor').addEventListener('click', function() {
    document.body.style.backgroundColor = 
        '#' + Math.floor(Math.random() * 16777215).toString(16);
});
