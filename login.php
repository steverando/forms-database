<?php
    include"header.php";
?>
<form action="" method="">
    <br>
    <br>
    <h2 style="text-align:center; color:#f4a460"><u>Log In</u></h2>
    <!--start of username & password-->
    <div class="container-fluid">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="username">Username/Email</label>
                <input type="text" class="form-control" id="username" required placeholder="username">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" required placeholder="password">
            </div>
        </div>
    </div>
    <!--Login-->
    <div class="container-fluid">
            <div class="form-row">
                <div class="form-group col-md-3"></div>
                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-primary width:100%;">Log in</button>
                    <p>New User: <a href="registration.php">sign up</a> </p>
                </div>
                <div class="form-group col-md-3"></div>
            </div>
        </div>

</form>

<?php
    include"footer.php";
?>