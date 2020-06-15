<?php 
include "files/navbar.php";
if (!empty($_POST)){
  $mail = $_POST['mail'];
  $password = $_POST['password'];
  $sql = "SELECT LastName, FirstName ,  Mail ,  UserType ,  ipassword ,  daysLeft ,  Phone ,  cin  FROM persons WHERE Mail = ? AND ipassword = ?";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$mail, $password]);
  $data = $stmt->fetch();
  if($data){
    header('location:'. $data['UserType'] .'.php');
    $_SESSION['type'] = $data['UserType'];
    $_SESSION['mail'] = $data['Mail'];
    $_SESSION['LastName'] = $data['LastName'];
    $_SESSION['FirstName'] = $data['FirstName'];
    $_SESSION['Phone'] = $data['Phone'];
    $_SESSION['cin'] = $data['cin'];
    $_SESSION['daysLeft'] = $data['daysLeft'];
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