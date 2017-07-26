<?php include_once '../config.php';
include_once '../includes/dbh-inc.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ### Include Head ### -->
    <?php include_once '../includes/head-inc.php'; ?>
</head>

<body>

    <!-- ### Navigation ### -->
    <?php include_once '../includes/navigation-inc.php'; ?>
    <!-- ### Navigation End ### -->

    <!-- ### Main Content ### -->
    <!-- ### Login Panel ### -->
    <div class="container" id="register_panel">
        <div class="row col-md-6 col-md-offset-3">
            <form method="POST" class="form-horizontal jumbotron" action="../registerUser.php">

                <!-- ## Legend ## -->
                <div class="form-group">
                    <legend class="text-center">Register</legend>
                </div>

                <!-- ## User Email ## -->
                <div class="form-group">
                    <label class="control-label" for="register_email">E-mail</label>
                    <input type="email" class="form-control" name="register_email" id="register_email" placeholder="Enter your e-mail" />
                </div>

                <!-- ## User Name ## -->
                <div class="form-group">
                    <label class="control-label" for="register_name">Username</label>
                    <input type="text" class="form-control" name="register_name" id="register_name" placeholder="Enter your username" />
                </div>

                <!-- ## User Password ## -->
                <div class="form-group">
                    <label class="control-label" for="register_pw">Password</label>
                    <input type="password" class="form-control" name="register_pw" id="register_pw" placeholder="Enter your password" />
                </div>

                <!-- ## User Gender ## -->
                <div class="form-group">
                    <label id="gender_txt">Gender</label>
                    <div id="gender_select">
                        <label class="radio-inline">
                        <input type="radio" name="reg_gender" 
                        value="Male" />Male
                    </label>
                        <label class="radio-inline">
                        <input type="radio" name="reg_gender" 
                        value="Female" />Female
                    </label>
                    </div>
                </div>

                <!-- ## Register Button ## -->
                <div class="form-group">
                    <button class="btn btn-primary form-control" id="register_btn">Register</button>
                </div>

            </form>
        </div>
    </div>
    <!-- ### Main Content End ### -->
    
    <!-- ### Footer ### -->
    <?php include_once '../includes/footer-inc.php';?>
    
    <!-- ### Scripts ### -->
    <?php include_once '../includes/scripts-inc.php'; ?>
</body>

</html>
