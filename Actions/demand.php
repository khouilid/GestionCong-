<?php 
require "../link_it.php";
// Push the emlyee demand
session_start();
$up = "INSERT INTO `demand`(`id`, `msg`, `days` ,`reponce`) VALUES (?,?,?,?)";
$stmt = $pdo->prepare($up);
$stmt->execute([$_SESSION['ID'],$_POST['msg'], $_POST['days'],0]);
if($stmt){
   header("location:../".$_SESSION['type'].".php?msg=done");   
}
?>