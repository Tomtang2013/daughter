<?php
$block_contact_us_content = block_load('block', '3');
$block_contact_us_content_output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block_contact_us_content))));
$theme = drupal_get_path('theme', 'daughter');
?>
<div id="contact_us" >
    <div class="container" style="clear:both;">
        <div class="contact_us_top">
            <div class="content_item_title">
                人才战略
            </div>
        </div>
        <div class="contact_us_left ">
            <div class="contact_us_left_top">
                <div class="contact_us_left_top_header">
                    联系我们
                </div>
                <div class="contact_us_left_top_content">
                    <div  class="contact_us_left_top_content_item"><span class="blue-rect"></span><a href="mailto:qianjinjingya@163.com">人才战略</a></div>
                    <div  class="contact_us_left_top_content_item"><span class="blue-rect"></span><a href="mailto:qianjinjingya@163.com">联系我们</a></div>
                    <div  class="contact_us_left_top_content_item"><span class="blue-rect"></span><a href="mailto:qianjinjingya@163.com">投诉意见</a></div>
                </div>
            </div>
            <div class="contact_us_left_bottom">
                <div class="contact_us_left_top">
                <div class="contact_us_left_top_header">
                    联系我们
                </div>
                <div class="contact_us_left_bottom_content">
                    <p >南千金卫生用品有限公司</p>
                    <p >电   话：0731 - 22492261</p>
                    <p >地   址：湖南省株洲市荷塘区金钩路15号千金药业</p>
                    <p >服务热线：0731 - 22492261</p>
                    <p >传真热线：0731 - 22492261</p>
                    <p >公司主页：www.qjjaya.com</p>
                    <p >官方微博：jaya 千金静雅</p>
                    <p >官方微信：qjjaya20110622</p>
                    <p >邮   件：qianjinjingya@163.com</p>
                </div>
            </div>
            </div>
        </div>

        <div class="contact_us_right">
            <div class="contact_us_right_top">
                <div class="contact_us_right_content">
                    <?php print $block_contact_us_content_output; ?>
                </div>
            </div>
            <div class="contact_us_right_bottom">
                <div class="contact_us_right_bottom_title"></div>
                <div>
                    <div class="contact_us_right_bottom_mm"> </div>
                    <div class="contact_us_right_bottom_content">
                        <div style="color:#0593D7;font-size: 24px;margin:10px 20px 20px 0px;">
                            湖南千金卫生用品有限公司
                        </div>
                        <div >
                            <div class="contact_us_right_bottom_content_item">电   话：0731 - 22492261</div>
                            <div class="contact_us_right_bottom_content_item">地   址：湖南省株洲市荷塘区金钩路15号千金药业</div>
                            <div style="float:left;">
                                <div class="contact_us_right_bottom_content_item">服务热线：0731 - 22492261</div>
                                <div class="contact_us_right_bottom_content_item">传真热线：0731 - 22492261</div>
                                <div class="contact_us_right_bottom_content_item">公司主页：www.qjjaya.com</div>
                                <div class="contact_us_right_bottom_content_item">官方微博：jaya 千金静雅</div>
                                <div class="contact_us_right_bottom_content_item">官方微信：qjjaya20110622</div>
                                <div class="contact_us_right_bottom_content_item">邮   件：qianjinjingya@163.com</div>
                            </div>
                            <div style="float:left;">
                                <img src="<?php print $theme ?>/images/contactus/contact_r_erwm.jpg" 
                                     style="margin:20px 20px 20px 20px;"
                                     class="img-thumbnail img-responsive " alt="Responsive image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div> 
