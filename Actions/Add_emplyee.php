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
$type = $_POST['type'];
// check if inputs vide
if($first != "" && $last != "" && $mail != "" && $cin != "" && $phone != "" && $passord != "" && $type != ""){
    // write the mysql requet and prepare it and exicute it 
    $sql = "INSERT INTO `persons`(`LastName`, `FirstName`, `Mail`, `UserType`, `ipassword`, `Phone`, `cin`) VALUES (?,?,?,?,?,?,?);";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$last, $first, $mail,$type, $passord,$phone,$cin]);
    if($stmt){
        header('location:../'. $_SESSION['type'] .'.php?msg=done');
    }  
}else{
    header('location:../'. $_SESSION['type'] .'.php?msg=error');
}
?>