<?php 
include "files/navbar.php";
if (!empty($_POST)){
  $mail = $_POST['mail'];
  $password = $_POST['password'];
  $sql = "SELECT Mail , ipassword, UserType FROM persons WHERE Mail = ? AND ipassword = ?";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$mail, $password]);
  $data = $stmt->fetch();
  if($data){
    if($data['UserType'] == 'Admin'){
      header('location: Admin.php');
    }elseif($data['UserType'] == 'Boss'){
      header('location: boss.php');
    }elseif($data['UserType'] == 'Boss'){
      header('location:  index.php');
    }
    $_SESSION['type'] = $data['UserType'];
    $_SESSION['mail'] = $data['Mail'];
  }
}
?>
<body class="bg-light h-100">
<form method="POST">
<div class="d-flex align-items-center justify-content-center h-100">
        <div class="card width2 d-flex flex-derection-column align-items-center p-4 ">
          <input type="email" name="mail" class="form-control width mt-3" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
          <input type="password" name='password' class="form-control width mt-3" placeholder="Password" aria-label="Username" aria-describedby="addon-wrapping">
          <?php 
          // if(empty($_SESSION['mail'])){
            if (!empty($_POST)){
                if(!$data){
                  echo"<p class=\"text-danger text-center\">Sorry User Name or Password not Correct</p>";
                }
            }
          ?>       
          <button type="submit" class="btn btn-outline-danger width mt-3">Log in</button>
        </div>
</div>
</form>

<?php
include "files/footer.php";
?>