//L'application requiert l'utilisation du module Express.
//La variable express nous permettra d'utiliser les fonctionnalités du module Express.

var express = require("express");
// Nous définissons ici les paramètres du serveur.

var hostname = 'localhost';
var port = 8080;
var bodyParser = require("body-parser");
var cors = require('cors');
// Nous créons un objet de type Express.
var app = express();



app.use(cors());
app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());
//Afin de faciliter le routage (les URL que nous souhaitons prendre en charge dans notre API), nous créons un objet Router.
//C'est à partir de cet objet myRouter, que nous allons implémenter les méthodes.
var myRouter = express.Router();

// Je vous rappelle notre route (/piscines).
myRouter.route('/piscines')
// J'implémente les méthodes GET, PUT, UPDATE et DELETE
// GET
.get(function(req,res){
	   res.json({
 message : "Ecole",
 ville : req.query.ville,
 nbResultat : (req.query.maxresultat)*5,
 methode : req.method });
})


//POST
.post(function(req,res){
	doSomething(req.body.ecole, res);
     })


// Nous demandons à l'application d'utiliser notre routeur
app.use(myRouter);

// Démarrer le serveur
app.listen(port, hostname, function(){
	console.log("Mon serveur fonctionne sur http://"+ hostname +":"+port);
});



function doSomething(ecole, res){
	var result;
	console.log("test -"+ecole+"-");




	if (ecole == "cesi") {
		resultat = "C'est la meilleure ecole du monde";
	}

	else if (ecole == "epitech") {
		resultat = "Alors pas trop noyer dans ta piscine ?";
	}

	else{
		resultat = "Viens au cesi l'année prochaine";
	}

		res.json({message : resultat,

 		});


}
