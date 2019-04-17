<!--
Filename: quiz.php
Description: java juice quiz
Author: Aaron Erhart
Last Updated: 4/17/19
-->

<?php
    $filename = "quiz.php";
    $page = "Quiz";
    
    // access database
    require "../../../dbConnect.inc";

    // get questions and add them to a 2d array
    $sql = "select questionID, question from questions";
    $res = mysqli_query($mysqli, $sql);
    while ($row = $res->fetch_assoc()) {
            $allQuestions[] = $row;
    }

    // get answers and add them to a 2d array
    $sql = "select questionID, A, B, C, D from answers";
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


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/quiz.css">
</head>

<body>
    <h3 class="heading">Quiz</h3><br>
    <p class="heading">This quiz will have 10 questions, which may be from any of the lessons in Java Juice. Your scores will be saved to your account.</p>
    <form name="quizForm" action="quizProcess.php" method="post">
        <dl id="quiz">

            <?php
            for ($i = 0; $i < sizeof($chosenQuestions); $i++) {
                $qnumber = $i + 1;
                echo "<dt class='quiz-question'>".$qnumber.") ".$chosenQuestions[$i]."</dt>";
                foreach (range('A', 'D') as $letter) {
                    echo "<dd class='answer-wrapper'>
                    <label class='container'>".$chosenAnswers[$i][$letter]."
                    <input class='answer' type='radio' name='question".$i."' value='".$letter."'>
                    <span class='checkmark'></span></label></dd>";
                }
            }
            ?>
        </dl>
        <input id="submit-button" type="submit" value="Submit Quiz">
    </form>
</body>

</html>
