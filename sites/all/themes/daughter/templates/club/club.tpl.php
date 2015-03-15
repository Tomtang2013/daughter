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
                    <img style="width:610px;height: 176px;" 
                         src="<?php print $theme?>/images/club/club_l_bottom.jpg" class="img-responsive company_item_rongyu_img" alt="Responsive image">
                </div> 
            </div> 
            <div class="club_content_top_right" >
                <div class="content_item_title">
                    <SPAN>会员提问</SPAN>
                </div>
				<div class="club_qa">
					<div class="club_qa_title">
						<img style="width:45px;height:45px" src='<?php print $theme?>/images/club/club_r_logo.png'>
						Jaya 小秘书
					</div>
					<div class="club_qa_q">
						<span>Q</span>：女性免疫力低的经期究竟如何才能少受细菌的侵扰和破坏呢？
					</div>
				</div>
				<div class="club_qa">
					<div class="club_qa_title">
						<img style="width:45px;height:45px" src='<?php print $theme?>/images/club/club_r_zs.jpg'>
						小千金jaya
					</div>
					<div class="club_qa_q">
						<span>Q</span>：千金净雅全面进驻沃尔玛具体在什么时候？
					</div>
				</div>
				<div class="club_qa">
					<div class="club_qa_title">
						<img style="width:45px;height:45px" src='<?php print $theme?>/images/club/club_r_logo.png'>
						Jaya 小秘书
					</div>
					<div class="club_qa_q">
						<span>Q</span>：千金药业为什么要开发千金净雅妇科专用棉巾？
					</div>
				</div>
				<div class="club_qa">
					<div class="club_qa_title">
						<img style="width:45px;height:45px" src='<?php print $theme?>/images/club/club_r_zs.jpg'>
						小千金jaya
					</div>
					<div class="club_qa_q">
						<span>Q</span>：导致妇科疾病的主要原因是什么？
					</div>
				</div>
				<div class="club_qa_more"><a href='/daughter/qanda'>More>> </a> </div>
            </div> 
        </div>
        <div class="club_content_bottom">
             <div class="club_content_bottom_left" >
                <div class="content_item_title">
                    <span>最新活动</span>
                </div>
				<div class="club_zx_hd">
					<h4>2015年3月8日</h4>
					<h3><a href="/daughter/newscenter/companynews">欢度三八，线下聚会</a></h3>
				</div>
				<div class="club_zx_hd_more"><a href='/daughter/newscenter/companynews'>More>> </a> </div>
            </div> 
            <div class="club_content_bottom_right">
				<embed style="margin-left: 20px;" src="http://player.youku.com/player.php/sid/XOTA2OTY2OTYw/v.swf" allowFullScreen="true" quality="high" width="650" height="450" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>
			</div> 
			<div style="clear:both;"></div>
        </div> 
		<div style="clear:both;"></div>
    </div> 
</div> 
