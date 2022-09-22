<?php
/* Smarty version 4.2.0, created on 2022-09-21 13:31:59
  from 'C:\xampp\htdocs\smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_632af62f31d431_92059957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e8fe154245a2fdaea9fea4e0663b1125dfb722b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\templates\\index.tpl',
      1 => 1663759916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_632af62f31d431_92059957 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),1=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),2=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.escape.php','function'=>'smarty_modifier_escape',),3=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),4=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),5=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.spacify.php','function'=>'smarty_modifier_spacify',),6=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<h1>hh</h1>
<?php echo $_smarty_tpl->tpl_vars['articleTitle']->value;?>
<br/>
<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['articleTitle']->value);?>
<br/>
<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['articleTitle']->value,true);?>
<br/>
      <?php echo ($_smarty_tpl->tpl_vars['Title']->value).(' yesterday.');?>
<br/>
       <?php echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['articleTitle']->value, $tmp);?>
<br/>
<?php echo mb_strlen($_smarty_tpl->tpl_vars['articleTitle']->value, 'UTF-8');?>
<br/>
        <?php echo preg_match_all("#\w[\.\?\!](\W|$)#Su", $_smarty_tpl->tpl_vars['Title']->value, $tmp);?>
<br/>
        <?php echo preg_match_all('/\p{L}[\p{L}\p{Mn}\p{Pd}\'\x{2019}]*/u', $_smarty_tpl->tpl_vars['articleTitle']->value, $tmp);?>
<br/>
       <?php echo smarty_modifier_date_format(time());?>
<br/>
<?php echo smarty_modifier_date_format(time(),"%D");?>
<br/>
<?php echo smarty_modifier_date_format(time(),$_smarty_tpl->tpl_vars['config']->value['date']);?>
<br/>
<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['yesterday']->value);?>
<br/>
<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['yesterday']->value,"%A, %B %e, %Y");?>
<br/>
<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['yesterday']->value,$_smarty_tpl->tpl_vars['config']->value['time']);?>
<br/>
        <?php echo (($tmp = $_smarty_tpl->tpl_vars['articleTitle']->value ?? null)===null||$tmp==='' ? 'no title' ?? null : $tmp);?>
<br/>
<?php echo (($tmp = $_smarty_tpl->tpl_vars['myTitle']->value ?? null)===null||$tmp==='' ? 'no title' ?? null : $tmp);?>
<br/>
<?php echo (($tmp = $_smarty_tpl->tpl_vars['email']->value ?? null)===null||$tmp==='' ? 'No email address available' ?? null : $tmp);?>
<br/>  
              
<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['articleTitle']->value, ENT_QUOTES, 'UTF-8', true);?>
<br/>
<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['articleTitle']->value, ENT_QUOTES, 'UTF-8', true);?>
    <br/>
<a href="?title=<?php echo rawurlencode((string)$_smarty_tpl->tpl_vars['aTitle']->value);?>
">click here</a><br/>
<a href="?title=%27Stiff%20Opposition%20Expected%20to%20Casketless%20Funeral%20Plan%27">click here</a><br/>

<?php echo preg_replace("%(?<!\\\\)'%", "\'", (string)$_smarty_tpl->tpl_vars['aTitle']->value);?>
<br/>

<a href="mailto:<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['Address']->value, "hex");?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['Address']->value, "hexentity");?>
</a><br/>
<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['Address']->value, 'mail');?>
    <br/>
<a href="mailto:%62%6f%..snip..%65%74">&#x62;&#x6f;&#x62..snip..&#x65;&#x74;</a><br/>

<?php echo smarty_modifier_escape('mail@example.com', 'mail');?>
<br/>

                
<?php echo $_smarty_tpl->tpl_vars['TitleA']->value;?>
<br/>

<?php echo preg_replace('!^!m',str_repeat(' ',4),$_smarty_tpl->tpl_vars['TitleA']->value);?>
<br/>

<?php echo preg_replace('!^!m',str_repeat(' ',20),$_smarty_tpl->tpl_vars['TitleA']->value);?>
<br/>

<?php echo preg_replace('!^!m',str_repeat("\t",1),$_smarty_tpl->tpl_vars['TitleA']->value);?>
<br/>
 
<?php echo mb_strtolower($_smarty_tpl->tpl_vars['articleTitle']->value, 'UTF-8');?>
<br/>
<?php echo nl2br($_smarty_tpl->tpl_vars['articleTitle']->value);?>
<br/>
<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['articleTitle']->value,"/[\r\t\n]/"," ");?>
<br/>
<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['articleTitle']->value,'Will','is');?>
<br/>
<?php echo smarty_modifier_spacify($_smarty_tpl->tpl_vars['articleTitle']->value,"^^");?>

                 
<?php echo $_smarty_tpl->tpl_vars['modifier']->value;?>
<br/>
<?php echo smarty_modifier_spacify(mb_strtoupper($_smarty_tpl->tpl_vars['modifier']->value, 'UTF-8'));?>
<br/>
<?php echo smarty_modifier_truncate(smarty_modifier_spacify(mb_strtolower($_smarty_tpl->tpl_vars['modifier']->value, 'UTF-8')));?>
<br/>
<?php echo smarty_modifier_spacify(smarty_modifier_truncate(mb_strtolower($_smarty_tpl->tpl_vars['modifier']->value, 'UTF-8'),30));?>
<br/>
<?php echo smarty_modifier_truncate(smarty_modifier_spacify(mb_strtolower($_smarty_tpl->tpl_vars['modifier']->value, 'UTF-8')),30,". . .");?>
<br/>

                     
<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['first'] = 'Bob';
$_smarty_tpl->_assignInScope('name', $_tmp_array);
$_tmp_array = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['last'] = 'singh';
$_smarty_tpl->_assignInScope('name', $_tmp_array);?>
The first name is <?php echo $_smarty_tpl->tpl_vars['name']->value['first'];?>
.<br>
The last name is <?php echo $_smarty_tpl->tpl_vars['name']->value['last'];?>
.

<?php $_smarty_tpl->_assignInScope('name', "Apply");?> The value of $name is <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
.
<?php $_smarty_tpl->_assignInScope('foo', "bar" ,false ,8);?>
The value of $foo is <?php echo $_smarty_tpl->tpl_vars['foo']->value;
}
}
