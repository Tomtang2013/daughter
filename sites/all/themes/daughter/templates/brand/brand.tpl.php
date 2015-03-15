<?php
    $theme = drupal_get_path('theme', 'daughter');
    
    $block_brand_qianjinyaomian = block_load('block', '5');
    $block_brand_qianjinyaomian_output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block_brand_qianjinyaomian))));
    
?>
<div id="company_profile" >
    <div class="container">
        <div class="brand-left">
            <div class="brand-left-img">
                <img src="<?php print $theme ?>/images/home/home_yaomian.jpg" 
                     class=" img-responsive company_item_rongyu_img" alt="Responsive image">
             </div>
        </div>
        <div class="brand-right" >
               
                <div  class="brand-right-content" style="">
                     <div  style="height:100px;background-color:green;">header</div>
                     <div class="brand_qianjinyaomian_content">
                        <?php print $block_brand_qianjinyaomian_output;?>
                     </div>
                </div>
                <div  class="brand-right-img" style="height:400px;background-color:yellow;">
                
                </div>
        </div>
        
        <div class="brand-right" >
            
        </div>
        <div class="brand-bottom" style="height:100px;background-color:pink;">
            page nav
        </div>

    </div>
</div> 
