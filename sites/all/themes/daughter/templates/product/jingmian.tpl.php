<?php 
global $base_path;

$result = db_query("SELECT nid FROM node WHERE type = :type order by created desc limit 16",
        array(':type' => 'qianjinyaomian'))->fetchAll();

$items_list = array();

foreach ($result as $row) {
    $node = node_load($row->nid);
    $items = new stdClass();
    $items->type = $node->field_type['und'][0]['value'];
    if($items->type != 1) continue;
    $items->nid = $row->nid;
    $items->title = $node->title;
//    $items->type = $node->type;
    $items->created = $node->created;
    $items->changed = $node->changed;
    $url = file_create_url($node->field_img['und'][0]['uri']);
    $url = parse_url($url);
    $items->img = $url['path'];
    $items->n_body = $node->body['und'][0]['value'];
    $items->price = $node->field_jiage['und'][0]['value'];
    $items->desc = $node->field_desc['und'][0]['value'];
    $items->feature = $node->field_feature['und'][0]['value'];
    $items_list[] = $items;
}

$idx = 1;
$items_pair = array();
$items_pairs = array();
foreach($items_list as $item){
    $items_pair[] = $item;
//    dd($item);
    if($idx%2==0){
        $items_pairs[] = $items_pair;
        $items_pair = array();
    }
    $idx++;
}
////
$items_pair = array();
foreach($items_list as $item){
    $items_pair[] = $item;
//    dd($item);
    if($idx%2==0){
        $items_pairs[] = $items_pair;
        $items_pair = array();
    }
    $idx++;
}

$items_pair = array();
foreach($items_list as $item){
    $items_pair[] = $item;
//    dd($item);
    if($idx%2==0){
        $items_pairs[] = $items_pair;
        $items_pair = array();
    }
    $idx++;
}
//dd(count($items_pairs));

?>
<div id="jingmian" >
    <div class="jingmian">
       <div class="jingmian-left"> </div>
       <div class="jingmian-right">
           <ul style="list-style-type:none;padding-left: 0px;margin-top: 0px;">
                <?php $idx = 0;
                    foreach ($items_pairs as $items_pair): ?>
                    <li>
                        <ul class="jingmian-row">
                            <?php  foreach ($items_pair as $item):  ?>
                            <li class="jingmian-item" >
                                <div>
                                     <img src="<?php print $item->img ?>"
                                          class="img-thumbnail img-responsive jingmian_item_img" 
                                          alt="Responsive image">
                                </div>
                                <div class="jingmian-item-main">
                                    <div class="jingmian-item-desc">
                                        <?php print $item->desc; ?>
                                        <span class="jingmian-item-price"><?php print $item->price; ?></span>
                                    </div>
                                    <div  class="jingmian-item-feature">
                                        <div class="jingmian-item-icon" style="float:left;" ></div>
                                        <div  style="float:left;padding-left:5px;">
                                            <?php print $item->feature; ?>
                                        </div>
                                        <div style="clear:both;" ></div>
                                    </div>
                                    <div class="jingmian-item-body">
                                        <?php print $item->n_body; ?>
                                    </div>
                                </div>
                            </li>
                            <?php  endforeach; ?>
                        </ul>
                    </li>
                <?php $idx++;  endforeach; ?>
           </ul>
       </div>
       <div style="clear:both;"></div>
    </div>
</div> 