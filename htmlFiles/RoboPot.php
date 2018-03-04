<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}
.fa:hover {
    opacity: 0.7;
}
.fa-facebook {
  background: #3B5998;
  color: white;
  float: left;
}
.fa-instagram {
  background: #ff6600;
  color: white;
  float: left;
}
h1 {
	color: white;
	text-shadow: 1px 1px 5px black, 0 0 25px green, 0 0 5px lawngreen;
	margin-right: 10%;
	font-size: 3em;
	text-align: center;
}
h3 {
	color: white;
	text-shadow: 1px 1px 5px black, 0 0 25px green, 0 0 5px lawngreen;
	text-align: center;
	font-size: 2em;
}
body {
	background-image: url("https://images.pexels.com/photos/413195/pexels-photo-413195.jpeg?h=350&auto=compress&cs=tinysrgb");
}
.btn-light button {
    background-color: #4CAF50; /* Green */
    border: 1px solid green;
    color: white;
    padding: 3px 32px;
    text-align: left;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    width: 20%;
	display: block;
	margin-left: 40%;
	margin-right: 40%;
}
.btn-group button {
	background-color: green;
	border: 2px solid white;
	color: white;
	padding: 48px 48px;
	cursor: pointer;
	float: left;
}
.btn-group:after {
    content: "";
    clear: both;
    display: table;
}
.btn-group button:hover { 
	background-color: #3e8e41;
}
.btn-group button:not(:last-child) {
    border-right: none; 
}
p.intro {
	color: white;
	text-shadow: 1px 1px 5px black, 0 0 25px green, 0 0 5px lawngreen;
	front-size: 2.5em;
	text-align: center;
}

table {
	font-family: arial, sans-serif;
	width: 40%;
	margin-left: 30%;
	border-collapse: collapse;
}
td, th {
	border: 1px solid black;
	text-align: left;
	padding: 8px;
}
tr {
	background-color: #4CAF50;
}
</style>
	<title>RoboPot</title>
</head>

<body>
<meta http-equiv="refresh" content="30"/>
<a href="#" class="fa fa-facebook"></a> <a href="#" class="fa fa-instagram"></a>	
<h1>RoboPot</h1>
<h3>Group 7 - Fraser Law, Fraser Menzies and Alastair Thurlbeck</h3>
<p class="intro">
This is our solution to moveable plant pots remotely controlled via a web interface!
</p>
<table>
	<tr>
		<th>Light Sensor (Position)</th>
		<th>Light Intensity (Lux)</th>
	</tr>
	<tr>
		<td>Top left</td>
		<td>
		<?php $myfile = fopen("lightsensor1.txt", "r") or die("unable to open file!");
		echo fread($myfile,filesize("lightsensor1.txt"));
		fclose($myfile);
		?> 
		</td>
	</tr>
	<tr>
		<td>Top Right</td>
		<td>"Value?"</td>
	</tr>
	<tr>
		<td>Bottom left</td>
		<td>"Value?"</td>
	</tr>
	<tr>
		<td>Bottom Right</td>
		<td>"Value?"</td>
	</tr>
</table>

<div class="btn-group" style="margin-top: 1%">
	<button style="margin-left: 39.6%" id="A" onclick="myFunction(this)"></button>
	<button id="B" onclick="myFunction(this)"></button>
	<button id="C" onclick="myFunction(this)"></button>
	<button id="D" onclick="myFunction(this)"></button>
</div>
<div class="btn-group">
	<button style="margin-left: 39.6%" id="E" onclick="myFunction(this)"></button>
	<button id="F" onclick="myFunction(this)"></button>
	<button id="G" onclick="myFunction(this)"></button>
	<button id="H" onclick="myFunction(this)"></button>
</div>
<div class="btn-group">
	<button style="margin-left: 39.6%" id="I" onclick="myFunction(this)"></button>
	<button id="J" onclick="myFunction(this)"></button>
	<button id="K" onclick="myFunction(this)"></button>
	<button id="L" onclick="myFunction(this)"></button>
</div>
<div class="btn-group">
	<button style="margin-left: 39.6%" id="M" onclick="myFunction(this)"></button>
	<button id="N" onclick="myFunction(this)"></button>
	<button id="O" onclick="myFunction(this)"></button>
	<button id="P" onclick="myFunction(this)"></button>
</div>

<script>
function myFunction(elem){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if (this.readyState == 4 && this.status == 200){
			document.getElementById(elem.id).innerHTML = 
			this.responseText;
		}
	};
	
	if (elem.id == 'A'){
		xhttp.open("POST", "CreateA.php", true);
		xhttp.send();
	} else if (elem.id == 'B'){
		xhttp.open("POST", "CreateB.php", true);
		xhttp.send();
	} else if (elem.id == 'C'){
		xhttp.open("POST", "CreateC.php", true);
		xhttp.send();
	} else if (elem.id == 'D'){
		xhttp.open("POST", "CreateD.php", true);
		xhttp.send();
	} else if (elem.id == 'E'){
		xhttp.open("POST", "CreateE.php", true);
		xhttp.send();
	} else if (elem.id == 'F'){
		xhttp.open("POST", "CreateF.php", true);
		xhttp.send();
	} else if (elem.id == 'G'){
		xhttp.open("POST", "CreateG.php", true);
		xhttp.send();
	} else if (elem.id == 'H'){
		xhttp.open("POST", "CreateH.php", true);
		xhttp.send();
	} else if (elem.id == 'I'){
		xhttp.open("POST", "CreateI.php", true);
		xhttp.send();
	} else if (elem.id == 'J'){
		xhttp.open("POST", "CreateJ.php", true);
		xhttp.send();
	} else if (elem.id == 'K'){
		xhttp.open("POST", "CreateK.php", true);
		xhttp.send();
	} else if (elem.id == 'L'){
		xhttp.open("POST", "CreateL.php", true);
		xhttp.send();
	} else if (elem.id == 'M'){
		xhttp.open("POST", "CreateM.php", true);
		xhttp.send();
	} else if (elem.id == 'N'){
		xhttp.open("POST", "CreateN.php", true);
		xhttp.send();
	} else if (elem.id == 'O'){
		xhttp.open("POST", "CreateO.php", true);
		xhttp.send();
	} else if (elem.id == 'P'){
		xhttp.open("POST", "CreateP.php", true);
		xhttp.send();
	}else {
		xhttp.open("POST", "CreateFile.php", true);
		xhttp.send();
	}
}

</script>
overflow: auto;
</body>
</html>
