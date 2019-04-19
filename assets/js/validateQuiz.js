/*
Filename: validateQuiz.js
Description: javascript to validate quiz answers
Author: Aaron Erhart
Last Updated: 4/18/19
*/

function validateQuiz() {
    "use strict";
    var questions = [];
    for (var i = 0; i < 10; i++) {
        questions[i] = document.getElementById('question' + (i + 1));
    }
    console.log(questions);
    var i = 0;

    for (var i = 0; i < questions.length; i++) {
        var error = document.getElementById('error');
        var questionValid = false;
        var answers = questions[i].getElementsByTagName('input');

        for (var j = 0; j < answers.length; j++) {
            if (answers[j].checked) {
                error.innerHTML = "";
                error.style = null;
                questionValid = true;
            }
        }
        if (!questionValid) {
            error.innerHTML = "Make Sure All Questions are Answered!";
            error.style.color = "red";
            error.scrollIntoView();
            return false;
        }
    }


    return true;
}
