<?php
function toasts () {
  if (isset($_POST['answer'])) {
       $_SESSION['answer'] = filter_input(INPUT_POST, 'answer', FILTER_SANITIZE_NUMBER_INT);
   }
   if (isset($_POST['correct'])) {
       $_SESSION['correct'] = filter_input(INPUT_POST, 'correct', FILTER_SANITIZE_NUMBER_INT);
   }
   if ($_SESSION['answer'] == $_SESSION['correct']) {
       // correct toast
       ++$_SESSION['score'];
   } else {
       // incorrect toast
   }

}



 ?>
