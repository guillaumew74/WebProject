/** Permet de gerer le formulaire d'ajout d'evenement **/
var radio = document.getElementById('typeRecurent');
radio.style.display = 'none';

document.getElementById('isRecurent').onclick = function() { // Permet de gérer l'afichage ou non de la récurrence de l'événement
   if (this.checked) {
      radio.style.display = 'block';
   }
   else {
      radio.style.display = 'none';
   }
}
