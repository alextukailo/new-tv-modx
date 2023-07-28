<?php
/* Smarty version 4.3.0, created on 2023-07-17 16:30:57
  from '/Applications/MAMP/htdocs/arials/setup/templates/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64b56cc141d3c7_18103979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59057bcaee035a13329b932bb132169d0e5df6ae' => 
    array (
      0 => '/Applications/MAMP/htdocs/arials/setup/templates/footer.tpl',
      1 => 1673935102,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64b56cc141d3c7_18103979 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/arials/core/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
            </div>
        </div>
    </div>

    <!-- start footer -->
    <footer>
        <div class="wrapper">
            <div class="copyrite">
                <p><?php ob_start();
echo date('Y');
$_prefixVariable1 = ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_prefixVariable1);?>
</p>
            </div>
            <div class="copyrite_info">
                <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
            </div>
        </div>
    </footer>
    <!-- end footer -->
</body>

</html>
<?php }
}
