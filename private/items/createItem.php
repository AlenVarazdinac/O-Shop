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
    <!-- ### Create Item Panel ### -->
    <div class="container" id="create_item_panel">
        <div class="row col-md-6 col-md-offset-3">
            <form method="POST" class="form-horizontal jumbotron" action="itemCreating.php">

                <!-- ## Legend ## -->
                <div class="form-group">
                    <legend class="text-center">Create item</legend>
                </div>

                <!-- ## Item Name ## -->
                <div class="form-group">
                    <label class="control-label" for="item_name">Item name</label>
                    <input type="text" class="form-control" name="item_name" id="item_name" placeholder="Enter item name" />
                </div>

                <!-- ## Item Price ## -->
                <div class="form-group">
                    <label class="control-label" for="item_price">Item price</label>
                    <div class="input-group">
                        <span class="input-group-addon">$</span>
                        <input type="number" step="0.01" min="0.00" class="form-control" name="item_price" id="item_price" placeholder="Enter item price" />
                    </div>
                </div>

                <!-- ## Item Type ## -->
                <div class="form-group">
                    <label class="control-label" for="item_type">Item type</label>
                    <select class="form-control" id="item_type" name="item_type">
                        <option value="none">None</option>
                        <option value="game">Game</option>
                        <option value="music">Music</option>
                        <option value="movie">Movie</option>
                   </select>
                </div>

                <!-- ## Create Button ## -->
                <div class="form-group">
                    <button class="btn btn-primary form-control" id="create_item_btn">Create item</button>
                </div>

            </form>
        </div>
    </div>
    <!-- ### Main Content End ### 

    <!-- ### Scripts ### -->
    <?php include_once '../../includes/scripts-inc.php'; ?>
</body>

</html>
