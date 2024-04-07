document.addEventListener('DOMContentLoaded', function() { /*in the moment the page loads it creates the marks fields and starts checking for any change in them*/
    var marksInputs = document.querySelectorAll('.mark');

    marksInputs.forEach(function(input) { /*whenever user puts a mark calculates the total*/
        input.addEventListener('input', calculateTotalMarks);
    });

    function calculateTotalMarks() { /*fucntion is called everytime a user puts a mark*/
        var total = 0; /*starts with 0*/
        marksInputs.forEach(function(input) { /*brings the user input*/
            total += parseInt(input.value) || 0;  /*add the value the user input to the original value*/
        });
        document.getElementById('totalMarks').textContent = total + '/35'; /*displays with a total on the side*/
    }

    document.getElementById('sendFeedbackBtn').addEventListener('click', function() { /*function to create an alert and a box*/
        var feedback = prompt('Write your feedback:'); /*open an alert for the user to put a feedback*/
        alert('Sorry, no backend yet! But in the future I will update this part. Your feedback was not sent.'); /*when the user clicks on ok it just states the error*/
    });

    
});