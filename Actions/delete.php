<?php 
// delete the emplyee that we get his CIN from the list 
 require "../link_it.php";
 session_start();
  $up = "DELETE FROM `persons` WHERE cin =? ";
  $stmt = $pdo->prepare($up);
  $stmt->execute([$_GET['cin']]);
  header("location:../".$_SESSION['type'].".php?msg=d_done");
?>