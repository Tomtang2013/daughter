<?php 
    $theme = drupal_get_path('theme','daughter');
    
    $block_qianjinyaoye = block_load('block', '1');
    $block_qianjinyaoye_output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block_qianjinyaoye))));
    
    $block_qianjinjingya = block_load('block', '2');
    $block_qianjinjingya_output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block_qianjinjingya))));

    
?>
<div id="company_profile" >
    <div class="container">
        <div class='' >
            <div class=' content_item_title'  style="">About/千金药业</div>
            <div class='company_item_content' style='height:500px;border: 1px solid;'>
                
                <?php print $block_qianjinyaoye_output;?>
            </div>
        </div>
        <div class='' style="">
             <div class='content_item_title' style="">About/千金静雅</div>
             <div class='company_item_content' style='height:500px;border: 1px solid;'>
                  <?php print $block_qianjinjingya_output;?>
             </div>
        </div>
         <div class='' style="">
            <div class='content_item_title' style="">About/企业风采</div>
            <div class='company_item_content' style='height:500px;border: 1px solid;'></div>
        </div>
         <div class='' style="">
           <div class='content_item_title' style="">About/企业荣誉</div>
           <div class='company_item_rongyu' >
               <img style="margin-left:40px;" src="<?php print $theme?>/images/companyInfo/ry1.png" class="img-thumbnail img-responsive company_item_rongyu_img" alt="Responsive image">
               <img src="<?php print $theme?>/images/companyInfo/ry2.png" class="img-thumbnail img-responsive company_item_rongyu_img" alt="Responsive image">
               <img src="<?php print $theme?>/images/companyInfo/ry3.png" class="img-thumbnail img-responsive company_item_rongyu_img" alt="Responsive image">
               <img src="<?php print $theme?>/images/companyInfo/ry4.png" class="img-thumbnail img-responsive company_item_rongyu_img" alt="Responsive image">
               <img src="<?php print $theme?>/images/companyInfo/ry5.png" class="img-thumbnail img-responsive company_item_rongyu_img" alt="Responsive image">
               
           </div>
        </div>
    </div>
</div> 
