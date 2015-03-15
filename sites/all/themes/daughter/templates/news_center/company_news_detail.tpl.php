<?php
global $base_path;

$nid = arg(3);
$news = new stdClass();
if ($nid) {
    $node = node_load($nid);
    $news->nid = $row->nid;
    $news->title = $node->title;
    $news->type = $node->type;
    $news->created = $node->created;
    $news->changed = $node->changed;
    $url = file_create_url($node->field_news_img['und'][0]['uri']);
    $url = parse_url($url);
    $news->img = $url['path'];
    $news->n_body = $node->body['und'][0]['value'];
    $news->desc = $node->field_news_desc['und'][0]['value'];
}

//dd($news);
?>
<script type="text/javascript">
    jQuery(function(){
        var h = jQuery('#news_detail_content_body').height();
        jQuery('#company_news').css('height',(200+h)+"px");
    });
</script>
<div id="company_news" >
    <div class="container">
        <div  style="padding-top: 50px;">
            <div class='news-left-menu' >
                <div  class="menubox">
                    <div  class="content_item_title" style="margin-right:40px;" > 
                        新闻中心&nbsp;&nbsp;&nbsp;
                    </div>
                    <div  class="menubox_item" > 
                        <a class="item-text" href="">公司新闻</a>
                    </div>
                    <div class="item-bar"></div>
                    <div class="menubox_item" > 
                        <a href="" class="item-text">公司动态</a>
                    </div>
                    <div class="item-bar"></div>
                    <div class="menubox_item" > 
                        <a class="item-text" href="">视频专区 </a>
                    </div>
                    <div class="item-bar"></div>
                </div>
                <div  class="news-serch-box">
                    <div class="news-serch-box-title" > 产品搜索 
                        <div class="news-serch-box-bar">|</div> information query
                    </div>
                    <div class="news-serch-box-form" >  
                        <select>
                            <option>千金静棉</option>
                            <option>千金净棒</option>
                            <option>千金医棉</option>
                            <option>千金纯棉</option>
                        </select>
                        <div class="news-serch-box-form-btn"><a href="#">搜索</a></div>
                    </div>

                </div>
            </div>
            <div class="news-middle-bar"></div>
            <div class='news-right-content'>
                <div> <h2  class="news-right-content-title" >News center</h2> </div>
                <div class="news_title_down" >
                        <div class="news_detail_title">
                            <?php print $news->title; ?>
                        </div>
                        <div class="news_detail_content">
                            <div class="news_detail_content_img">
                                <img src="<?php print $news->img ?>" 
                                     class="img-thumbnail img-responsive new_detail_img" alt="Responsive image">
                            </div>
                            <div class="news_detail_content_text">
                                <div id="news_detail_content_body" style="padding-top:10px;">
                                    <?php print nl2br($news->n_body); ?>
                                </div>
                            </div>
                        </div>
                </div>
                
            </div>
        </div>
    </div>
</div> 
