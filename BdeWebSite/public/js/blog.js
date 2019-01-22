var divFormu = document.getElementById("divFormu");
divFormu.style.display = 'none';
var btnComment = document.getElementById("btnComment");
btnComment.addEventListener ("click", newComment, false);

function newComment(){

   //document.getElementById('divFormu').style.display = 'block' ? 'block' : 'none';
   divFormu.style.display = 'block'

}

