<!--
Filename: quiz.php
Description: java juice quiz
Author: Aaron Erhart
Last Updated: 4/17/19
-->

<?php
    $filename = "quiz.php";
    $pagename = "Quiz";

    session_start();

    if (!isset($_SESSION['user_name'])){
      header("Location: login.php");
    }

    // access database
    require "../../../../dbConnect.inc";

    // get questions and add them to a 2d array
    $sql = "select questionID, question from java_juice_questions";
    $res = mysqli_query($mysqli, $sql);
    while ($row = $res->fetch_assoc()) {
            $allQuestions[] = $row;
    }

    // get answers and add them to a 2d array
    $sql = "select questionID, A, B, C, D, correctAnswer from java_juice_answers";
    $res = mysqli_query($mysqli, $sql);
    while ($row = $res->fetch_assoc()) {
            $allAnswers[] = $row;
    }

    // generate 10 random question IDs
    $allNums = range(0, sizeof($allQuestions)-1);
    shuffle($allNums);
    $chosenNums = array_slice($allNums, 0, 10);

    // add the questions to the array by their IDs
    foreach ($chosenNums as $num) {
        $chosenQuestions[] = $allQuestions[$num]['question'];
        $chosenAnswers[] = $allAnswers[$num];
    }

    $_SESSION['chosenQuestions'] = $chosenQuestions;
    $_SESSION['chosenAnswers'] = $chosenAnswers;

    include "../assets/inc/header.php";

?>

    <h3 class="heading" id="quizHead">Quiz</h3><br>
    <p class="heading">This quiz will have 10 questions, which may be from any of the lessons in Java Juice. Your scores will be saved to your account.</p>
    <form name="quizForm" action="quizProcess.php" method="post" onsubmit="return validateQuiz()">
        <dl id="quiz">
<span id="error"></span>
            <?php
            for ($i = 0; $i < sizeof($chosenQuestions); $i++) {
                
                $question = $chosenQuestions[$i];
                
                echo "<div id='question".($i + 1)."'>
                <dt class='quiz-question'>".($i + 1).") ".$question."</dt>";
                foreach (range('A', 'D') as $letter) {
                    
                    $answer = $chosenAnswers[$i][$letter];
                    
                    echo "<dd class='answer-wrapper'>
                    <label class='container'>".$answer."
                    <input class='answer' type='radio' name='question".$i."' value='".$letter."'>
                    <span class='checkmark'></span></label></dd>";
                }
                echo "</div>";
            }
            ?>
        </dl>
        <input id="submit-button" type="submit" value="Submit Quiz">
    </form>
</body>

<?php

  include "../assets/inc/footer.php";

 ?>
