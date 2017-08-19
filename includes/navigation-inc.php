<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
            <a class="navbar-brand" href="<?php echo $appPath; ?>">
                <?php echo $appName; ?>
            </a>
        </div>

        <!-- ## Navigation Left Side ## -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo $appPath; ?>">Home <span class="sr-only">(current)</span></a></li>
                <?php if(isset($_SESSION["logged"])): ?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Items <span class="caret"></span></a>

                    <ul class="dropdown-menu">
                        <li><a href="<?php echo $appPath;?>private/items/gameItems.php">Games</a></li>
                        <li><a href="<?php echo $appPath;?>private/items/musicItems.php">Music</a></li>
                        <li><a href="<?php echo $appPath;?>private/items/movieItems.php">Movies</a></li>

                        <?php 
            if (isset($_SESSION["logged"]) && 
                $_SESSION["logged"]->user_rights===1): ?>
                        <li role="separator" class="divider"></li>

                        <li><a href="<?php echo $appPath;?>private/items/createItem.php">Create item</a></li>
                        <?php endif;?>

                    </ul>

                </li>
                <?php endif; ?>
                <li><a href="<?php echo $appPath; ?>public/aboutus.php">About us</a></li>
            </ul>

            <!-- ## Navigation Right Side ## -->
            <ul class="nav navbar-nav navbar-right">

                <!-- ## If Not Logged In ## -->
                <?php if(!isset($_SESSION["logged"])): ?>

                <form class="nav navbar-form">

                    <a href="<?php echo $appPath; ?>public/login.php" type="submit" class="btn btn-default">Log in</a>
                    <a href="<?php echo $appPath; ?>public/register.php" type="submit" class="btn btn-default">Register</a>

                </form>

                <!-- ## If Logged In ## -->
                <?php else: ?>

                <li class="dropdown">
                    <!-- Set name in navigation -->
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <?php echo $_SESSION["logged"]->user_name;?>
                    <span class="caret"></span></a>
                    
                    <ul class="dropdown-menu">
                        <li><a href="#">Change password</a></li>
                        
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo $appPath; ?>public/logout.php" type="submit" class="btn btn-danger">Log out</a></li>
                    </ul>
                </li>


                <?php endif; ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
