<?php
//session_start();
/* * PHP Techdegree Project 2: Build a Quiz App in PHP
 *
 * These comments are to help you get started.
 * You may split the file and move the comments around as needed.
 *
 * You will find examples of formating in the index.php script.
 * Make sure you update the index file to use this PHP script, and persist the users answers.
 *
 * For the questions, you may use:
 *  1. PHP array of questions
 *  2. json formated questions
 *  3. auto generate questions
 *
 */

// Include questions
include "questions.php";
include "functions.php";
// Keep track of which questions have been asked
$question = filter_input(INPUT_GET, 'p', FILTER_SANITIZE_NUMBER_INT);
if (empty ($question)){
  session_destroy();
  $score = 0;
  $question = 1;
}
if(isset($_POST['answer'])){
   $_SESSION['answer'][$question-1] = filter_input(Input_POST, 'answer', FILTER_SANITIZE_STRING);
}
/*if (isset($_POST['answer'])) {
   $_SESSION['answer'] = filter_input(INPUT_POST, 'answer', FILTER_SANITIZE_STRING);
}*/
if (isset($_POST['correct'])) {
        $_Session['correct'] = filter_input(INPUT_POST, 'correct',
FILTER_SANITIZE_NUMBER_INT);
}
//Show which question they are on
// Show random question
// Shuffle answer buttons
shuffle($_SESSION['questions']);
$choices = ['correctAnswer', 'firstIncorrectAnswer', 'secondIncorrectAnswer'];
shuffle($choices);
echo "<p class='breadcrumbs'>Question " . $question . " of 10</p>";
    echo "<p class='quiz'>What is " . $questions[$question-1]["leftAdder"] . " + " . $questions[$question-1]["rightAdder"] . "?</p>";
    echo "<form action='index.php?p=" . ($question+1) . "' method='post'>";

    echo "<input type='submit' class='btn' name='answer' value='" . $questions[$question-1][$choices[0]] . "'>";
    echo "<input type='submit' class='btn' name='answer' value='" . $questions[$question-1][$choices[1]] . "'>";
    echo "<input type='submit' class='btn' name='answer' value='" . $questions[$question-1][$choices[2]] . "'>";
    echo "<input type='hidden' name='correct' value='" . $correctAnswer . "'>";

// Toast correct and incorrect answers
    toasts ();
// Keep track of answers
// If all questions have been asked, give option to show score
// else give option to move to next question
if ($question_num == 11) {
    echo '<h1> You got '. $_SESSION['numberCorrect'] . ' out of 10 correct!</h1>';
    echo "<form action='index.php' method='GET'>";
    echo "<input type='submit' class='btn' name='restart' value='Try Again?'>";
    session_destroy();
    echo '</form>';
}

// Show score
// Show score & button to restart
