




<!-- list of all emplyees -->
<div id="Employee_list" class="container mt-3 table-responsive">

<div class="input-group flex-nowrap mt-2 mb-2">
<div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping">@</span>
  </div>
  <input type="text" class="form-control" id="myInput" placeholder="Emplyee Information" aria-label="Username" aria-describedby="addon-wrapping">
</div>

    <table class="table" >
        <thead class="bg-danger text-white">
            <tr>
                <th scope="col">CIN</th>
                <th scope="col">First NAME</th>
                <th scope="col">Last NAME</th>
                <th scope="col">EMAIL</th>
                <th scope="col">Phone Number</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody id="myTable">
        <?php 
        // get all the emlyeers in the DB
        $stmt = $pdo->query("SELECT * FROM `persons` WHERE UserType = 'Employee' ");
        // loop truth all element and show them in the list  
        while($users = $stmt->fetch()){
            echo "
            <tr class='hove'>
            <th  scope=\"row\">". $users['cin'] ."</th>
            <td>". $users['FirstName'] ."</td>
            <td>". $users['LastName'] ."</td>
            <td>". $users['Mail'] ."</td>
            <td>". $users['Phone'] ."</td>
            <td><a href='Actions/delete.php?cin=".  $users['cin'] ."'><button class='btn btn-light' type='submit'><i class=\"fas fa-trash\"></i></button></a> </td>
        </tr>
  
        ";
        }        
        ?>
        </tbody>
    </table>
</div>
<script>


</script>