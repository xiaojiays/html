<?php $this->params['menus'] = $menus; ?>
<?php foreach ($menus as $k=>$menu) { ?>
<div class="panel panel-default panelMove toggle panelRefresh panelClose"  style="position: relative; opacity: 1; z-index: 0; left: 0px; top: 0px; <?=$k%3==2 ? 'float:right' : 'float:left' ?>">
    <div class="panel-heading">
        <h4 class="panel-title"><?=$menu->name?></h4>
        <div class="panel-controls panel-controls-hide">
        <a href="/<?=$menu->uname?>" class="panel-refresh">查看更多>></a>
        </div>
    </div>
    <div class="panel-body">
        <ul class="list-unstyled">
            <?php foreach($articles[$menu->id] as $a) { ?>
            <li>
                <div>
                    <div style="float:left;width:280px;text-align: -webkit-match-parent;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">
                        <?php if (!$a->mode) { ?>
                        <a href="/<?=$menu->uname?>/<?=$a->uname?>/<?=$a->uuid?>"><?=$a->title?></a>
                        <?php } else { ?>
                        <a href="/run/ot?t=<?=$a->uuid?>"><?=$a->title?></a>
                        <?php } ?>
                    </div>
                    <div style="float:right;">
                        <?=date('Y-m-d', $a->publish_time)?>
                    </div>
                </div>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>
<?php } ?>
