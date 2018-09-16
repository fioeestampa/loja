<ul class="navmenu center">
    <li class="sub-menu first active"><a href="<?php echo BASE_URL; ?>"><?php $this->lang->get('HOME'); ?></a></li>
    <?php foreach ($menu as $menuitem) { ?>
    <li class="sub-menu"><a href="<?php echo BASE_URL.$menuitem['url']; ?>"><?php echo $menuitem['name']; ?></a></li>
    <?php } ?>
     <li class="sub-menu first active"><a href="<?php echo BASE_URL; ?>"><?php $this->lang->get('PAGES'); ?></a></li>
</ul>