<?php
/* Smarty version 4.2.0, created on 2022-09-22 04:14:02
  from 'C:\xampp\htdocs\smarty-main\templates\mypage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_632bc4eaaad174_75758147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0223f63000f76a3b7e4ac3c01a9e0fb27ac4769d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-main\\templates\\mypage.tpl',
      1 => 1663812698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_632bc4eaaad174_75758147 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '291574878632bc4eaa5e194_74798571';
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_314474019632bc4eaaa9a43_03533688', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146876003632bc4eaaab915_50911847', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1995164643632bc4eaaac663_76482385', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'myproject.tpl');
}
/* {block 'title'} */
class Block_314474019632bc4eaaa9a43_03533688 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_314474019632bc4eaaa9a43_03533688',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
My Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_146876003632bc4eaaab915_50911847 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_146876003632bc4eaaab915_50911847',
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
/* {block 'body'} */
class Block_1995164643632bc4eaaac663_76482385 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1995164643632bc4eaaac663_76482385',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
My HTML Page Body goes here<?php
}
}
/* {/block 'body'} */
}
