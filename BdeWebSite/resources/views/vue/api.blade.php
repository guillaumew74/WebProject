
<!DOCTYPE html>
<html>
 
  Ecole:<br>
  <input id = "ecole" type="text" name="ecole" value="ecole"><br><br>
  <input type="submit" value="Submit"  onclick=" test()">

<p id ="test"></p>

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



