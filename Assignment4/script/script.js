var selectedOptions = {  /* defining a bunch of var that will be used in the funtions below*/
    bannerColor: '#add8e6', /*initial color is the one the page is using*/
    navColor: '#007bff', /*initial color is the one the page is using*/
    backgroundColor: '#ffffff', /*initial color is the one the page is using*/
    font: 'Gill Sans', /*initial font is the one the page is using*/
    userName:'' /*user will input their name in the page it starts empty to avoid errors in the functions*/
};


document.addEventListener('DOMContentLoaded', function() {  /*this function checks if the DOM is loading and ask a question if the user wants to enter the page*/
    /* result will store if the user answered the question inside the confirm as Ok or cancel*/
    var result = confirm("Do you have problems harmonizing the colors and fonts on your page? Click Ok and we will help you, otherwise go back with Cancel.");
    if (result) {  /*if user puts ok start here*/
        userName = prompt("Please enter your name:"); /*ask for user name*/
        if (userName) { /*if user put name we thank him with his name*/
            alert(`Thank you, ${userName}!`);
        } else { /*user do not put the name complains and goes back to index*/
            alert("You didn't enter your name. Please try again.");
            window.location.href = "index.php";
        }
    } else { /*if user does not click ok goes back to index*/
        window.location.href = "index.php";
    }
});



function getRandomColor() {   /*this functions creates a random number calling an existing code*/
    return '#' + Math.floor(Math.random() * 16777215).toString(16); /*returns a random number multiplied in hexadecimal*/
}

function updateColorDisplay() { /* function to update the color information*/
    var colorDisplay = document.getElementById('colorDisplay'); /*create a var that will have the whole information of the display*/
    colorDisplay.textContent = 'Banner Color: ' + selectedOptions.bannerColor +  /*everytime the function is called it will update with the information of the colors stored in the vars defined in the begining*/
                               ', Nav Color: ' + selectedOptions.navColor + 
                               ', Background Color: ' + selectedOptions.backgroundColor + 
                               ', Font: ' + selectedOptions.font;
}

function changeBannerColor() { /*funcion to change the color of banner*/
    selectedOptions.bannerColor = getRandomColor(); /*asks the random for a new color hex*/
    var banner = document.getElementById('banner'); /*stores the new color in a new var*/
    banner.style.backgroundColor = selectedOptions.bannerColor; /*changes the color to the new color*/
    updateColorDisplay(); /*updates the text containing the color*/
}

function changeNavColor() { /*function to change the color of nav*/
    selectedOptions.navColor = getRandomColor();  /*asks the random for a new color hex*/
    var navbar = document.getElementById('navbar'); /*stores the new color in a new var*/
    navbar.style.backgroundColor = selectedOptions.navColor;/*changes the color to the new color*/
    updateColorDisplay();/*updates the text containing the color*/ 
}

function changeBackgroundColor() {
    selectedOptions.backgroundColor = getRandomColor();/*asks the random for a new color hex*/
    var body = document.body; /*stores the new color in a new var*/
    body.style.backgroundColor = selectedOptions.backgroundColor;
    updateColorDisplay(); /*updates the text containing the color*/
}

function changeFont() {
    var heading = document.getElementById('title').querySelector('h1');
    var fonts = ['Arial', 'Verdana', 'Courier New', 'Times New Roman','Gill Sans']; /*creates an array with a few fonts*/
    selectedOptions.font = fonts[Math.floor(Math.random() * fonts.length)]; /*randomize the font*/
    heading.style.fontFamily = selectedOptions.font; /*puts the new font in the page*/
    updateColorDisplay(); /*updates the text with the new font*/
}

function generateCSS(){
    var bannerColor = selectedOptions.bannerColor;
    var navColor = selectedOptions.navColor;
    var backgroundColor = selectedOptions.backgroundColor;
    var font = selectedOptions.font;
    /*below is the preformated text i created to appear in teh popup box*/
    /*it brings the vars above and put it in the middle of the text*/
    var cssCode = `
            /* CSS Code generated for ${userName} */    
            #banner {
                background-color: ${bannerColor};
            }
            #navbar {
                background-color: ${navColor};
            }
            body {
                background-color: ${backgroundColor};
                font-family: ${font};
            }
        `;
        document.getElementById('cssCode').textContent = cssCode;  /*puts the csscode in the page*/
            document.getElementById('popup').style.display = 'block';  /*blocks the popup to appear because initialy it is display none*/
    
     
    }

    function copyToClipboard() {  /*function to copy the text*/
        var cssCode = document.getElementById('cssCode').textContent; /* creates a new var and stores the text that is in the page*/
        navigator.clipboard.writeText(cssCode).then(function() { /*calls a function to copy to cplipboard*/
            alert('The CSS code has been copied to your clipboard.'); /*gives an alert*/
        }).catch(function(error) { /*in case of error gives another alert*/
            console.error('Failed to copy: ', error);
        });
    }
    





