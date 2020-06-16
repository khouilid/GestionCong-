


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
    <button id="Get_info_btn" type="button" class="btn font-weight-bold width ml-3 selects"><i class="fas fa-user-alt mr-2"></i>My Informations</button>
    <button id="Post_D_btn" type="button" class="btn font-weight-bold width ml-3 selects"><i class="fas fa-clipboard mr-2"></i>Post demand</button>
    <button id="y_demand_btn" type="button" class="btn font-weight-bold width ml-3 selects"><i class="fas fa-list-alt mr-1"></i>Your demand</button>
</div>


<form action="Actions/Create_pdf.php" method="POST">
<div   id="Get_info" class="w-50 m-auto bg-light rounded-lg mt-5 p-3 shadow">
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
        <button  type="submit" class="btn font-weight-bold width ml-3 selects border"><i class="fas fa-download mr-2"></i>Download</button>

    </div>

</div>
</form>

<div style="display:none;" id="Post_D" class="pt-5">
   <form action="Actions/demand.php" method="POST">
        <div  class="w-50  m-auto p-3 bg-light rounded-lg mt-4 shadow">
                <div class="col-md-6 mb-3 row">
                <label for="validationTooltip01">The days</label>
                <input type="number" name="days" class="form-control" id="validationTooltip01" required>
                </div>
                <div class="mb-3">
                    <label for="validationTextarea">Discription</label>
                    <textarea class="form-control is-invalid" name='msg' id="validationTextarea" placeholder="Your expinition" required></textarea>
                </div>
                <div class='d-flex justify-content-center mt-5'>
                    <button  type="submit" class="btn font-weight-bold width ml-3 selects border"><i class="far fa-paper-plane mr-2"></i>Send</button>
                </div>
            </div>
   </form>
</div>




<div id="y_demand" style="display: none ">
<?php
 // get all the emlyeers in the DB
 $stmt = $pdo->query("SELECT d.demand_id , d.msg, d.days, p.FirstName, p.LastName , p.daysLeft,d.reponce FROM demand d INNER JOIN persons p ON p.ID = d.id WHERE d.ID = ". $_SESSION['ID'] .";");
 // loop truth all element and show them in the list  
while($demand = $stmt->fetch()){
    if($demand['reponce'] == 0){

        echo "  
        <form action='Actions/reponce.php' method='POST'>
               <div class=\"container p-4 shadow mt-5 rounded\">
               <h4 class=\"text-center\"> ". $demand['FirstName'] ."  ". $demand['LastName'] ."</h4>
               <hr>
               <p class=\"text-center m-4 rounded bg-light p-5\"> ". $demand['msg'] ."
               </p>
               <div class=\"d-flex justify-content-around text-center font-weight-bold align-items-center\">
                   <p> ". $demand['days'] ."<br>demand</p>
                   <p> ". $demand['daysLeft'] ."<br>Days he get</p>
               </div>
               <div>
                  <p class='font-weight-bold text-warning text-center'>Your demand in progress</p>
               </div>
               </div>
               
   
       </form>
       " ;
    }elseif($demand['reponce'] == 1){

        echo "  
        <form action='Actions/reponce.php' method='POST'>
               <div class=\"container p-4 shadow mt-5 rounded\">
               <h4 class=\"text-center\"> ". $demand['FirstName'] ."  ". $demand['LastName'] ."</h4>
               <hr>
               <p class=\"text-center m-4 rounded bg-light p-5\"> ". $demand['msg'] ."
               </p>
               <div class=\"d-flex justify-content-around text-center font-weight-bold align-items-center\">
                   <p> ". $demand['days'] ."<br>demand</p>
                   <p> ". $demand['daysLeft'] ."<br>Days he get</p>
               </div>
               <div>
                  <p class='font-weight-bold text-success text-center'>Your demand Accepted</p>
               </div>
               </div>
               
   
       </form>
       " ;
    }elseif($demand['reponce'] == 2){

        echo "  
        <form action='Actions/reponce.php' method='POST'>
               <div class=\"container p-4 shadow mt-5 rounded\">
               <h4 class=\"text-center\"> ". $demand['FirstName'] ."  ". $demand['LastName'] ."</h4>
               <hr>
               <p class=\"text-center m-4 rounded bg-light p-5\"> ". $demand['msg'] ."
               </p>
               <div class=\"d-flex justify-content-around text-center font-weight-bold align-items-center\">
                   <p> ". $demand['days'] ."<br>demand</p>
                   <p> ". $demand['daysLeft'] ."<br>Days he get</p>
               </div>
               <div>
                  <p class='font-weight-bold text-danger text-center'>Your demand Refused</p>
               </div>
               </div>
               
   
       </form>
       " ;
    }
}
?>
</div>




<?php
include "files/footer.php";
?>

<script  >

let Post_D = document.getElementById('Post_D');
let Get_info = document.getElementById("Get_info");
let Post_D_btn = document.getElementById('Post_D_btn');
let Get_info_btn = document.getElementById("Get_info_btn");
let y_demand_btn= document.getElementById("y_demand_btn");
let y_demand = document.getElementById("y_demand");
// the form that the emplyee use for post his domend
Post_D_btn.addEventListener('click', ()=> {
    Post_D.style.display = 'block';
    Get_info.style.display = 'none';
    y_demand.style.display = 'none';

 
})
// the form that the emplyee use for get his info
Get_info_btn.addEventListener('click', ()=> {
    Post_D.style.display = 'none';
    Get_info.style.display = 'block';
    y_demand.style.display = 'none';

 
})
y_demand_btn.addEventListener('click', ()=> {
    Post_D.style.display = 'none';
    y_demand.style.display = 'block';
    Get_info.style.display = 'none';

 
})
</script>

