<?php

class TypePanel {
    public $typePanelName;
    public $typePanelImg;
    public $typePanelLink;

    public function createTypePanel($typePanelName, $typePanelImg, $typePanelLink) { ?>
    <div id="type_panel" class="col-lg-4 col-sm-6">

        <div class="panel panel-primary" id="type_panel_st">
           
           <!-- ## Panel Title ## -->
            <div class="panel-heading">
                <h4 class="panel-title"><?php echo $typePanelName;?></h4>
            </div>
            
            <!-- ## Panel Body ## -->
            <div class="panel-body">
                <img src="<?php echo $typePanelImg;?>" id="type_img" class="img-responsive center-block img-rounded" alt="type_img" />
            </div>
            
            <!-- ## Panel Button ## -->
            <div class="panel-footer">
                <a href="<?php echo $typePanelLink;?>" type="submit" class="btn btn-primary center-block">Browse</a>
            </div>
        </div>
        
    </div>
        
    <?php
    } 
    
}?>