<?php
    $theme = drupal_get_path('theme', 'daughter');
    
    $block_club = block_load('block', '4');
    $block_club_output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block_club))));
    
?>
<div id="club" >
    <div class="club_content" >
        <div class="club_content_top">
            <div class="club_content_top_left" >
                <div class="content_item_title">
                    关于千金俱乐部
                </div>
                <div class="club_content_top_left_content">
                     <?php print $block_club_output;?>
                </div>
                <div class="club_content_top_left_img" >
                    <img style="width:661px;height: 176px;" 
                         src="<?php print $theme?>/images/club/club_l_bottom.jpg" class="img-responsive company_item_rongyu_img" alt="Responsive image">
                </div> 
            </div> 
            <div class="club_content_top_right" >
                <div class="content_item_title">
                    会员提问
                </div>
            </div> 
        </div>
        <div class="club_content_bottom">
             <div class="club_content_bottom_left" >
                <div class="content_item_title">
                    最新活动
                </div>
            </div> 
            <div class="club_content_bottom_right" style="background-color:#cccccc;">
                
            </div> 
        </div> 
    </div> 
</div> 
