<?php
global $base_path;
$detail = "newscenter/companynews/detail/";
$news_url = $base_path.'newscenter/companynews';
$active_url = $news = $base_path.'newscenter/companyactive';
$result = db_query("SELECT nid FROM node WHERE type = :type order by created desc limit 16", array(':type' => 'news'))->fetchAll();

$news_list = array();
//$paths = array();
foreach ($result as $row) {
    $node = node_load($row->nid);
    $news = new stdClass();
    $news->type = $node->field_news_type['und'][0]['value'];
    if($news->type !=2) continue;
    $news->nid = $row->nid;
    $news->title = $node->title;
    $news->type = $node->type;
    $news->created = $node->created;
    $news->changed = $node->changed;
    $news->detail = $base_path.$detail.$row->nid;
    $url = file_create_url($node->field_news_img['und'][0]['uri']);
    $url = parse_url($url);
    $news->img = $url['path'];
    $news->n_body = $node->body['und'][0]['value'];
    $news->desc = $node->field_news_desc['und'][0]['value'];
    $news_list[] = $news;
}



function compareNewsUpdateDate($a, $b) {
    if (strtotime($a->changed) < strtotime($b->changed))
        return 1;
    if (strtotime($a->changed) > strtotime($b->changed))
        return -1;
    return 0; // equality
}

uasort($news_list, "compareNewsUpdateDate");
?>
<div id="company_news" >
    <div class="container">
        <div  style="padding-top: 50px;">
            <div class='news-left-menu' >
                <div  class="menubox">
                    <div  class="content_item_title" style="margin-right:40px;" > 
                        新闻中心&nbsp;&nbsp;&nbsp;
                    </div>
                  <div  class="menubox_item" > 
                        <a class="item-text" href="<?php print $news_url;?>">公司新闻</a>
                    </div>
                    <div class="item-bar"></div>
                    <div class="menubox_item" > 
                        <a href="<?php print $active_url;?>" class="item-text">公司动态</a>
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
                    <ul style="list-style-type:none;padding-left: 0px;margin-top: 0px;">
                            <?php $idx = 0;
                            $length = count($news_list);
                            foreach ($news_list as $news): ?>
                            <?php if ($idx == 0): ?>
                                <li class="news_item_first" >
                                    <div class="news_first_title">
                                        <span class="news_first_title_hot">Hot</span>
                                        <?php print $news->title; ?>
                                    </div>
                                    <div class="news_first_content">
                                        <div class="news_first_content_img">
                                            <img src="<?php print $news->img ?>" class="img-thumbnail img-responsive new_small_img" alt="Responsive image">
                                        </div>
                                        <div class="news_first_content_text">
                                            <div>
                                                <?php print nl2br($news->desc); ?>
                                            </div>
                                            <div style="float:right;">
                                                <a class="news_link" href="<?php print $news->detail;?>">
                                                    显示全文</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="clear:both;"></div>
                                </li>
                            <?php else: ?>
                                <?php if ($idx == $length - 1): ?>
                                     <li  class="news_item_last" >
                                    <?php else: ?>
                                        <li  class="news_item" >
                                    <?php endif; ?>
                                        <a class="news_link" href="<?php print $news->detail;?>">
                                        <?php print $news->title; ?></a>
                                    <span style="float:right;">[ <?php print date("Y-m-d", $news->created); ?> ]</span></li>
                                <?php endif; ?>
                                <?php $idx++;  endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> 
