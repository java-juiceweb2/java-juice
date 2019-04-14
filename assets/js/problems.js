var click = true;

// Function to display the actual answer to the problem
function displayProblem() {

    if (click) {
        document.getElementById("problem-answer").style.display = "block";
        document.getElementById("result-button").innerHTML = "Clear";
        click = false;
    } else {
        document.getElementById("problem-answer").style.display = "none";
        document.getElementById("result-button").innerHTML = "Solution";
        click = true;
    }

}