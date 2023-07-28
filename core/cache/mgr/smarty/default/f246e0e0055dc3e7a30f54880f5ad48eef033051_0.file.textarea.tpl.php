<?php
/* Smarty version 4.3.0, created on 2023-07-24 17:51:13
  from '/Applications/MAMP/htdocs/arials/manager/templates/default/element/tv/renders/input/textarea.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64beba117818d5_02521577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f246e0e0055dc3e7a30f54880f5ad48eef033051' => 
    array (
      0 => '/Applications/MAMP/htdocs/arials/manager/templates/default/element/tv/renders/input/textarea.tpl',
      1 => 1673935102,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64beba117818d5_02521577 (Smarty_Internal_Template $_smarty_tpl) {
?><textarea id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" rows="15"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['tv']->value->get('value'), ENT_QUOTES, 'UTF-8', true);?>
</textarea>

<?php echo '<script'; ?>
>
// <![CDATA[

Ext.onReady(function() {
    const fld = MODx.load({
    
        xtype: 'textarea'
        ,itemId: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,applyTo: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        <?php if ($_smarty_tpl->tpl_vars['tv']->value->get('value') != '') {?>
        ,value: '<?php echo strtr((string)$_smarty_tpl->tpl_vars['tv']->value->get('value'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
'
        <?php }?>
        ,height: 140
        ,width: '99%'
        ,enableKeyEvents: true
        ,msgTarget: 'under'
        ,allowBlank: <?php if ($_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 1 || $_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 'true') {?>true<?php } else { ?>false<?php }?>
    
        ,listeners: {
            keydown: {
                fn: MODx.fireResourceFormChange,
                scope: this
            }
        }
    });
    MODx.makeDroppable(fld);
    Ext.getCmp('modx-panel-resource').getForm().add(fld);
});

// ]]>
<?php echo '</script'; ?>
>
<?php }
}
