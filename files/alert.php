<?php
if(isset($_GET['msg'])){
    if($_GET['msg'] == 'done'){
        echo "
        <div class=\"alert text-center error alert-success m-0 alert-dismissible fade show\" role=\"alert\">
          <strong>DONE !</strong> this information inserted seccussfuly.
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
                ";
    }elseif($_GET['msg'] == 'error'){
        echo "
        <div class=\"alert error text-center alert-danger m-0 alert-dismissible fade show\" role=\"alert\">
          <strong>Sorry !</strong> Something wrong happend.
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
                ";
    }elseif($_GET['msg'] == 'update'){
        echo "<div class=\"alert error text-center alert-success m-0 alert-dismissible fade show\" role=\"alert\">
          <strong>DONE !</strong> this information update seccussfuly.
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
               ";
    }
    elseif($_GET['msg'] == 'd_done'){
      echo "<div class=\"alert error text-center alert-success m-0 alert-dismissible fade show\" role=\"alert\">
        <strong>DONE !</strong> this information Deleted seccussfuly.
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
             ";
  }   elseif($_GET['msg'] == 'done2'){
    echo "<div class=\"alert error text-center alert-success m-0 alert-dismissible fade show\" role=\"alert\">
      <strong>DONE !</strong> Your demand send seccussfuly.
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
      </button>
    </div>
           ";
}
}
?>