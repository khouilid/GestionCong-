<div id="add_Employee" style="display: none !important;">
    <div class="container d-flex justify-content-around">
    <form action="Actions/Add_emplyee.php" method='POST'>
        <div class="card p-5 m-4 ">
            <input type="text" class="form-control width mt-3" placeholder="First Name" name="first" aria-label="Username"
                aria-describedby="addon-wrapping">
            <input type="text" class="form-control width mt-3" placeholder="Last Name" name="last" aria-label="Username"
                aria-describedby="addon-wrapping">
            <input type="email" class="form-control width mt-3" placeholder="Email" name="mail" aria-label="Username"
                aria-describedby="addon-wrapping">
            <input type="text" class="form-control width mt-3" placeholder="CIN " name="cin" aria-label="Username"
                aria-describedby="addon-wrapping">
            <input type="text" class="form-control width mt-3" placeholder="Phone Number" name="phone" aria-label="Username"
                aria-describedby="addon-wrapping">
            <input type="password" class="form-control width mt-3" placeholder="Password" name="password" aria-label="Username"
                aria-describedby="addon-wrapping">
            <div class="d-flex justify-content-around">
                <div class="mt-2">
                    <input type="radio" name="type" value="Employee" id="em">
                    <label for="em">Employee</label>
                </div>
                <div class="mt-2">
                    <input type="radio" name="type" value="Admin" id="ad">
                    <label for="ad">Admin</label>
                </div>
                <div class="mt-2">
                    <input type="radio" name="type" value="Boss" id="der">
                    <label for="der">Boss</label>
                </div>
            </div>
            <button type="submit" class="btn font-weight-bold bg-danger text-white width mt-3">
                <i class="fas text-white fa-user-plus mr-1"></i>Add Employee</button>

        </div>
    </form>
    </div>
</div>