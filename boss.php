<?php
include "link_it.php";
include "files/navbar.php";
if($_SESSION['type'] != 'Boss'){
    header('location: index.php');
}
// some alerts for msgs
include "files/alert.php";
?>
<div class=" d-flex justify-content-center align-items-center select ">
<!-- in this part i include all the btns in the menu -->
   <?php
     include "files/buttons.php";
   ?>
    <button id="Employee_request_btn" type="button" class="btn font-weight-bold width ml-3 selects"><i
            class="fas fa-list-alt mr-1"></i>Employee request</button>
</div>
<!-- include add emlyer AND Update  and listforms  -->
<?php
include "files/emplyers_list.php";
include "files/form_add.php";
include "files/Update_form.php"; 
?>
<div id="Employee_request" style="display: none ">
<?php
 // get all the emlyeers in the DB
 $stmt = $pdo->query("SELECT d.demand_id , d.msg, d.days, p.FirstName, p.LastName , p.daysLeft FROM demand d INNER JOIN persons p ON p.ID = d.id WHERE d.reponce = '0';");
 // loop truth all element and show them in the list  
while($demand = $stmt->fetch()){
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
            <div class=\"d-flex justify-content-center\">
            <div class=\"mt-2 mr-5\">
                <input type=\"radio\" name=\"reponce\" value=\"2\" id=\"oui\">
                <label for=\"oui\">Accepte</label>
            </div>
            <div class=\"mt-2\">
                <input type=\"radio\" name=\"reponce\" value=\"1\" id=\"non\">
                <label for=\"non\">Refusel</label>
            </div>
            </div>
            <input hidden value='". $demand['demand_id'] ."' name='id'>
            <div class='d-flex justify-content-center mt-5'>
                <button  type=\"submit\" class=\"btn font-weight-bold width ml-3 selects border\"><i class=\"far fa-paper-plane mr-2\"></i>Send</button>
            </div>
            </div>
    </form>
    " ;
}
?>
</div>
<script src='src/js/general.js'></script>
<?php
include "files/footer.php";
?>