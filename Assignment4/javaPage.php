<!DOCTYPE html>     <!-- opening declaration in all html documents is the same-->
<html lang="en">    <!--language en as standard-->
	<head>          <!--head information-->
		<meta charset="utf-8">      
		<title>Java Page</title>                           <!--Title that will be displayed in the page-->
		<meta name="Sergio Cutrim Gouveia" content="Assignment3">   <!--Included my name and the content-->
		<link rel="stylesheet" href="css/styles.css">               <!--Css that will render in the page-->
        <link rel="shortcut icon" href="images/favicon.png">  <!--included image for favicon-->
    </head>
    <body>          <!--body of the page-->
        <header>   <!-- header of the page including the banner and the nav menu -->

        <script src="script/script.js"></script>

            <div id="master"> <!-- main div containing th top of the page -->
                <div id="banner"> <!-- a div to have the banner and image -->
                    <div id="image">   
                        <img src="images/javascript-logo.png" alt="Logo JS.">
                    </div>
                    <div id="title">    
		            <h1>Javascript Assignment</h1>
			        </div>
                </div>
                <div id="navbar"> <!-- div containing htte navigation menu for the top-->
		            <?php include 'includes/global-nav.php';
                    ?>
                </div>
            </div>        
            <h2>Java Page</h2>
        </header>
        <main>
        <div id="main"> <!-- main div of the page contains everything else -->
        <div id="colorButtons"> <!-- each button calls a differente function in the java -->
            <button id="buttonJavaPage" onclick="changeBannerColor()">Change Banner Color</button>
            <button id="buttonJavaPage" onclick="changeNavColor()">Change Nav Color</button>
            <button id="buttonJavaPage" onclick="changeBackgroundColor()">Change Background Color</button>
            <button id="buttonJavaPage" onclick="changeFont()">Change Font</button>
            <button id="buttonJavaPage" onclick="generateCSS()">Save my code</button>
        </div>
        <div id="colorDisplay">     <!-- another div to store the information of the colors and letter, will be done in java-->
        </div>
        <div id="popup"> <!-- another div just to put a text that the use can copy with all info saved-->
        <h2>Generated CSS</h2>
        <p id="cssCode"></p>
        <button id="buttonJavaPage" onclick="copyToClipboard()">Copy CSS</button> <!--button to copy to clipboard using java-->
        </div>
        </div>
            </body>        
            </main>
            
        <footer> <!-- including the footer from the includes-->
   
		<?php
		include 'includes/footer-nav.php';
		?>

        </footer>    
    </body>
</html>        