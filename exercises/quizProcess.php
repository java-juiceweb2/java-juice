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
    $answers = [];
    for ($i = 0; $i < sizeof($_POST); $i++) {
        $answers[$i] = $_POST["question".$i];
    }
    include "../assets/inc/header.php";
?>

<h3 id="quizResults">Quiz Results:</h3>

<?php
    echo "<div id='results-container'>";
    for ($i = 0; $i < sizeof($_SESSION['chosenAnswers']); $i++) {
        
        $correctLetter = $_SESSION['chosenAnswers'][$i]['correctAnswer'];
        $question = $_SESSION['chosenQuestions'][$i];
        $correctAnswer = $_SESSION['chosenAnswers'][$i][$correctLetter];
        $userLetter = $answers[$i];
        $userAnswer = $_SESSION['chosenAnswers'][$i][$userLetter];
        
        echo "<p class="quizQuestion">Question ".($i + 1).") ".$question."</p>
        <p>Correct Answer: ".$correctLetter.") ".$correctAnswer."</p>
        <p>Your Answer: ".$userLetter.") ".$userAnswer."</p><br>";
    }
    echo "</div>";
    include "../assets/inc/footer.php";
?>