<?php
include "link_it.php";
include "files/navbar.php";
if($_SESSION['type'] != 'Employee'){
    header('location: index.php');
}
// some alerts for msgs
include "files/alert.php";





?>
<div class=" d-flex justify-content-center align-items-center select ">
<!-- in this part i include all the btns in the menu -->
    <button id="Employee_request_btn" type="button" class="btn font-weight-bold width ml-3 selects"><i class="fas fa-user-alt mr-2"></i>My Informations</button>
    <button id="Employee_request_btn" type="button" class="btn font-weight-bold width ml-3 selects"><i class="fas fa-clipboard mr-2"></i>Post demand</button>
</div>


<div style="display:none;" class="container bg-light rounded-lg mt-5 p-3 shadow">
    <div class="row justify-content-center"><h2 class="font-weight-bolder pro rounded" >Profil</h2></div>
    <div class="d-flex align-items-center">
       <div>
        <img class="profil rounded-lg" src="src/img/.jfif" alt="">
       </div>
       <div class="ml-3">
           <h3 class="font-weight-bolder"><?php echo $_SESSION['LastName'] ?>  <?php echo $_SESSION['FirstName'] ?> </h3>
       </div>
    </div>
    <hr>

    <div class='row justify-content-between mr-4 ml-4 mt-3'>
        <div><h5 class="font-weight-bolder ml-3 rounded p-2"><span class="text-danger">E-mail : </span></h5></div>
        <div><h5 class="font-weight-bolder ml-3 rounded p-2"><?php echo $_SESSION['mail'] ?></h5></div>
    </div>
    <hr>
    <div class='row justify-content-between mr-4 ml-4 mt-3'>
        <div><h5 class="font-weight-bolder ml-3 rounded p-2"><span class="text-danger">CIN : </span></h5></div>
        <div><h5 class="font-weight-bolder ml-3 rounded p-2"><?php echo $_SESSION['cin'] ?></h5></div>
    </div>
    <hr>
    <div class='row justify-content-between mr-4 ml-4 mt-3'>
        <div><h5 class="font-weight-bolder ml-3 rounded p-2"><span class="text-danger">Phone : </span></h5></div>
        <div><h5 class="font-weight-bolder ml-3 rounded p-2"><?php echo $_SESSION['Phone'] ?></h5></div>
    </div>
    <hr>
    <div class='row justify-content-between mr-4 ml-4 mt-3'>
        <div><h5 class="font-weight-bolder ml-3 rounded p-2"><span class="text-danger">Day you got it : </span></h5></div>
        <div><h5 class="font-weight-bolder ml-3 rounded p-2"><?php echo $_SESSION['daysLeft'] ?> Day</h5></div>
    </div>
    <hr>
    <div class='row justify-content-between mr-4 ml-4 mt-3'>
        <div><h5 class="font-weight-bolder ml-3 rounded p-2"><span class="text-danger">Job Type : </span></h5></div>
        <div><h5 class="font-weight-bolder ml-3 rounded p-2"><?php echo $_SESSION['type'] ?></h5></div>
    </div>
    <div class='d-flex justify-content-center'>
        <button id="Employee_request_btn" type="button" class="btn font-weight-bold width ml-3 selects border"><i class="fas fa-download mr-2"></i>Download</button>

    </div>

</div>

<div class="container p-3">
<div class="col-md-6 mb-3">
      <label for="validationTooltip01">First name</label>
      <input type="number" class="form-control" id="validationTooltip01" value="Mark" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
  <div class="mb-3">
    <label for="validationTextarea">Discription</label>
    <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></textarea>
  </div>

</div>

