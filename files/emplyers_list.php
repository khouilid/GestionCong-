<div id="Employee_list" class="container mt-3">
    <table class="table">
        <thead class="bg-danger text-white">
            <tr>
                <th scope="col">CIN</th>
                <th scope="col">First NAME</th>
                <th scope="col">Last NAME</th>
                <th scope="col">EMAIL</th>
                <th scope="col">Phone Number</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        // get all the emlyeers in the DB
        $stmt = $pdo->query("SELECT * FROM `persons` WHERE UserType = 'Employee' ");
        while($users = $stmt->fetch()){
            echo "<tr>
            <th scope=\"row\">". $users['cin'] ."</th>
            <td>". $users['FirstName'] ."</td>
            <td>". $users['LastName'] ."</td>
            <td>". $users['Mail'] ."</td>
            <td>". $users['Phone'] ."</td>
        </tr>";
        }        
        ?>
        </tbody>
    </table>
</div>