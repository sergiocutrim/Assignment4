var gifArray = ["images/alien.gif", "images/alien1.gif", "images/alien2.gif", "images/alien4.gif"]; /*creates an array with all the gifs*/
var index = 0; /*just to start as 0 and defined as the same for all functions*/


function changeGif(newIndex) { /*everytime a user clicks on the page in one of the functions mapped in the image*/
    alert("Why did you click on the image?"); /*gives an alert*/
    index = newIndex; /*checks the new index and stores as the actual*/
    document.getElementById("originalImage").style.display = "none"; /*remove the image from display*/
    document.getElementById("gifContainer").innerHTML = '<img src="' + gifArray[index] + '" alt="gif">'; /*puts the gif according to the array and index*/
    document.getElementById("gifContainer").style.display = "block"; /*shows the gif in the page*/
    document.getElementById("return").style.display = "block"; /*display the button that was hidden*/
    document.getElementById("music").play(); /*plays the music*/
}

function returnImage() { /*when the user clicks on the return button*/
    document.getElementById("originalImage").style.display = "block"; /*puts the image to appear again*/
    document.getElementById("gifContainer").style.display = "none"; /*remove the gif*/
    document.getElementById("return").style.display = "none"; /*removes the button from display*/
    document.getElementById("music").pause();/*pauses the music*/
}
