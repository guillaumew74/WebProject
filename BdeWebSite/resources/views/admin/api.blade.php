
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin BDE WEB SITE</title>
    {!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css') !!}
    {!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css') !!}
    <!--[if lt IE 9]>
      {{ Html::style('https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js') }}
      {{ Html::style('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
    <![endif]-->
    <style> textarea { resize: none; }
    div{
      margin-left: 5%;
      margin-top: 5%;
    }

  </style>
</head>
<div>
  <h1>&Eacute;cole:</h1>
  <input id = "ecole" type="text" name="ecole" value="ecole"><br><br>
  <input type="submit" value="Envoyer"  onclick=" test()">

<h3 id ="test"></h3>
</div>
</html>



<script>

function test(){


var cesi = document.getElementById("ecole").value;
var http = new XMLHttpRequest();
var url = 'http://localhost:8080/piscines';
var params = 'ecole='+cesi;

http.open('POST', url, true);
http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');


  http.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

		console.log(this.response);

      document.getElementById("test").innerHTML = (JSON.parse(this.response)).message;
    }
  };

http.send(params);


}


</script>



