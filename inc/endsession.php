<?php
session_start();
echo"<p>You scored ".$_SESSION['score'] . " out of 10!</p>";
session_destroy();
echo "<form action='/index.php' method='post'>";
echo "<input type='submit' class='btn' name='Retest' value='Play Again'>";
echo "</form>";
?>
