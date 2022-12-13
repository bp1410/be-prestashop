<?php
/* Smarty version 3.1.43, created on 2022-12-13 19:56:01
  from '/opt/lampp/htdocs/be-prestashop/admin673jumsdg/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6398cac17404c4_94908085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ec94f5041a1b328e86c85b784124587fbad5c2b' => 
    array (
      0 => '/opt/lampp/htdocs/be-prestashop/admin673jumsdg/themes/default/template/content.tpl',
      1 => 1670928459,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6398cac17404c4_94908085 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
