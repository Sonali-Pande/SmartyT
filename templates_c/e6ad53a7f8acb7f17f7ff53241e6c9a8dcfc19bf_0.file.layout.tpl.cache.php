<?php
/* Smarty version 4.2.0, created on 2022-09-22 04:14:02
  from 'C:\xampp\htdocs\smarty-main\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_632bc4eac2d8f3_43755978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6ad53a7f8acb7f17f7ff53241e6c9a8dcfc19bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-main\\templates\\layout.tpl',
      1 => 1663812767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_632bc4eac2d8f3_43755978 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '1655383851632bc4eac27ae0_64554701';
?>

<html>
<head>
  <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_807126282632bc4eac29d51_42340046', 'title');
?>
</title>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2062146395632bc4eac2b719_31531165', 'head');
?>

</head>
<body>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_778349922632bc4eac2c9f4_90593604', 'body');
?>

</body>
</html>
<?php }
/* {block 'title'} */
class Block_807126282632bc4eac29d51_42340046 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_807126282632bc4eac29d51_42340046',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_2062146395632bc4eac2b719_31531165 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_2062146395632bc4eac2b719_31531165',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_778349922632bc4eac2c9f4_90593604 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_778349922632bc4eac2c9f4_90593604',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
