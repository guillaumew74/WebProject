var radio = document.getElementById('typeRecurent');
radio.style.display = 'none';

document.getElementById('isRecurent').onclick = function() {
   if (this.checked) {
      radio.style.display = 'block';
   }
   else {
      radio.style.display = 'none';
   }
}
