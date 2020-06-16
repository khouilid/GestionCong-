<?php 
include "./link_it.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src\css\style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/d257b03b55.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<nav class="navbar navbar-expand-lg navbar d-flex justify-content-center  navbar-dark bg-danger">
    <div class="container">
        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                <!-- sow the Grade of the user -->
                <?php 
                 if(isset($_SESSION['type'])){
                     echo "<a class=\"nav-link font-weight-bold text-white\" >".$_SESSION['type'] ."</a>";
                 }else{
                    echo"<a class=\"nav-link font-weight-bold text-white\">Home</a>";
                 }
                ?>  
                </li>
            </ul>
        </div>
    </div>
</nav>
<a class="text-decoration-none text-white" href="Actions/log_out.php">
<div class="icon bg-danger shadow-lg">
<i class="fas fa-sign-out-alt"></i>
</div>
</a>