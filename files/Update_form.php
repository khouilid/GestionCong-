<div id="change_Employee_info" style="display: none ">
<form action="Actions/Update.php" method='POST'>
    <div class="container d-flex justify-content-around">
        <div class="card p-5 m-4 ">
            <p class="width m-0  p-1 mb-2 rounded ">Employee CIN the you wwant to change his info</p>
            <input type="text" class="form-control width mt-3" placeholder="CIN " name="cin" aria-label="Username"
                aria-describedby="addon-wrapping">
            <p class="width mt-2  p-1 rounded ">the new information</p>
            <input type="text" class="form-control width mt-3" placeholder="First Name" name="first" aria-label="Username"
                aria-describedby="addon-wrapping">
            <input type="text" class="form-control width mt-3" placeholder="Last Name" name="last" aria-label="Username"
                aria-describedby="addon-wrapping">
            <input type="email" class="form-control width mt-3" placeholder="Email" name="mail" aria-label="Username"
                aria-describedby="addon-wrapping">
            <input type="text" class="form-control width mt-3" placeholder="Phone Number" name="phone" aria-label="Username"
                aria-describedby="addon-wrapping">
            <input type="password" class="form-control width mt-3" placeholder="Password" name="password" aria-label="Username"
                aria-describedby="addon-wrapping">
            <button type="submit" class="btn font-weight-bold bg-danger text-white width mt-3"><i
                    class="fas text-white fa-user-plus mr-1"></i>change</button>
        </div>
    </div>
</form>
</div>