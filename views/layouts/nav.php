<div class="container navigation">
    <div class="row">
        <div class="col nav">
            <ul id="index-nav">
            <li><a <?php if (!isset($this->params['subMenu'])) { ?>class="current"<?php } ?> href="/" data-id="index" title="菜鸟教程,新手教程">首页</a></li>
                <?php foreach ($this->params['menus'] as $menu) { ?>
                <li><a <?php if (isset($this->params['subMenu']) && $menu->id == $this->params['subMenu']->id) { ?>class="current"<?php  }?> href="<?php if (isset($this->params['menu'])){ ?>/<?=$this->params['menu']->uname?><?php } ?>/<?=$menu->uname?>" title="<?=$menu->keywords?>"><?=$menu->name?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
