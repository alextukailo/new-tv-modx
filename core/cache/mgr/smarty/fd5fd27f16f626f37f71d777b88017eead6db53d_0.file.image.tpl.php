<?php
/* Smarty version 4.3.0, created on 2023-07-19 18:23:32
  from '/Applications/MAMP/htdocs/arials/manager/templates/default/element/tv/renders/input/image.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64b82a24149d86_93406130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd5fd27f16f626f37f71d777b88017eead6db53d' => 
    array (
      0 => '/Applications/MAMP/htdocs/arials/manager/templates/default/element/tv/renders/input/image.tpl',
      1 => 1673935102,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64b82a24149d86_93406130 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/arials/core/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<div id="tv-image-<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
"></div>

<div id="tv-image-preview-<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" class="modx-tv-image-preview">
    <?php if ($_smarty_tpl->tpl_vars['tv']->value->value) {?><img src="<?php echo $_smarty_tpl->tpl_vars['_config']->value['connectors_url'];?>
system/phpthumb.php?w=400&h=400&aoe=0&far=0&f=png&src=<?php echo $_smarty_tpl->tpl_vars['tv']->value->value;?>
&source=<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
" alt="" /><?php }?>
</div>

<?php if ($_smarty_tpl->tpl_vars['disabled']->value) {?>
    <?php echo '<script'; ?>
>
    // <![CDATA[
    
    Ext.onReady(function() {
        const fld = MODx.load({
        
            xtype: 'displayfield'
            ,itemId: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
            ,tv: '<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
            ,renderTo: 'tv-image-<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
            <?php if ($_smarty_tpl->tpl_vars['tv']->value->value != '') {?>
            ,value: '<?php echo strtr((string)$_smarty_tpl->tpl_vars['tv']->value->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
'
            <?php }?>
            ,width: 400
            ,msgTarget: 'under'
        
        });
    });
    
    // ]]>
    <?php echo '</script'; ?>
>
<?php } else { ?>
    <?php echo '<script'; ?>
>
    // <![CDATA[
    
    Ext.onReady(function() {
        const fld = MODx.load({
        
            xtype: 'modx-panel-tv-image'
            ,itemId: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
            ,renderTo: 'tv-image-<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
            ,tv: '<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
            <?php if ($_smarty_tpl->tpl_vars['tv']->value->value != '') {?>
            ,value: '<?php echo strtr((string)$_smarty_tpl->tpl_vars['tv']->value->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
'
            ,relativeValue: '<?php echo strtr((string)$_smarty_tpl->tpl_vars['tv']->value->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
'
            <?php }?>
            ,width: 400
            ,allowBlank: <?php if ($_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 1 || $_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 'true') {?>true<?php } else { ?>false<?php }?>
            ,wctx: '<?php if ((($tmp = $_smarty_tpl->tpl_vars['params']->value['wctx'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) {
echo $_smarty_tpl->tpl_vars['params']->value['wctx'];
} else { ?>web<?php }?>'
            <?php if ((($tmp = $_smarty_tpl->tpl_vars['params']->value['openTo'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) {?>,openTo: '<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['params']->value['openTo'],"'","\\'");?>
'<?php }?>
            ,source: '<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
'
        
            ,msgTarget: 'under'
            ,listeners: {
                select: {
                    fn: function(data) {
                        MODx.fireResourceFormChange();
                        const d = Ext.get('tv-image-preview-<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
');
                        if (Ext.isEmpty(data.url)) {
                            d.update('');
                        } else {
                            
                            d.update('<img src="<?php echo $_smarty_tpl->tpl_vars['_config']->value['connectors_url'];?>
system/phpthumb.php?w=400&h=400&aoe=0&far=0&f=png&src='+data.url+'&wctx=<?php echo $_smarty_tpl->tpl_vars['ctx']->value;?>
&source=<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
&version=<?php echo $_smarty_tpl->tpl_vars['hash']->value;?>
" alt="" />');
                            
                        }
                    }
                }
            }
            ,validate: function () {
                return Ext.getCmp('tvbrowser<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
').validate();
            }
        });
        MODx.makeDroppable(Ext.get('tv-image-<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'), function(v) {
            const cb = Ext.getCmp('tvbrowser<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
');
            if (cb) {
                cb.setValue(v);
                cb.fireEvent('select', {relativeUrl: v});
            }
            return '';
        });
        Ext.getCmp('modx-panel-resource').getForm().add(fld);
    });
    
    // ]]>
    <?php echo '</script'; ?>
>
<?php }
}
}
