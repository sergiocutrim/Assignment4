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
            <div id="master"> <!-- open div that will encapsulate all the top part -->
                <div id="banner"> <!-- inside another div with the image and banner-->
                    <div id="image">   
                        <img src="images/javascript-logo.png" alt="Logo JS.">
                    </div>
                    <div id="title">    <!-- anothe div with the tile -->
		            <h1>Javascript Assignment</h1>
			        </div>
                </div>
                <div id="navbar"> <!-- bring the navbnar from the include as the top menu -->
		            <?php include 'includes/global-nav.php';
                    ?>
                </div>
            </div>        
            <h2>Assignment Content</h2>
        </header>
        <main> <!-- all the text was retreived in the assignment sheet -->
             <h3>DESCRIPTION</h3>
                <p>On your own, create a relatively simple HTML page that contains a variety of elements and page content. 
                    Add an external JavaScript file that provides some sort of interaction where a user can click or hover 
                    (or some other action) over one or more elements, and some other aspect of the page will change 
                    (like page text).</p>
                <h3>INSTRUCTIONS</h3>                                                 
                <ol> <!-- oredere list-->
                    <li>Create a properly-structured HTML page with a variety of elements (like headings, paragraphs, images, 
                    lists, links or whatever). You may decide what the subject matter of the page will be.</li> 
                    <li>Add a script element to the head section of the page referring to an external javascript file 
                    (include a defer attribute).</li>
                    <li>Using the JavaScript file, write some simple instructions to do the following:</li>
                        <ol type=a> <!-- another ol inside the ol starting with a -->
                        <li>Create one or more variables to identify some HTML elements on the page.</li>
                        <li>When one or more elements on your page (identified with a variable) are acted upon by the user 
                            (with a click or hover or something), change the text or some other aspect of another page element 
                            (like the text in a heading or paragraph).</li>
                        </ol>
                    <li>Be creative - make it fun or silly, but there is no need to make it too complicated. 
                        Keep it simple and just focus on getting the JavaScript to enable some simple user interaction.</li>
                    <li>Validate the resulting HTML document (proceed to http://validator.w3.org).</li>
                    <li>Upload your HTML page, your JavaScript file, and any images to your Web server and determine the URL 
                        to view the result.</li>
                </ol>
                <h3>TAKE IT FURTHER</h3>
                <p>Here are a few ideas to help you go beyond the basic requirements for this assignment – feel free to 
                    attempt any other technical or creative challenges that you think are appropriate:</p>
                    <ul> <!-- ul just to put the topics -->
                        <li>Attempt to change some aspect of the CSS for any of the elements</li>
                        <li>Create a simple form input element and capture the value typed in by the user to do something 
                            interesting on the page </li>
                        <li>Anything else you can think of - use your imagination</li>
                        <li>Have fun!</li>    
                    </ul>
                <h3>SUBMITTING YOUR WORK</h3>
                <p>Post the URL to your JavaScript-powered HTML page (on a Web server) to this assignment in the comment area.</p>    
                <h3>EVALUATION</h3>
                <p>Please refer to the chart (assessment rubric) below. You will be graded on how well you followed the 
                    assignment instructions from both a technical and a creative perspective as spelled out in the rubric. </p>    
                <table> <!-- static table with nothing to do, just see the criteria -->
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
                            <td>/5</td>
                        </tr>
                        <tr>
                            <td>JavaScript is properly attached to the HTML page with a script element, and the syntax 
                                and code structure are assembled with care.</td>
                            <td>/5</td>
                        </tr>
                        <tr>
                            <td>The page responds to some sort of user interaction and successfully updates some aspect 
                                of the page in response</td>
                            <td>/5</td>
                        </tr>
                        <tr>
                            <td>Effort to implement some other technical aspect of the assignment is evident.</td>
                            <td>/5</td>
                        </tr>
                        <tr>
                            <td><b>CREATIVE EVALUATION</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td> The JavaScript code is formatted neatly, with effective comments included where 
                                appropriate.</td>
                            <td>/5</td>
                        </tr>
                        <tr>
                            <td>The page makes clever use of JavaScript to add some interesting interaction to the 
                                user experience.</td>
                            <td>/5</td>
                        </tr>
                        <tr>
                            <td>Effort to implement some other creative aspect of the assignment is evident.</td>
                            <td>/5</td>
                        </tr>
                        <tr>
                            <td><b>TOTAL</b></td>
                            <td>/35</td>
                        </tr>
                    </tbody>
                </table>    
            </body>        
            </main>
        <footer> <!-- brings the footer from the includes-->
   
		<?php
		include 'includes/footer-nav.php';
		?>

        </footer>    
    </body>
</html>        