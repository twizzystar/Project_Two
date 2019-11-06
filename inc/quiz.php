<?php
session_start();
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
// Keep track of which questions have been asked
$question = filter_input(INPUT_GET, 'p', FILTER_SANITIZE_NUMBER_INT);
if (empty ($question)){
  session_destroy();
  $score = 0;
  $question = 1;
}
// Show which question they are on
// Show random question
// Shuffle answer buttons
echo "<p class='breadcrumbs'>Question " . $question . " of 10</p>";
    echo "<p class='quiz'>What is " . $questions["leftOperand"] . $operators[$pick] . $questions["rightOperand"] . "?</p>";
    echo "<form action='all.php?p=" . ($question+1) . "' method='post'>";
    echo "<input type='hidden' name='id' value='0' />";
    echo "<input type='submit' class='btn' name='answer' value='" . $questions1["correctAnswer"] . "'>";
    echo "<input type='submit' class='btn' name='answer' value='" . $questions1["firstIncorrectAnswer"] . "'>";
    echo "<input type='submit' class='btn' name='answer' value='" . $questions1["secondIncorrectAnswer"] . "'>";
    echo "<input type='hidden' name='correct' value='" . $questions['correctAnswer'] . "'>";
    echo "</form>";

// Toast correct and incorrect answers
// Keep track of answers
// If all questions have been asked, give option to show score
// else give option to move to next question


// Show score
