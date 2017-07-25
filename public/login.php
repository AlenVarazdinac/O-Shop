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
    
    <?php
      if (isset($_GET["badlogin"])) {
          echo "Wrong e-mail or password!";
      }
      if (isset($_GET["norights"])) {
          echo "Log in first!";
      }
      if (isset($_GET["loggedout"])) {
          echo "You have successfully logged out!";
      }
      
    ?>
    
    
    <!-- ### Login Panel ### -->
    <div class="container" id="login_panel">
        <div class="row col-md-6 col-md-offset-3">
            <form method="POST" class="form-horizontal jumbotron" action="../authorize.php">

                <!-- ## Legend ## -->
                <div class="form-group">
                    <legend class="text-center">Log in</legend>
                </div>

                <!-- ## User Email ## -->
                <div class="form-group">
                    <label class="control-label" for="login_email">E-mail</label>
                    <input type="email" class="form-control" name="login_email" id="login_email" placeholder="Enter your e-mail" />
                </div>

                <!-- ## User Password ## -->
                <div class="form-group">
                    <label class="control-label" for="login_pw">Password</label>
                    <input type="password" class="form-control" name="login_pw" id="login_pw" placeholder="Enter your password" />
                </div>

                <!-- ## Login Button ## -->
                <div class="form-group">
                    <button class="btn btn-primary form-control" id="login_btn">Log in</button>
                </div>

            </form>
        </div>
    </div>
    <!-- ### Main Content End ### -->

    <!-- ### Scripts ### -->
    <?php include_once '../includes/scripts-inc.php'; ?>
  </body>
</html>
