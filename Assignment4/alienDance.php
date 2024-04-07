<!DOCTYPE html>     <!-- opening declaration in all html documents is the same-->
<html lang="en">    <!--language en as standard-->
	<head>          <!--head information-->
		<meta charset="utf-8">      
		<title>Assignment Content</title>                           <!--Title that will be displayed in the page-->
		<meta name="Sergio Cutrim Gouveia" content="Assignment3">   <!--Included my name and the content-->
		<link rel="stylesheet" href="css/styles.css">               <!--Css that will render in the page-->
        <link rel="shortcut icon" href="images/favicon.png">  <!--included image for favicon-->
    </head>
    <body>          <!--body of the page-->
        <header>   <!-- header of the page including the banner and the nav menu -->
            <script src="script/scriptAlien.js"></script>   <!-- calls the script for java -->
            <div id="master">  <!-- creates id for a general block -->
                <div id="banner">  <!-- includes the banner -->
                    <div id="image">     <!-- includes the logo -->
                        <img src="images/javascript-logo.png" alt="Logo JS.">
                    </div>
                    <div id="title">    <!-- includes the main title -->
		                <h1>Javascript Assignment</h1>
			        </div>
                </div>
                <div id="navbar">  <!-- brings the nav bar that is in the includes folder -->
		            <?php include 'includes/global-nav.php';
                    ?>
                </div>
            </div>        
            <h1 id="alienDanceTitle"> DO NOT CLICK ON THE IMAGE</h1> <!-- puts the tile of this page -->
            <h2 id="alienDanceTitle">Alien "Danse"</h2> <!-- puts a warning message -->
        </header>
        <main> <!-- main page -->
            <div id="pageContainer"> <!-- creates a div and id for the whole page-->
            <audio id="music" loop> <!--includes a music in the page -->
                <source src="sounds/Alarm01.wav" type="audio/wav">
            </audio>
            <div id="imageContainer"> <!-- includes the main image and make it clickable in different parts with map -->
                <img id="originalImage" src="images/AlienIMG.jpg" usemap="#imageMap" alt="Main Image">
                <div id="gifContainer" style="display:none;"></div> <!-- a gif container for what will come from java -->
                <button id="return" style="display:none;" onclick="returnImage()">Get me out!</button> <!-- button that will start not showing to return from gif-->
            </div>
            </div>    
            <map name="imageMap"> <!-- finish the mapping of the image using the coordinates to delimit a square -->
            <area  id="clickable" shape="rect" coords="0,0,256,256" onclick="changeGif(0)">
            <area  id="clickable2" shape="rect" coords="0,256,257,512" onclick="changeGif(1)">
            <area  id="clickable3" shape="rect" coords="257,0,512,256" onclick="changeGif(2)">
            <area  id="clickable4" shape="rect" coords="257,257,512,512" onclick="changeGif(3)">
        </map>
        </body>        
        </main>
        <footer> <!-- footer calloing the appropriate nav-->
        	<?php
		    include 'includes/footer-nav.php';
		    ?>
        </footer>    
    </body>
</html>     
