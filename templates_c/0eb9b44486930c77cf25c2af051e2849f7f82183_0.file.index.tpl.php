<?php
/* Smarty version 4.2.0, created on 2022-08-23 09:47:07
  from 'C:\xampp\htdocs\uctest\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_630485fb0708b2_49526643',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0eb9b44486930c77cf25c2af051e2849f7f82183' => 
    array (
      0 => 'C:\\xampp\\htdocs\\uctest\\templates\\index.tpl',
      1 => 1661240461,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_630485fb0708b2_49526643 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Ucertify"), 0, false);
?>

<div class="row mt-5">
    <div class="col-12 text-center">
        <h3 class="text-danger">Note: This Test have provided some Sortcut keys.</h3>
        <h5><span class="text-primary text-underline fw-bold text-decoration-underline">Press L</span> For <span class="text-success fw-bold text-decoration-underline">List Question</span></h5>
        <h5><span class="text-primary text-underline fw-bold text-decoration-underline">Press P</span> For <span class="text-success fw-bold text-decoration-underline">Previous Question</span></h5>
        <h5><span class="text-primary text-underline fw-bold text-decoration-underline">Press N</span> For <span class="text-success fw-bold text-decoration-underline">Next Question</span></h5>
        <h5><span class="text-primary text-underline fw-bold text-decoration-underline">Press D</span> For <span class="text-success fw-bold text-decoration-underline">End Test</span></h5>
    </div>
    <div class="col-12 text-center fixed-bottom mb-5">
        <button type="button" class="btn btn-light" onclick="window.location.href='http://localhost/uctest/test/';">Start Test</button>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
