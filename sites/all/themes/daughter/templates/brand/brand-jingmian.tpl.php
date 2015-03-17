<?php
global $base_path;
$brand_yaomian = $base_path.'brand/yaomian';
$brand_jingmian = $base_path.'brand/jingmian';
$brand_yimian = $base_path.'brand/yimian';
$brand_chumian = $base_path.'brand/chunmian';


$theme = drupal_get_path('theme', 'daughter');

$block_brand_qianjinjingmian = block_load('block', '7');
$block_brand_qianjinjingmian_output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block_brand_qianjinjingmian))));
?>
<div id="company_profile" >
    <div class="container">
        <div class="brand-left">
            <div class="brand-left-img">
                <img src="<?php print $base_path.$theme ?>/images/home/home_jingmian.jpg" 
                     class=" img-responsive brand_left_img" alt="Responsive image">
            </div>

        </div>
        <div class="brand-right" >
            <div  class="brand-right-content" style="">
                <div  style="">
                    <div class="brand_logo brand_logo_jingmian"></div>
                    <div class="brand_title brand_title_jingmian">千金净棉</div>
                </div>
                <div class="brand_qianjinyaomian_content">
                    <?php print $block_brand_qianjinjingmian_output; ?>
                </div>
                 <div class="brand-bottom" >
                    <a href="<?php print $brand_yaomian;?>" class="brand-bottom-item"></a >
                    <a href="<?php print $brand_jingmian;?>" class="brand-bottom-item"></a >
                    <a href="<?php print $brand_yimian;?>" class="brand-bottom-item"></a >
                    <a href="<?php print $brand_chumian;?>" class="brand-bottom-item"></a >
                </div>
            </div>

            <div  class="brand-right-img brand_right_img" >

            </div>
        </div>
    </div>
</div> 
