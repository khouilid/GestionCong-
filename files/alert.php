<?php

if(isset($_GET['msg'])){

    if($_GET['msg'] == 'done'){
        echo "
    
        <div class=\"alert alert-success m-0 alert-dismissible fade show\" role=\"alert\">
          <strong>DONE !</strong> this information inserted seccussfuly.
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
                ";
    }elseif($_GET['msg'] == 'error'){
        echo "
    
        <div class=\"alert alert-danger m-0 alert-dismissible fade show\" role=\"alert\">
          <strong>Sorry !</strong> Something wrong happend.
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
                ";
    }elseif($_GET['msg'] == 'update'){
        echo "
    
        <div class=\"alert alert-success m-0 alert-dismissible fade show\" role=\"alert\">
          <strong>DONE !</strong> this information update seccussfuly.
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
                ";
    }
}



?>