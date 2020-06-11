<?php
include "link_it.php";
include "files/navbar.php";
// some alerts for msgs
include "files/alert.php";
?>
<div class=" d-flex justify-content-center align-items-center select ">
<!-- in this part i include all the btns in the menu -->
   <?php
     include "files/buttons.php";
   ?>
</div>
<?php
// include add emlyer AND Update  and list forms and 
include "files/emplyers_list.php";
include "files/form_add.php";
include "files/Update_form.php"; 
?>

<script src='src/js/general.js'></script>
<?php
include "files/footer.php";
?>