<?php
/* Smarty version 4.3.0, created on 2023-07-17 16:31:25
  from '/Applications/MAMP/htdocs/arials/manager/templates/default/dashboard/configcheck.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64b56cdd541ee2_85187940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a517c8650d64b91b8b05ccf98858bc759b233a3' => 
    array (
      0 => '/Applications/MAMP/htdocs/arials/manager/templates/default/dashboard/configcheck.tpl',
      1 => 1673935102,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64b56cdd541ee2_85187940 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['warnings']->value)) {?>
    <h4><?php echo $_smarty_tpl->tpl_vars['_lang']->value['configcheck_notok'];?>
</h4>
    <ul class="configcheck">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['warnings']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
            <li>
                <h5 class="warn"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</h5>
                <p><i class="icon icon-info-circle"></i> <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</p>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php }
}
}
