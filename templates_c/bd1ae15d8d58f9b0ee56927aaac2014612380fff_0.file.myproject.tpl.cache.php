<?php
/* Smarty version 4.2.0, created on 2022-09-22 04:14:02
  from 'C:\xampp\htdocs\smarty-main\templates\myproject.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_632bc4eaba3732_77721632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd1ae15d8d58f9b0ee56927aaac2014612380fff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-main\\templates\\myproject.tpl',
      1 => 1663812730,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_632bc4eaba3732_77721632 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '148113587632bc4eab9eba3_23307384';
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1549541242632bc4eaba2501_08021412', 'head');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'head'} */
class Block_1549541242632bc4eaba2501_08021412 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_1549541242632bc4eaba2501_08021412',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <link href="/css/mypage.css" rel="stylesheet" type="text/css"/>
  <?php echo '<script'; ?>
 src="/js/mypage.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'head'} */
}
