<?php include_once '../config.php';
include_once '../includes/dbh-inc.php';
loginCheck();
?>
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

    <div class="container">
        <div class="row">


            <div class="chart-container responsive" id="doughnut_chart">
                <canvas id="chart"></canvas>
            </div>


        </div>
    </div>

    <!-- ### Main Content End ### -->

    <!-- ### Footer ### -->
    <?php include_once '../includes/footer-inc.php';?>

    <!-- ### Scripts ### -->
    <?php include_once '../includes/scripts-inc.php'; ?>
</body>

</html>
