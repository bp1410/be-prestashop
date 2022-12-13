<?php
/* Smarty version 3.1.43, created on 2022-12-13 20:00:03
  from '/opt/lampp/htdocs/be-prestashop/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6398cbb37028e8_83068851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd76cb4afe29c16a056da665c4161388bcbfd3c85' => 
    array (
      0 => '/opt/lampp/htdocs/be-prestashop/themes/classic/templates/_partials/helpers.tpl',
      1 => 1670928460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6398cbb37028e8_83068851 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/opt/lampp/htdocs/be-prestashop/var/cache/dev/smarty/compile/classiclayouts_layout_full_width_tpl/d7/6c/b4/d76cb4afe29c16a056da665c4161388bcbfd3c85_2.file.helpers.tpl.php',
    'uid' => 'd76cb4afe29c16a056da665c4161388bcbfd3c85',
    'call_name' => 'smarty_template_function_renderLogo_17442843896398cbb36fcdf2_32217126',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_17442843896398cbb36fcdf2_32217126 */
if (!function_exists('smarty_template_function_renderLogo_17442843896398cbb36fcdf2_32217126')) {
function smarty_template_function_renderLogo_17442843896398cbb36fcdf2_32217126(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_17442843896398cbb36fcdf2_32217126 */
}
