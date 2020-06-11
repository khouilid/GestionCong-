<?php 
include "../link_it.php";
session_start();
// get all inputs value 
$first = $_POST['first'];
$last = $_POST['last'];
$mail = $_POST['mail'];
$cin = $_POST['cin'];
$phone = $_POST['phone'];
$passord = $_POST['password'];
// get the input value from the user  and Update the changes
if($first != ""){
    $up1 = "UPDATE `persons` SET `FirstName`= ? WHERE `cin` = '". $cin ."'";
    $stmt = $pdo->prepare($up1);
    $stmt->execute([$first]);
    header('location:../'. $_SESSION['type'] .'.php?msg=update');
}
if($last != ""){
    $up2 = "UPDATE `persons` SET `LastName`= ? WHERE `cin` = '". $cin ."'";
    $stmt = $pdo->prepare($up2);
    $stmt->execute([$last]);
    header('location:../'. $_SESSION['type'] .'.php?msg=update');
}
if($mail != ""){
    $up2 = "UPDATE `persons` SET `Mail`= ? WHERE `cin` = '". $cin ."'";
    $stmt = $pdo->prepare($up2);
    $stmt->execute([$mail]);
    header('location:../'. $_SESSION['type'] .'.php?msg=update');
}
if($phone != ""){
    $up3 = "UPDATE `persons` SET `Phone`= ? WHERE `cin` = '". $cin ."'";
    $stmt = $pdo->prepare($up3);
    $stmt->execute([$phone]);
    header('location:../'. $_SESSION['type'] .'.php?msg=update');
}
if($passord != ""){
    $up4 = "UPDATE `persons` SET `ipassword`= ? WHERE `cin` = '". $cin ."'";
    $stmt = $pdo->prepare($up4);
    $stmt->execute([$passord]);
    header('location:../'. $_SESSION['type'] .'.php?msg=update');
}



?>
