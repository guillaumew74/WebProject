

var divFormu = document.getElementById("divFormu");
divFormu.style.display = 'none';

function newComment(){

	//document.getElementById('divFormu').style.display = 'block' ? 'block' : 'none';
	//divFormu.style = 'display:block'; // ? 'none' : 'block'
	if($('#divFormu').css("display") == "block") {
		$('#divFormu').css("display", "none");
	}
	else {
		$('#divFormu').css("display", "block");
	}
	//$('#divFormu').css("display", $('divFormu').css("display") == "block" ? "none" : "block"); //permet d'afficher ou d'enlever le formulaire apres avoir cliqué sur le btn

}
