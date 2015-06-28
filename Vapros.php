<!DOCTYPE html>
<html>
<head>
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
  <style>
  .commform{
	  border
	  border-radius: 0px 0px 0px 0px;
      background-color:#FFCC00;
      box-shadow: 2px 3px;
      padding:30px;     
	 }
  #nav {
 width: 1000px;
 background: #000000;
 padding: 8px 0;
 margin-left: auto;
    margin-right: auto;
 border-bottom-left-radius: 25px;
 border-bottom-right-radius: 25px;
}
#nav li{
 display: block;
 float: left;
}

#nav li a {
  float: left;
  color: #A79787;
  text-decoration: none;
  height: 24px;
  padding: 0 15px 0;
  font-weight: normal;
}

#menu,
#nav li:hover a {
  color: #fff;
  text-decoration: none;
  border-bottom: 2px solid #7ab900;
  font-weight: 700;
} 
   
 #submit{
		 border-radius: 10px 90px 10px 10px;
                background: #8AC007;
		
 } 
   
  body
			 {
				 padding:5%;
				 text-align:center;
			 }
  .header 
			{
				width:100%;
				clear:both;
				height:420px;
				padding:50px;
			}
.image                     
			{
				float:center;
				background-image: url("");
				
            }
.section					
			{
				height:350px;
				background-color:grey;
				padding:30px;	
			    border-radius: 10px 90px 10px 90px;
                background: #8AC007;
				
			}
						
.footer		
			{
				width:100%;
				color:white;
				text-align:center;
				padding:15px;
				background-color:#333;
				border-radius: 0px 0px 90px 90px;
			}
.article						
			{
			background-color:#4C704C;
			width:100%;
			height:2100px;
			padding:5%;
			border-radius: 50px 50px 0px 0px;
			}


.container1
	{
	  width:1300px;
	  margin:0 auto;
	}
  


.box1
	{
	  width:1300px;
	  height:8px;
	  overflow:hidden;

	}

.box-sm
	{
	  min-width:200px;
	  min-height:20px;
	  height:20px;
	  display:inline-block;
	  margin:0;
	}

.box-sm:hover
	{
		  transform: scale(15);
		transition: transform 1s ease-out;
	}

.red
	{
	  background-color:#FF5852;
	}
.orange
	{
	  background-color:#FF9000;
	}
.yellow
	{
	  background-color:#FFD300;
	}

.green
	{
	  background-color:#3DCD49;
	}

.blue
	{
	  background-color:#0089D7;
	}

.purple
	{
	  background-color:#9E44C4;
	}
.name
  {
   background-color:white;
   width:200px;
   float:left;
   text-shadow:1px 1px;
  }
.yourq
  {
     background-color:white;
   text-shadow:1px 1px;
  }
.questions{
       padding:10px;
	   box-shadow:5px 5px 2px;
		float:center;
		border-style: solid;
        border-width: 3px;
		background-color:#FFA319;
  }
.date
  {
   background-color:white;
   text-align:center;
   float:right;
   width:100px;
   text-shadow:1px 1px;
  }
  .section1
    {
      border-radius: 25px 25px 25px 25px;
      background-color:#FFCC00;
      box-shadow: 2px 3px;
      padding:30px;        
	 }
  </style>
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
	<a class="navbar-brand" href="#" style="color:#8AC007; font-size:30px;"><strong>Sinapse</strong></a>
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
<div>
	
	<div class="section1">
	<?php
include "functions.php";
$id=$_GET['id'];
printQuestion($id);

	?>
	<div class="commform">
    <form method="post" action="dobavi_otgovor.php">
	  <input type="text" name="postedby" class="form-control" id="postedby" placeholder="Commented By:"></br>	  	
	  <br><textarea class="form-control" name="news" id="news" cols="50" rows="5"></textarea></br>
	  <input type="Submit" name="submit" class="btn btn-primary" id="submit" value="Enter Comments">
</form></div>
   	<?php
$id=$_GET['id'];
	printCOMENT($id);

	?>
      
    </div>

</div>	
<div class="article1">
</div>
<div class="footer">
Copyright © Sinapse.com
</div>

</body>
</html>
</head>
<body>
<div class="et_social_media et_social_media_hidden et_social_mobile_on">

<div class="et_social_networks et_social_autowidth et_social_darken et_social_left et_social_rounded et_social_outer_dark">
					
					<ul class="et_social_icons_container"><li class="et_social_facebook">
									<div data-social_link="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fwww.hongkiat.com%2Fblog%2Fnavigation-design-ideas-inspiration%2F&#038;t=Designing%20A%20Winning%20Navigation%20Menu%3A%20Ideas%20and%20Inspirations" rel="nofollow" class="et_social_share" data-social_name="facebook" data-social_type="media" data-post_id="15862">
										<i class="et_social_icon et_social_icon_facebook"></i>
										
										<span class="et_social_overlay"></span>
									</div>
								</li><li class="et_social_twitter">
									<div data-social_link="http://twitter.com/share?text=Designing%20A%20Winning%20Navigation%20Menu%3A%20Ideas%20and%20Inspirations&#038;url=http%3A%2F%2Fwww.hongkiat.com%2Fblog%2Fnavigation-design-ideas-inspiration%2F&#038;via=hongkiat" rel="nofollow" class="et_social_share" data-social_name="twitter" data-social_type="media" data-post_id="15862">
										<i class="et_social_icon et_social_icon_twitter"></i>
										
										<span class="et_social_overlay"></span>
									</div>
								</li><li class="et_social_googleplus">
									<div data-social_link="https://plus.google.com/share?url=http%3A%2F%2Fwww.hongkiat.com%2Fblog%2Fnavigation-design-ideas-inspiration%2F&#038;t=Designing%20A%20Winning%20Navigation%20Menu%3A%20Ideas%20and%20Inspirations" rel="nofollow" class="et_social_share" data-social_name="googleplus" data-social_type="media" data-post_id="15862">
										<i class="et_social_icon et_social_icon_googleplus"></i>
										
										<span class="et_social_overlay"></span>
									</div>
								</li><li class="et_social_pinterest">
									<div data-social_link="http://www.pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.hongkiat.com%2Fblog%2Fnavigation-design-ideas-inspiration%2F&#038;media=http%3A%2F%2Fmedia02.hongkiat.com%2Fnavigation-design-ideas-inspiration%2Finformation_architecture.jpg&#038;description=Designing%20A%20Winning%20Navigation%20Menu%3A%20Ideas%20and%20Inspirations" rel="nofollow" class="et_social_share" data-social_name="pinterest" data-social_type="media" data-post_id="15862">
										<i class="et_social_icon et_social_icon_pinterest"></i>
										
										<span class="et_social_overlay"></span>
									</div>
								</li></ul>
				</div>
				</div>

</body>
</html>
