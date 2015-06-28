<!DOCTYPE html>
<html lang="en">
 <head><title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="w3-theme-teal.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link href="home.css" rel="stylesheet" type="text/css" >
  </head>
  <body>
  
  <div class="header">
    <div class="image">
		<img src="sinapse.jpg">
	</div>
   </div>

<div class="container">	 
<nav class="navbar navbar-inverse navbar-fixed-top" >
<div class="container1">
  
<div class="box1">
            <div class="box-sm red"></div>
            <div class="box-sm orange"></div>
            <div class="box-sm yellow "></div>
    <div class="box-sm green "></div>
    <div class="box-sm blue "></div>
    <div class="box-sm purple"></div>
        </div>
</div>
  <div class="container-fluid" id="menu">
		<nav class="w3-sidenav w3-card-2 w3-animate-right" style="display:none">
<a href="javascript:void(0)" onclick="w3_close()" class="w3-closebtn w3-large">&times;</a><br>
<h2 class="w3-text-theme">Predmet</h2>
<a href="">first</a>
<br><a href="">after that</a>
<br><a href="">next</a>
<h2 class="w3-text-theme">Predmet</h2>
<a href="">first</a>
<br><a href="">after that</a>
<br><a href="">next</a>

</nav>  
     <div class="navbar-header">
	 <div id="main">

<header class="w3-padding w3-theme w3-card-2">
<i onclick="w3_open()" class="material-icons w3-opennav">menu</i>
</div>
<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("main").style.transition = ".6s";
  document.getElementsByClassName("w3-sidenav")[0].style.width = "25%";
  document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
  document.getElementsByClassName("w3-opennav")[0].style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
  document.getElementsByClassName("w3-opennav")[0].style.display = "inline-block";
}
</script>
</div>

<div>
     <nav id="nav">
	 <ul>
	<a class="navbar-brand" href="#" style="color:#8AC007; font-size:25px;"><i>Sinapse</i></a>
</ul>
   <ul>
   
    <li>
     <a id="menu" href="Home.php">Home</a>
    </li>
	    
    <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
          About <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu" style="background-color:#BEBEBE;">
            <li><a href="" style="color:black">Facebook</a></li>
            <li><a href=""style="color:black">Twitter</a></li>
            <li><a href=""style="color:black">Pinterest</a></li>
          </ul>
        </li>
    
		<form action="action_page.php" class="navbar-form nav navbar-top">
	
  <input type="text" class="form-control" placeholder="Search...">
  <input type="submit" class="form-control" value="Submit" placeholder="Submit" id="submit">
	
    </form>
   </ul>
  </nav>
  </div>
</nav>
</div>

  
<div class="article">
    <div class="section">
	     <abbr title="You can make some question here.">  <strong><h2>Post a question or idea</h2></strong></abbr>
	   <form action="AddPost.php"  method="post">
	      <span style="float:left;"><input type="text" class="form-control"  name="avtor" placeholder="Name"></span></br>
		<br> <span style="clear:both;"><input type="text" class="form-control" name="tema" placeholder="Your question"></span></br>
	     <textarea class="form-control" name="vapros" cols="50" rows="5" placeholder="Text area"></textarea></br>
	    <span style="float:right;">  <input type="submit" class="btn btn-warning" name="submit" placeholder="Send"> </span>
	   </form>
   
   </div></br><div class="section1">
<?php 
$returned=1;
include "functions.php";
for ($i=1; $returned ; $i++) { 
  $returned=printQuestion($i);
}
  ?></div>
<div class="footer">
Copyright © Sinapse.com
</div>

</body>
</html>
