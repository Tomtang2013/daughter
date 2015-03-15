<?php 
global $base_path;
$result = db_query("SELECT nid FROM node WHERE type = :type order by created desc limit 16", 
        array(':type' => 'qanda'))->fetchAll();

$qanda_list = array();
//$paths = array();
foreach ($result as $row) {
    $node = node_load($row->nid);
    $qanda = new stdClass();
    $qanda->nid = $row->nid;
    $qanda->title = $node->title;
    
    $qanda->created = $node->created;
    $qanda->changed = $node->changed;
    $qanda->type = $node->field_qa_type['und'][0]['value'];
    $qanda->type_dec = prepare_type_dec($qanda->type);
    $qanda->question = $node->field_question['und'][0]['value'];
    $qanda->answer = $node->field_answer['und'][0]['value'];
   
    
    $qanda_list[] = $qanda;
}

function prepare_type_dec($type){
    if ($type == 1)
        return "专家答疑";
    if ($type == 2)
        return "健康分享";
    if ($type == 3)
        return "千金小知识";
}
?>

<script type="text/javascript">
    jQuery(function(){
        jQuery('.expandableLink').each(function(){
            jQuery(this).click(function(){
//                jQuery('.qanda-answer-item').each(function() {
//                        jQuery(this).slideUp();
//                });
                        
                var root = jQuery(this).parents().filter('.qand-qa-item');
                var answer = root.find('.qanda-answer-item');

                if (answer.is(':hidden')) {
                    answer.slideToggle();
                } else {
                    answer.hide();
                    answer.slideUp();
                }
                return false;
            });
        });
    });
</script>
<div id="company_profile" >
    <div class="container" style="" >
        <div class="qanda-header">
             <div  class="content_item_title" style="margin-right:40px;" > 
                    Q & A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
        </div>
       
        <div class="row" style="padding-top: 20px;">
            <div class='qand-left-menu' >
                <div  class="menubox">
                    <div  class="content_item_title" style="margin-right:40px;" > 
                            Q & A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    <div  class="menubox_item" > 
                       <a class="item-text" href="">专家答疑</a>
                    </div>
                    <div class="item-bar"></div>
                    <div class="menubox_item" > 
                        <a href="" class="item-text">健康分享</a>
                        </div>
                    <div class="item-bar"></div>
                    <div class="menubox_item" > 
                        <a class="item-text" href="">千金小知识 </a>
                        </div>
                    <div class="item-bar"></div>
                </div>
            </div>
        
            <div class="qanda-right-content">
                <div class="qanda-right-content-header">
                    <div  class="qanda-right-content-cl qanda-right-content-h-1"> 区分</div>
                    <div class="qanda-right-content-cl qanda-right-content-h-2"> 分类</div>
                    <div class="qanda-right-content-cl qanda-right-content-h-3"> 提问和回答</div>
                </div>
                    <?php $idx=0; foreach($qanda_list as $qanda):?>
                        <div class="qand-qa-item">
                        <?php if($idx != 0):?>
                            <div class="qanda-question-item">
                        <?php else:?>
                            <div class="qanda-question-item-first">
                        <?php endif;?>
                                <div  class="qanda-right-content-cl qanda-right-content-cl-1"><a class="expandableLink" href=""> Q</a> </div>
                                <div class="qanda-right-content-cl qanda-right-content-cl-2"> <?php print $qanda->type_dec ?></div>
                                <div class="qanda-right-content-cl qanda-right-content-cl-3"> <?php print $qanda->question ?></div>
                            </div>
                                
                            <div class="qanda-answer-item" 
                                <?php if($idx != 0):?>
                                     style="display:none;"
                                <?php endif;?>
                                >
                                <div class="qanda-right-content-cl qanda-right-content-cl-1" style="color:#FCA957;"> A </div>
                                <div class="qanda-right-content-cl qanda-right-content-cl-4"> <?php print $qanda->answer ?></div>
                            </div>
                       </div>
                    <?php $idx++; endforeach;?>
               
            </div>
        </div>
       
    </div>
</div> 
