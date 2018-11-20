<?php
$this->params['menu'] = $menu;
$this->params['menus'] = $menus;
$this->params['subMenu'] = $subMenu;
$tag = $list[0]['tag'];
?>
<div>
    <?php foreach($list as $l) { ?>
    <div>
        <div><a href=><?=$l->title?></a></div>
        <div><?=mb_substr($l->content, 0, 100)?></div>
    </div>
    <?php } ?>
</div>
