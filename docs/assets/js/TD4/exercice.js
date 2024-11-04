// change le background color en vert
 const btgreen = document.getElementById('btgreen');
 btgreen.addEventListener('click', ()=>{
    document.body.style.backgroundColor = 'green';
 });

// change le background color en bleu
 const btblue = document.getElementById('btblue');
 btblue.addEventListener('click', ()=>{
    document.body.style.backgroundColor = 'blue';
 });

// change le background color en jaune
 const btyellow = document.getElementById('btyellow');
 btyellow.addEventListener('click', ()=>{
    document.body.style.backgroundColor = 'yellow';
 });

// change le background color en rouge
 const btred = document.getElementById('btred');
 btred.addEventListener('click', ()=>{
    document.body.style.backgroundColor = 'red';
 });

 // reset le background color
 const btreset = document.getElementById('btreset');
 btreset.addEventListener('click', ()=>{
    document.body.style.backgroundColor = '';
 });

 // ajouter un élément avec un bouton sous forme de liste
const btajout = document.getElementById('btajout');
btajout.addEventListener('click', ()=>{
    const texte = document.getElementById('text').value;
    if (texte !== ''){
        const li = document.createElement('li');
        li.innerText = texte;
        list.appendChild(li);
    }
})

// addition de deux nombres
const addition = document.getElementById('addition')
addition.addEventListener('click', ()=>{
    const nb1 = document.getElementById('nb1').value;
    const nb2 = document.getElementById('nb2').value;
    const somme = document.getElementById('somme');
    if (nb1 !== '' && nb2 !== ''){
        somme.value = parseInt(nb1) + parseInt(nb2);
    };
})

// afficher une image en fonction de la sélection
const menuDeroulant = document.getElementById('menu_deroulant');
const carImage = document.getElementById('car-image');
menuDeroulant.addEventListener('change', function() {
   const selectedValue = this.value;
      if (selectedValue === "f40") {
            carImage.src = "../../assets/images/td4/f40.avif";
            carImage.style.display = "block";
      } else if (selectedValue === "gt3rs") {
            carImage.src = "../../assets/images/td4/gt3rs.avif";
            carImage.style.display = "block";
      } else if (selectedValue === "jesko") {
            carImage.src = "../../assets/images/td4/jesko.webp";
            carImage.style.display = "block";
      } else {
            carImage.style.display = "none";
      };
})
// créer une alerte au passage de la souris
const alerte = document.querySelector(".alerte");
alerte.addEventListener('mouseover', ()=>{
   alert('Ceci est une alerte !');
});

// créer une horloge numérique
function updateClock() {
   const now = new Date();
   let hours = now.getHours();
   let minutes = now.getMinutes();
   let seconds = now.getSeconds();

   // Formater pour avoir deux chiffres (ex: 09:05:07)
   hours = hours < 10 ? '0' + hours : hours;
   minutes = minutes < 10 ? '0' + minutes : minutes;
   seconds = seconds < 10 ? '0' + seconds : seconds;
   const timeString = `${hours}:${minutes}:${seconds}`;
   document.getElementById('clock').textContent = timeString;
}
setInterval(updateClock, 1000); // Appeler updateClock toutes les secondes (1000ms)
updateClock();

// créer un bouton qui supprime un élément
const deleteButton = document.getElementById('deleteButton');
deleteButton.addEventListener('click', function() {
    const confirmation = confirm('Voulez-vous vraiment supprimer cet élément ?');
    if (confirmation) {
        const element = document.getElementById('elementASupprimer');
        element.remove();
    }
});

// cacher un élément avec une toggle checkbox
const checkbox = document.getElementById('toggleCheckbox');
const element = document.getElementById('elementACacher');
checkbox.addEventListener('change', function() {
    if (checkbox.checked) {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
});

// formulaire qui envoie les infos dans la console
document.getElementById("send-button").addEventListener("click", function(event) {
	event.preventDefault(); // Empêche le formulaire de recharge la page
	const name = document.getElementById("name").value;
	const email = document.getElementById("email").value;
	const message = document.getElementById("message").value;
	console.log("Nom :", name);
	console.log("Email :", email);
	console.log("Message :", message);
	// Efface le formulaire après l'envoi
	document.getElementById("contactForm").reset();
});
