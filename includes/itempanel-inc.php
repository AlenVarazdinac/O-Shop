<?php

class Panel {
  public $panelName;
  public $panelType;
  public $panelPrice;
  public $panelButton;
        
public function createPanel($panelName, $panelType, $panelPrice, $panelButton) { ?>

    <div class="panel panel-primary" id="product_panel">
        <!-- ## Panel Title ## -->
        <div class="panel-heading">
            <h4 class="panel-title">
                <?php echo $panelName;?>
            </h4>
        </div>

        <!-- ## Panel Description ## -->
        <div class="panel-body">
            <p>Type:
                <?php echo $panelType;?>
            </p>
            <p>Price: $
                <?php echo $panelPrice;?>
            </p>
        </div>

        <!-- ## Panel Button ## -->
        <div class="panel-footer">
            <a href="#" type="submit" class="btn btn-primary center-block">
                <?php echo $panelButton; ?>
            </a>
        </div>
    </div>

    <?php }
}

?>
