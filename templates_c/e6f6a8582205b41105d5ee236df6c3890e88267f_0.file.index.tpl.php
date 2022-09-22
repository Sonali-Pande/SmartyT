<?php
/* Smarty version 4.2.0, created on 2022-09-22 03:50:15
  from 'C:\xampp\htdocs\smarty-main\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_632bbf57d76444_18908925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6f6a8582205b41105d5ee236df6c3890e88267f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-main\\templates\\index.tpl',
      1 => 1663811211,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_632bbf57d76444_18908925 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'menu' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\smarty-main\\templates_c\\e6f6a8582205b41105d5ee236df6c3890e88267f_0.file.index.tpl.php',
    'uid' => 'e6f6a8582205b41105d5ee236df6c3890e88267f',
    'call_name' => 'smarty_template_function_menu_4181075632bbf57c73e91_23083247',
  ),
));
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty-main\\libs\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),1=>array('file'=>'C:\\xampp\\htdocs\\smarty-main\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),2=>array('file'=>'C:\\xampp\\htdocs\\smarty-main\\libs\\plugins\\modifier.escape.php','function'=>'smarty_modifier_escape',),3=>array('file'=>'C:\\xampp\\htdocs\\smarty-main\\libs\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),4=>array('file'=>'C:\\xampp\\htdocs\\smarty-main\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),5=>array('file'=>'C:\\xampp\\htdocs\\smarty-main\\libs\\plugins\\modifier.spacify.php','function'=>'smarty_modifier_spacify',),6=>array('file'=>'C:\\xampp\\htdocs\\smarty-main\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),7=>array('file'=>'C:\\xampp\\htdocs\\smarty-main\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),8=>array('file'=>'C:\\xampp\\htdocs\\smarty-main\\libs\\plugins\\function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),9=>array('file'=>'C:\\xampp\\htdocs\\smarty-main\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
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
The value of $foo is <?php echo $_smarty_tpl->tpl_vars['foo']->value;?>




<?php $_smarty_tpl->_assignInScope('menu', array('item1','item2','item3'=>array('item3-1','item3-2','item3-3'=>array('item3-3-1','item3-3-2')),'item4'));?>

<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('data'=>$_smarty_tpl->tpl_vars['menu']->value), true);?>



<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', null, "foo");?>hello<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>I say just <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', null, "foo");?>world<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['foo']->value, 'text');
$_smarty_tpl->tpl_vars['text']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['text']->value) {
$_smarty_tpl->tpl_vars['text']->do_else = false;
echo $_smarty_tpl->tpl_vars['text']->value;?>
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


@<body bgcolor="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'bodyBgColor');?>
">
@<table border="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tableBorderSize');?>
" bgcolor="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tableBgColor');?>
">
@   <tr bgcolor="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'rowBgColor');?>
">
@     <td>First</td>
@      <td>Last</td>
@      <td>Address</td>
@   </tr>
@</table>
*************************}

                  
<ul>
<?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 3+1 - (1) : 1-(3)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
    <li><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</li>
<?php }
}
?>
</ul>


<ul>
<?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) min(ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['to']->value+1 - (3) : 3-($_smarty_tpl->tpl_vars['to']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step)),3);
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 3, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
    <li><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</li>
<?php }
}
?>
</ul>

<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['myPeople']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
$__foreach_value_2_saved = $_smarty_tpl->tpl_vars['value'];
?>
   <li><?php echo $_smarty_tpl->tpl_vars['value']->key;?>
: <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</li>
<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>



<?php $_smarty_tpl->_assignInScope('data', array(1,2,3,4,5));?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
$__foreach_value_3_saved = $_smarty_tpl->tpl_vars['value'];
?>
    <?php if ($_smarty_tpl->tpl_vars['value']->value == 3) {?>
            <?php continue 1;?>
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

  <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_3_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

  

<?php $_smarty_tpl->_assignInScope('menu', array('item1','item2','item3'=>array('item3-1','item3-2','item3-3'=>array('item3-3-1','item3-3-2')),'item4'));?>

<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('data'=>$_smarty_tpl->tpl_vars['menu']->value), true);?>


  <?php if ($_smarty_tpl->tpl_vars['name']->value == 'Fred') {?>
    Welcome Sir.
<?php } elseif ($_smarty_tpl->tpl_vars['name']->value == 'Wilma') {?>
    Welcome Ma'am.
<?php } else { ?>
    Welcome, whatever you are.
<?php }?>




<?php echo '<script'; ?>
 language="JavaScript" type="text/javascript">
    function myJsFunction(){
        alert("The server name\n<?php echo $_SERVER['SERVER_NAME'];?>
\n<?php echo $_SERVER['SERVER_ADDR'];?>
");
    }
<?php echo '</script'; ?>
>

Today's date is

<?php echo smarty_modifier_date_format(time());?>




<table>
  <tr>
    <th>index</th><th>id</th>
    <th>index_prev</th><th>prev_id</th>
    <th>index_next</th><th>next_id</th>
  </tr>
<?php
$__section_row_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['rows']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_row_0_total = $__section_row_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_row'] = new Smarty_Variable(array());
if ($__section_row_0_total !== 0) {
for ($__section_row_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] = 0; $__section_row_0_iteration <= $__section_row_0_total; $__section_row_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_row']->value['index_prev'] = $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] - 1;
$_smarty_tpl->tpl_vars['__smarty_section_row']->value['index_next'] = $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] + 1;
?>
  <tr>
    <td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null);?>
</td><td><?php echo $_smarty_tpl->tpl_vars['rows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)];?>
</td>
    <td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index_prev']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index_prev'] : null);?>
</td><td><?php echo $_smarty_tpl->tpl_vars['rows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index_prev']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index_prev'] : null)];?>
</td>
    <td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index_next']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index_next'] : null);?>
</td><td><?php echo $_smarty_tpl->tpl_vars['rows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index_next']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index_next'] : null)];?>
</td>
  </tr>
<?php
}
}
?>
</table>

   

<?php echo smarty_function_counter(array('start'=>0,'skip'=>2),$_smarty_tpl);?>
<br />
<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<br />
<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<br />
<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<br/>

 <?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['foo']->value, $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>
 
 <?php echo smarty_function_html_checkboxes(array('name'=>'id','options'=>$_smarty_tpl->tpl_vars['cust_checkboxes']->value,'selected'=>$_smarty_tpl->tpl_vars['customer_id']->value,'separator'=>'<br />'),$_smarty_tpl);?>


  

<?php echo smarty_function_html_options(array('name'=>'id','options'=>$_smarty_tpl->tpl_vars['cust']->value,'selected'=>$_smarty_tpl->tpl_vars['customer_id']->value),$_smarty_tpl);?>


<?php echo smarty_function_html_options(array('name'=>'foo','options'=>$_smarty_tpl->tpl_vars['lookups']->value,'selected'=>$_smarty_tpl->tpl_vars['fav']->value),$_smarty_tpl);?>

<?php }
/* smarty_template_function_menu_4181075632bbf57c73e91_23083247 */
if (!function_exists('smarty_template_function_menu_4181075632bbf57c73e91_23083247')) {
function smarty_template_function_menu_4181075632bbf57c73e91_23083247(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('level'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <ul class="level<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'entry');
$_smarty_tpl->tpl_vars['entry']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->do_else = false;
$__foreach_entry_0_saved = $_smarty_tpl->tpl_vars['entry'];
?>
    <?php if (is_array($_smarty_tpl->tpl_vars['entry']->value)) {?>
      <li><?php echo $_smarty_tpl->tpl_vars['entry']->key;?>
</li>
      <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('data'=>$_smarty_tpl->tpl_vars['entry']->value,'level'=>$_smarty_tpl->tpl_vars['level']->value+1), true);?>

    <?php } else { ?>
      <li><?php echo $_smarty_tpl->tpl_vars['entry']->value;?>
</li>
    <?php }?>
  <?php
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
<?php
}}
/*/ smarty_template_function_menu_4181075632bbf57c73e91_23083247 */
/* smarty_template_function_menu_4181075632bbf57c73e91_23083247 */
if (!function_exists('smarty_template_function_menu_4181075632bbf57c73e91_23083247')) {
function smarty_template_function_menu_4181075632bbf57c73e91_23083247(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('level'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>
            <ul class="level<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'entry');
$_smarty_tpl->tpl_vars['entry']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->do_else = false;
$__foreach_entry_4_saved = $_smarty_tpl->tpl_vars['entry'];
?>
    <?php if (is_array($_smarty_tpl->tpl_vars['entry']->value)) {?>
      <li><?php echo $_smarty_tpl->tpl_vars['entry']->key;?>
</li>
      <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('data'=>$_smarty_tpl->tpl_vars['entry']->value,'level'=>$_smarty_tpl->tpl_vars['level']->value+1), true);?>

    <?php } else { ?>
      <li><?php echo $_smarty_tpl->tpl_vars['entry']->value;?>
</li>
    <?php }?>
  <?php
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_4_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
<?php
}}
/*/ smarty_template_function_menu_4181075632bbf57c73e91_23083247 */
}
