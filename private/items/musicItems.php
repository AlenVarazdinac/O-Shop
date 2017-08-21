<?php include_once '../../config.php';
include_once '../../includes/dbh-inc.php'; 
loginCheck();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ### Include Head ### -->
    <?php include_once '../../includes/head-inc.php'; ?>
</head>

<body>

    <!-- ### Navigation ### -->
    <?php include_once '../../includes/navigation-inc.php'; ?>
    <!-- ### Navigation End ### -->

    <!-- ### Main Content ### -->
    <?php include_once '../../includes/itempanel-inc.php'; ?>
    
        <!-- ### Create Panels ### -->

        <div class="container">
            <div class="row">

                <?php
              
                $panel = new Panel();

              $command = $conn->query('SELECT item.item_name, item.item_price, item_type.item_type_name FROm item RIGHT JOIN item_type ON item.item_type_id = item_type.item_type_id WHERE item_type.item_type_name="Music";');
              $command->execute();
              $results = $command->fetchAll(PDO::FETCH_OBJ);
              foreach ($results as $item) { ?>

                    <div class="col-lg-3 col-sm-6 ">

                        <?php
                $panel->createPanel($item->item_name,
                $item->item_type_name,
                $item->item_price,
                "Buy",
                "Remove");
                ?>

                    </div>
                    <?php } ?>

            </div>
        </div>

        <!-- ### Main Content End ### -->

        <!-- ### Footer ### -->
        <?php include_once '../../includes/footer-inc.php';?>

        <!-- ### Scripts ### -->
        <?php include_once '../../includes/scripts-inc.php'; ?>
</body>

</html>
