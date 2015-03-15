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
                     class=" img-responsive brand_left_img" alt="Responsive image">
            </div>

        </div>
        <div class="brand-right" >
            <div  class="brand-right-content" style="">
                <div  style="">
                    <div class="brand_logo"></div>
                    <div class="brand_title brand_title_yaomian">千金药棉</div>
                </div>
                <div class="brand_qianjinyaomian_content">
                    <?php print $block_brand_qianjinyaomian_output; ?>
                </div>
                <div class="brand-bottom" >
                </div>
            </div>

            <div  class="brand-right-img brand_right_img" >

            </div>
        </div>
    </div>
</div> 
