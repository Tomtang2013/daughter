<?php
//header
?>
<nav class="navbar navbar-default header" role="navigation" id="header">
    <!-- Brand and toggle get grouped for better mobile display -->
    <!-- toolbar start -->
    <div class=" toolbar ">
        <div id="nav-menu" class="col-md-12">
            <ul class="menu">
                <li class="stmenu"><h3><a href="<?php print $base_path ?>" class="xialaguang"><span>首页</br>Home</span></a></h3></li>
                <li class="stmenu">
                    <h3><a href="#" class="xialaguang"><span>公司简介</br>About</span></a></h3>    
                    <ul class="children">    
                        <li><h3><a href="<?php print $base_path ?>companyprofile"><span>千金药业</span></a></h3></li>
                        <li><h3><a href="<?php print $base_path ?>companyprofile"><span>千金雅净</span></a></h3></li>
                        <li><h3><a href="<?php print $base_path ?>companyprofile"><span>企业风采</span></a></h3></li>
                        <li><h3><a href="<?php print $base_path ?>companyprofile"><span>企业荣誉</span></a></h3></li>
                    </ul>
                </li>
                <li class="stmenu">
                    <h3><a href="#" class="xialaguang"><span>新闻中心</br>News</span></a></h3>    
                    <ul class="children">    
                        <li><h3><a href="<?php print $base_path ?>newscenter/companynews"><span>公司新闻</span></a></h3></li>
                        <li><h3><a href="#"><span>公司动态</span></a></h3></li>
                        <li><h3><a href="#"><span>视频专区</span></a></h3></li>
                    </ul>
                </li>
                <li class="stmenu">
                    <h3><a href="<?php print $base_path ?>brand" class="xialaguang"><span>千金棉介绍</br>Brand</span></a></h3>    
                    <ul class="children">    
                        <li><h3><a href="#"><span>千金药棉</span></a></h3></li>
                        <li><h3><a href="#"><span>千金净棒</span></a></h3></li>
                        <li><h3><a href="#"><span>千金医棉</span></a></h3></li>
                        <li><h3><a href="#"><span>千金纯棉</span></a></h3></li>
                    </ul>
                </li>
                <li class="stmenu">
                    <h3><a href="#" class="xialaguang"><span>产品专柜</br>Product</span></a></h3>   
                    <ul class="children">    
                        <li><h3><a href="#"><span>千金药棉</span></a></h3></li>
                        <li><h3><a href="#"><span>千金净棒</span></a></h3></li>
                        <li><h3><a href="#"><span>千金医棉</span></a></h3></li>
                        <li><h3><a href="#"><span>千金纯棉</span></a></h3></li>
                    </ul>
                </li>
                <li class="stmenu"><h3><a href="#" class="xialaguang"><span>千金俱乐部</br>Club</span></a></h3></li>
                <li class="stmenu">
                    <h3><a href="<?php print $base_path ?>qanda" class="xialaguang"><span>健康咨询</br>QAQ</span></a></h3>   
                    <ul class="children">    
                        <li><h3><a href="#"><span>专家答疑</span></a></h3></li>
                        <li><h3><a href="#"><span>健康分享</span></a></h3></li>
                        <li><h3><a href="#"><span>千金小分享</span></a></h3></li>
                    </ul>
                </li>
                <li class="stmenu">
                    <h3><a href="#" class="xialaguang"><span>立即购买</br>Mall</span></a></h3>   
                    <ul class="children">    
                        <li><h3><a href="#"><span>QQ个性签名</span></a></h3></li>
                        <li><h3><a href="#"><span>QQ留言代码</span></a></h3></li>
                    </ul>
                </li>
                <li class="stmenu"><h3><a href="<?php print $base_path ?>contactus" class="xialaguang"><span>联系我们</br>Contact</span></a></h3></li>
            </ul>
        </div>
    </div>

    <!-- /.navbar-collapse -->
    <script type="text/javascript">
        jQuery('#nav-menu .menu > li').hover(function () {
            jQuery(this).find('.children').animate({opacity: 'show', height: 'show'}, 200);
            jQuery(this).find('.xialaguang').addClass('navhover');
        }, function () {
            jQuery('.children').stop(true, true).hide();
            jQuery('.xialaguang').removeClass('navhover');
        });
    </script>
</nav>