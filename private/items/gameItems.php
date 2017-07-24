<?php include_once '../../config.php';
include_once '../../includes/dbh-inc.php'; ?>
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
    <?php
      $panel = new Panel();
    ?>
      <!-- ### Create Panels ### -->

        <div class="container">
          <div class="row">

              <?php
              $command = $conn->query("SELECT * FROM item WHERE item_type='Game';");
              $command->execute();
              $results = $command->fetchAll(PDO::FETCH_OBJ);
              foreach ($results as $item) { ?>

                <div class="col-lg-3 col-sm-6 ">

                <?php
                $panel->createPanel($item->item_name,
                $item->item_type,
                $item->item_price,
                "Buy");
                ?>

              </div>
              <?php } ?>

          </div>
        </div>

    <!-- ### Main Content End ### -->

    <!-- ### Scripts ### -->
    <?php include_once '../../includes/scripts-inc.php'; ?>
  </body>
</html>
