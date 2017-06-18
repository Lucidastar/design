<?php /* Smarty version 2.6.18, created on 2017-06-16 16:31:39
         compiled from D:/xampp/htdocs/design/gulliver/templates/submenu.html */ ?>
<ul id="pm_submenu">
    <?php $_from = $this->_tpl_vars['subMenus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['field']):
?>
    <?php if ($this->_tpl_vars['field']['icon'] != ""): ?>
    <li  id="<?php echo $this->_tpl_vars['field']['idName']; ?>
" class="<?php echo $this->_tpl_vars['field']['classname']; ?>
">
        <a href="<?php echo $this->_tpl_vars['field']['target']; ?>
" <?php echo $this->_tpl_vars['field']['onclick']; ?>
 <?php echo $this->_tpl_vars['field']['elementclass']; ?>
>
            <img src="<?php echo $this->_tpl_vars['field']['icon']; ?>
" border="0" alt="<?php echo $this->_tpl_vars['field']['label']; ?>
"/>
            <?php echo $this->_tpl_vars['field']['label']; ?>

        </a>
    </li>
    <?php else: ?>
    <li  id="<?php echo $this->_tpl_vars['field']['idName']; ?>
"
          class="<?php echo $this->_tpl_vars['field']['classname']; ?>
">
        <a href="<?php echo $this->_tpl_vars['field']['target']; ?>
" <?php echo $this->_tpl_vars['field']['onclick']; ?>
 <?php echo $this->_tpl_vars['field']['elementclass']; ?>
>
            <?php echo $this->_tpl_vars['field']['label']; ?>

        </a>
    </li>
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
</ul>