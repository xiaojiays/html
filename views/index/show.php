<?php
$this->params['menu'] = $menu;
$this->params['menus'] = $menus;
$this->params['subMenu'] = $subMenu;
$tag = $list[0]['tag'];
?>
<div class="col left-column">
    <div class="tab"><?=$list[0]['tag']?></div>
    <div class="sidebar-box gallery-list">
        <div class="design" id="leftcolumn">
            <?php foreach($list as $l) {
                    if ($l->tag != $tag) {
                        $tag = $l->tag;
                        echo '<br><h2 class="left"><span class="left_h2">' . $tag . '</span></h2>';
                    }
            ?>
            <a <?php if ($article->uuid == $l->uuid){ ?>style="background-color: #75b9e6; font-weight: bold; color: rgb(255, 255, 255);"<?php } ?> target="_top" title="<?=$l->title?>" href="/<?=$menu->uname?>/<?=$subMenu->uname?>/<?=$l->uuid?>">
                <?=$l->title?>
            </a>
            <?php } ?>
        </div>
    </div>
</div>

<div class="col middle-column">
    <div class="article">

        <div class="previous-next-links">
            <div class="previous-design-link">← <a href="<?php if ($prev){?>/<?=$menu->uname?>/<?=$prev->uname?>/<?=$prev->uuid?><?php } else { ?>#<?php } ?>" rel="prev" title="<?=$prev?$prev->title:''?>"><?=$prev ? $prev->title : '没有了'?></a> </div>
            <div class="next-design-link"><a href="<?php if($next){ ?>/<?=$menu->uname?>/<?=$next->uname?>/<?=$next->uuid?><?php } else { ?>#<?php } ?>" rel="next" title="<?=$next?$next->title:''?>"><?=$next?$next->title:'没有了'?></a> →</div>
        </div>
        <?=$article->content?>
        <div class="previous-next-links">
            <div class="previous-design-link">← <a href="<?php if ($prev){?>/<?=$menu->uname?>/<?=$prev->uname?>/<?=$prev->uuid?><?php } else { ?>#<?php } ?>" rel="prev" title="<?=$prev?$prev->title:''?>"><?=$prev?$prev->title:'没有了'?></a> </div>
            <div class="next-design-link"><a href="<?php if($next){ ?>/<?=$menu->uname?>/<?=$next->uname?>/<?=$next->uuid?><?php }else{ ?>#<?php } ?>" rel="next" title="<?=$next?$next->title:''?>"><?=$next?$next->title:'没有了'?></a> →</div>
        </div>

        <div class="sidebar-box ad-box ad-box-large">
            <div class="ad-336280" style="display: none;">
            </div>
        </div>
    </div>
</div>
