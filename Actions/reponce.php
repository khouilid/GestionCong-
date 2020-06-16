<?php
require "../link_it.php";
// push the boss anwser 
session_start();
$stmt = $pdo->query("UPDATE `demand` SET `reponce`='".$_POST['reponce']."' WHERE demand_id=". $_POST['id'] ."");
if($stmt){
       header("location:../".$_SESSION['type'].".php?msg=done");   
}
?>