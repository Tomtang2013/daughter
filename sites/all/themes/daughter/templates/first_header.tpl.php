<?php 

?>
<nav class="navbar navbar-default" role="navigation" id="first_header">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <img style='width:157px;height:78px;'
            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAACMCAYAAACuwEE+AAADHklEQVR4Xu3XQU7qYABGUZ2yLpbNmhgy1WDSiKTQXi2VkvOG8kl99z9p4f14PH68+afAzALvwMwsZfZVABgQUgFgUi5jYBhIBYBJuYyBYSAVACblMgaGgVQAmJTLGBgGUgFgUi5jYBhIBYBJuYyBYSAVACblMgaGgVQAmJTLGBgGUgFgUi5jYBhIBYBJuYyBYSAVACblMgaGgVQAmJTLGBgGUgFgUi5jYBhIBYBJuYyBYSAVACblMgaGgVQAmJTLGBgGUgFgUi5jYBhIBYBJuYyBYSAVACblMgaGgVQAmJTLGBgGUgFgUi5jYBhIBYBJuYyBYSAVACblMgaGgVQAmJTLGBgGUgFgUi5jYBhIBYBJuYyBYSAVACblMgaGgVQAmJTLGBgGUgFgUi5jYBhIBYBJuYyBYSAVACblMgaGgVQAmJTLePNgDofD1ynu9/vR0xx7ffjZ8Au3fnfsDde+3rMR3TSYy4MfO/Sx168PfArA5YGtfb1nw3L+ezYN5vwfuHXg55/vdru30+n04w70FzD/cb1nQwPMxSNtwHQJ7fpxtzZQYBYucO8zyvkxNXVHGXt97M40/NlLX2/hHA9/u5e+w1zXmwPo3mNn6pH02+s9/JQXvMDLgrl1R5hzx6l3mLEPxsOH8KnrLXiWq7zVpsHM+Xp875vS9dfqqc8wS19vlRNe+CKbBrNwC283owAwMyKZfBcAhoZUAJiUyxgYBlIBYFIuY2AYSAWASbmMgWEgFQAm5TIGhoFUAJiUyxgYBlIBYFIuY2AYSAWASbmMgWEgFQAm5TIGhoFUAJiUyxgYBlIBYFIuY2AYSAWASbmMgWEgFQAm5TIGhoFUAJiUyxgYBlIBYFIuY2AYSAWASbmMgWEgFQAm5TIGhoFUAJiUyxgYBlIBYFIuY2AYSAWASbmMgWEgFQAm5TIGhoFUAJiUyxgYBlIBYFIuY2AYSAWASbmMgWEgFQAm5TIGhoFUAJiUyxgYBlIBYFIuY2AYSAWASbmMgWEgFQAm5TIGhoFUAJiUyxgYBlIBYFIuY2AYSAWASbmMgWEgFQAm5TL+BPsW85cqjddyAAAAAElFTkSuQmCC" class=" img-responsive img-rounded" alt="Responsive image">
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-navbar-collapse"  >
        <ul class="nav navbar-nav navbar-right  col-lg-8" >
            <li><a href="#">首页</a></li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">公司简介</b></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php print $base_path?>companyprofile">千金药业</a></li>
                    <li><a href="<?php print $base_path?>companyprofile">千金净雅</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php print $base_path?>companyprofile">企业风采</a></li>
                    <li><a href="<?php print $base_path?>companyprofile">企业荣誉</a></li>
                </ul>
            </li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">新闻中心</b></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php print $base_path?>newscenter/companynews">公司新闻</a></li>
                    <li><a href="#">公司动态</a></li>
                    <li><a href="#">视频专区</a></li>
                </ul>
            </li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">千金棉介绍</b></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">千金药棉</a></li>
                    <li><a href="#">千金净棉</a></li>
                    <li><a href="#">千金医棉</a></li>
                    <li><a href="#">千金纯棉</a></li>
                </ul>
            </li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">产品专柜</b></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">千金药棉</a></li>
                    <li><a href="#">千金净棉</a></li>
                    <li><a href="#">千金医棉</a></li>
                    <li><a href="#">千金纯棉</a></li>
                </ul>
            </li>
            <li><a href="#">千金俱乐部</a></li>
             <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">健康咨询</b></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php print $base_path?>qanda">专家答疑</a></li>
                    <li><a href="#">健康分享</a></li>
                    <li><a href="#">千金小知识</a></li>
                </ul>
            </li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">立即购买</b></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">微薄</a></li>
                    <li><a href="#">微信</a></li>
                    <li><a href="#">淘宝</a></li>
                </ul>
            </li>
            <li><a href="#">联系我们</a></li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>