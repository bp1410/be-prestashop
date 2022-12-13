<?php
/* Smarty version 3.1.43, created on 2022-12-13 20:00:03
  from '/opt/lampp/htdocs/be-prestashop/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6398cbb36e6a02_53521105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1138a78feed71112471b8a284313dab19ad404e' => 
    array (
      0 => '/opt/lampp/htdocs/be-prestashop/themes/classic/templates/page.tpl',
      1 => 1670928460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6398cbb36e6a02_53521105 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8549807386398cbb36e3b25_91966568', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_20933235096398cbb36e4216_40366952 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_8784639236398cbb36e3e62_67888298 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20933235096398cbb36e4216_40366952', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_21460165326398cbb36e56f0_28164036 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_13286081106398cbb36e5ae7_05759436 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_9437892396398cbb36e5412_23539532 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21460165326398cbb36e56f0_28164036', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13286081106398cbb36e5ae7_05759436', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_4590899026398cbb36e6314_77147948 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_2818795536398cbb36e60a3_54030246 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4590899026398cbb36e6314_77147948', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_8549807386398cbb36e3b25_91966568 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8549807386398cbb36e3b25_91966568',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_8784639236398cbb36e3e62_67888298',
  ),
  'page_title' => 
  array (
    0 => 'Block_20933235096398cbb36e4216_40366952',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_9437892396398cbb36e5412_23539532',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_21460165326398cbb36e56f0_28164036',
  ),
  'page_content' => 
  array (
    0 => 'Block_13286081106398cbb36e5ae7_05759436',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_2818795536398cbb36e60a3_54030246',
  ),
  'page_footer' => 
  array (
    0 => 'Block_4590899026398cbb36e6314_77147948',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8784639236398cbb36e3e62_67888298', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9437892396398cbb36e5412_23539532', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2818795536398cbb36e60a3_54030246', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
