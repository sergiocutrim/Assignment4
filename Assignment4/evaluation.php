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
            <div id="master"> <!-- master id in all the page div to make it flex-->
                <div id="banner">  <!-- create a div to put the image and banner-->
                    <div id="image">   <!-- include the image -->
                        <img src="images/javascript-logo.png" alt="Logo JS.">
                    </div>
                    <div id="title">    <!-- include the title-->
		            <h1>Javascript Assignment</h1>
			        </div>
                </div>
                <div id="navbar"> <!-- include the navbar for the menu on the top of the page -->
		            <?php include 'includes/global-nav.php';
                    ?>
                </div>
            </div>        <!-- from this part until the table it is a copy f the index, except for the java included -->
            <h2>Evaluation</h2>
            <script src="script/scriptEvaluation.js"></script> <!--included java-->
        </header>
        <main>
        <h3>DESCRIPTION</h3>
                <p>On your own, create a relatively simple HTML page that contains a variety of elements and page content. 
                    Add an external JavaScript file that provides some sort of interaction where a user can click or hover 
                    (or some other action) over one or more elements, and some other aspect of the page will change 
                    (like page text).</p>
                    <p id="answer"> For this Assignment I developed 2 pages. The first one has the possibility that the user can 
                        change the color of the banner, the background of the page, the color in the menu and also the letter just by clicking
                        the buttons. Later the user can copy the information and use in their own page the hex code.
                        </br>
                        The second page is a funnier part where the user can click on the image and see different gifs (4 in total). There is 
                        also an annoying song that plays every time the user clicks on something. <p>
                <h3>INSTRUCTIONS</h3>                                                 
                <ol>
                    <li>Create a properly-structured HTML page with a variety of elements (like headings, paragraphs, images, 
                    lists, links or whatever). You may decide what the subject matter of the page will be.</li> <p id="answer"> DONE </p>
                    <li>Add a script element to the head section of the page referring to an external javascript file 
                    (include a defer attribute).</li> <p id="answer"> DONE </p>
                    <li>Using the JavaScript file, write some simple instructions to do the following:</li>
                        <ol type=a>
                        <li>Create one or more variables to identify some HTML elements on the page. <p id="answer"> DONE </p> </li>
                        <li>When one or more elements on your page (identified with a variable) are acted upon by the user 
                            (with a click or hover or something), change the text or some other aspect of another page element 
                            (like the text in a heading or paragraph). <p id="answer"> DONE </p></li>
                        </ol>
                    <li>Be creative - make it fun or silly, but there is no need to make it too complicated. 
                        Keep it simple and just focus on getting the JavaScript to enable some simple user interaction.</li>
                        <p id="answer"> DONE </p>                        
                    <li>Validate the resulting HTML document (proceed to http://validator.w3.org).</li> <p id="answer"> DONE </p>
                    <li>Upload your HTML page, your JavaScript file, and any images to your Web server and determine the URL 
                        to view the result.</li> <p id="answer"> DONE </p>
                </ol>
                <h3>TAKE IT FURTHER</h3>
                <p>Here are a few ideas to help you go beyond the basic requirements for this assignment – feel free to 
                    attempt any other technical or creative challenges that you think are appropriate:</p>
                    <ul>
                        <li>Attempt to change some aspect of the CSS for any of the elements</li> <p id="answer"> DONE </p>
                        <li>Create a simple form input element and capture the value typed in by the user to do something 
                            interesting on the page </li> <p id="answer"> DONE </p>
                        <li>Anything else you can think of - use your imagination</li> <p id="answer"> DONE </p>
                        <li>Have fun!</li>  <p id="answer"> DONE </p>  
                    </ul>
                <h3>SUBMITTING YOUR WORK</h3>
                <p>Post the URL to your JavaScript-powered HTML page (on a Web server) to this assignment in the comment area.</p>    
                <h3>EVALUATION</h3> <p id="answer"> DONE </p>
                <p>Please refer to the chart (assessment rubric) below. You will be graded on how well you followed the 
                    assignment instructions from both a technical and a creative perspective as spelled out in the rubric. </p>    
                <table>
                    <thead>
                        <tr>
                            <th><b>Criteria</b>
                            <th><b>Marks</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><b>Technical Evaluation</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>The HTML page is structured properly with an html, a DOCTYPE, head, body, 
                                and content elements.</td>
                                <td><input type="number" class="mark" min="0" max="5"><td> <!-- enter as an input so user can put the value btw 0 and 5 -->
                        </tr>
                        <tr>
                            <td>JavaScript is properly attached to the HTML page with a script element, and the syntax 
                                and code structure are assembled with care.</td>
                                <td><input type="number" class="mark" min="0" max="5"><td> <!-- enter as an input so user can put the value btw 0 and 5 -->
                        </tr>
                        <tr>
                            <td>The page responds to some sort of user interaction and successfully updates some aspect 
                                of the page in response</td>
                                <td><input type="number" class="mark" min="0" max="5"><td> <!-- enter as an input so user can put the value btw 0 and 5 -->
                        </tr>
                        <tr>
                            <td>Effort to implement some other technical aspect of the assignment is evident.</td>
                            <td><input type="number" class="mark" min="0" max="5"><td> <!-- enter as an input so user can put the value btw 0 and 5 -->
                        </tr>
                        <tr>
                            <td><b>CREATIVE EVALUATION</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td> The JavaScript code is formatted neatly, with effective comments included where 
                                appropriate.</td>
                                <td><input type="number" class="mark" min="0" max="5"><td> <!-- enter as an input so user can put the value btw 0 and 5 -->
                        </tr>
                        <tr>
                            <td>The page makes clever use of JavaScript to add some interesting interaction to the 
                                user experience.</td>
                                <td><input type="number" class="mark" min="0" max="5"><td> <!-- enter as an input so user can put the value btw 0 and 5 -->
                        </tr>
                        <tr>
                            <td>Effort to implement some other creative aspect of the assignment is evident.</td>
                            <td><input type="number" class="mark" min="0" max="5"><td> <!-- enter as an input so user can put the value btw 0 and 5 -->
                        </tr>
                        <tr>
                            <td><b>TOTAL</b></td>
                            <td id="totalMarks"></td> <!-- call function to sum all the values that were input with java -->
                        </tr>
                    </tbody>
                </table>  
                <button id="sendFeedbackBtn">Send Feedback</button>  <!-- create button and use java behind to give an alert-->
            </body>        
            </main>
        <footer> <!-- calls the appropriate nav to pur in the footer -->
   
		<?php
		include 'includes/footer-nav.php';
		?>

        </footer>    
    </body>
</html>        
