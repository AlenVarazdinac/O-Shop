<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo $appPath; ?>"><?php echo $appName; ?></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo $appPath; ?>">Home <span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Items <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Games</a></li>
            <li><a href="#">Music</a></li>
            <li><a href="#">Movies</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Create item</a></li>
          </ul>
        </li>
        <li><a href="<?php echo $appPath; ?>public/aboutus.php">About us</a></li>
      </ul>
      <form class="navbar-form navbar-right">
        <a href="<?php echo $appPath; ?>login.php" type="submit" class="btn btn-default">Log in</a>
        <a href="<?php echo $appPath; ?>register.php" type="submit" class="btn btn-default">Register</a>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
