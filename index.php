<?php include_once 'config.php';
include_once 'includes/dbh-inc.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ### Include Head ### -->
    <?php include_once 'includes/head-inc.php'; ?>
</head>

<body>

    <!-- ### Navigation ### -->
    <?php include_once 'includes/navigation-inc.php'; ?>
    <!-- ### Navigation End ### -->

    <!-- ### Main Content ### -->
    <?php
        include_once 'includes/typepanel-inc.php';
        $typePanel = new TypePanel();
        $command = $conn->query("SELECT * FROM item_type");
        $command->execute();
        $results = $command->fetchAll(PDO::FETCH_OBJ);
    ?>
   
    <div class="container">
        <div class="row">
            <h3>Browse for...</h3>
        </div>
        
    <!-- ### Main Panels ### -->
        <div class="row">
            <?php
            foreach($results as $item_type) {
                $typePanel->createTypePanel(
                $item_type->item_type_name,
                $item_type->item_type_img,
                $item_type->item_type_link);  
            }
            ?>
        </div>
    </div>
    <!-- ### Main Panels End ### -->

    <!-- ### Main Content End ### -->

    <!-- ### Footer ### -->
    <?php include_once 'includes/footer-inc.php';?>

    <!-- ### Scripts ### -->
    <?php include_once 'includes/scripts-inc.php'; ?>
</body>

</html>
