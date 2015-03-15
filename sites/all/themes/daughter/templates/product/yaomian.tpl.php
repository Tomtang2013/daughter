<?php 
global $base_path;

$result = db_query("SELECT nid FROM node WHERE type = :type order by created desc limit 16",
        array(':type' => 'qianjinyaomian'))->fetchAll();

$items_list = array();

foreach ($result as $row) {
    $node = node_load($row->nid);
    $items = new stdClass();
    $items->type = $node->field_type['und'][0]['value'];
    if($items->type != 2) continue;
    $items->nid = $row->nid;
    $items->title = $node->title;
//    $items->type = $node->type;
    $items->created = $node->created;
    $items->changed = $node->changed;
    $url = file_create_url($node->field_img['und'][0]['uri']);
    $url = parse_url($url);
    
    
    $items->img = $url['path'];
    $items->n_body = $node->body['und'][0]['value'];
    $items->price = $node->field_price['und'][0]['value'];
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

//dd(count($items_pairs));

?>
<div id="yaomian" >
    <div class="yaomian">
       <div class="yaomian-left"> </div>
       <div class="yaomian-right">
           <ul style="list-style-type:none;padding-left: 0px;margin-top: 0px;">
                <?php $idx = 0;
                    foreach ($items_pairs as $items_pair): ?>
                    <li>
                        <ul class="yaomian-row">
                            <?php  foreach ($items_pair as $item):  ?>
                            <li class="yaomian-item" >
                                <div>
                                     <img src="<?php print $item->img ?>"
                                          class="img-thumbnail img-responsive yaomian_item_img" 
                                          alt="Responsive image">
                                </div>
                                <div class="yaomian-item-main">
                                    <div class="yaomian-item-desc">
                                        <?php print $item->desc; ?>
                                        <span class="yaomian-item-price"><?php print $item->price; ?></span>
                                    </div>
                                    <div  class="yaomian-item-feature">
                                        <div class="yaomian-item-icon" style="float:left;"></div>
                                        <div  style="float:left;padding-left:5px;">
                                            <?php print $item->feature; ?>
                                        </div>
                                        <div style="clear:both;" ></div>
                                    </div>
                                    <div class="yaomian-item-body">
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