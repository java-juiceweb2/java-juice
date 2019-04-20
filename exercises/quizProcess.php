<!--
Filename: quizProcess.php
Description: sends test sccores to database
Author: Aaron Erhart
Last Updated: 4/18/19
-->
<?php
    session_start();
    require "../../../../dbConnect.inc";
    $filename = "quizProcess.php";
    $pagename = "Quiz Results";
    $answers = [];
    for ($i = 0; $i < sizeof($_POST); $i++) {
        $answers[$i] = $_POST["question".$i];
    }
    include "../assets/inc/header.php";
?>

<h3 id="quizResults">Quiz Results:</h3>

<?php
    echo "<div id='results-container'>";
    $numCorrect = 0;

    $stmt=$CONN->prepare("insert into java_juice_quiz_results (username, question1, question2, question3,	question4, question5, question6, question7, question8, question9, question10) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->bind_param("sssssssssss", $_SESSION['user_name'], $answers[0], $answers[1], $answers[2], $answers[3], $answers[4], $answers[5], $answers[6], $answers[7], $answers[8], $answers[9]);
        $stmt->execute();
        $stmt->close();


    // calculate user's score out of 10
    for ($i = 0; $i < sizeof($_SESSION['chosenAnswers']); $i++) {
        
        $correctLetter = $_SESSION['chosenAnswers'][$i]['correctAnswer'];
        $userLetter = $answers[$i];        
        if ($userLetter == $correctLetter) {
            $numCorrect++;
        }
        
    }

    // display results
    echo "<h3>Total Correct: ".$numCorrect."/10</h3><br>";
    for ($i = 0; $i < sizeof($_SESSION['chosenAnswers']); $i++) {
        $correctLetter = $_SESSION['chosenAnswers'][$i]['correctAnswer'];
        $question = $_SESSION['chosenQuestions'][$i];
        $correctAnswer = $_SESSION['chosenAnswers'][$i][$correctLetter];
        $userLetter = $answers[$i];
        $userAnswer = $_SESSION['chosenAnswers'][$i][$userLetter];
        
        echo "<p class=\"quizQuestion\">Question ".($i + 1).") ".$question."</p>
        <p>Correct Answer: ".$correctLetter.") ".$correctAnswer."</p>
        <p>Your Answer: ".$userLetter.") ".$userAnswer."</p><br>";
    }
    echo "</div>";

    include "../assets/inc/footer.php";
?>