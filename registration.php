
    <?php
        include"header.php";
    ?>
    <!-- <h1>sign up to register</h1> -->
    <form action="" method="">
    <br>
    <h1 style="text-align:center; color:#f4a460">sign up to register</h1>
        <div class="container-fluid">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control" id="firstname" required placeholder="Firstname">
                </div>
                <div class="form-group col-md-6">
                    <label for="lastname">Last Name</label>
                    <input type="text" class="form-control" id="lastname" required placeholder="Lastname">
                </div>
            </div>
        </div>
        <!--End of fname and lname-->
        <!--Username-->
        <div class="container-fluid">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="username">Username</label>
                    <input type="text"  class="form-control" id="validationServer01" required placeholder="username">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
        </div>
        
        <!--start of email & pword-->
        <div class="container-fluid">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" required>
                    <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    <meter max="4" id="password-strength-meter"></meter>
                    <p id="password-strength-text"></p>
                </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="password">Retype Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </d}iv>    
            </div>
        </div>
        <!--end of email & pword-->
        <!--submit-->
        <div class="container-fluid">
            <div class="form-row">
                <div class="form-group col-md-3">
                </div>
                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-primary width:100%;">Sign up</button>
                    <p>Already registered: <a href="login.php">Log in</a> </p>
                </div>
                <div class="form-group col-md-3">
                </div>
            </div>
        </div>
        

    </form>

<?php
    include"footer.php";
?>
