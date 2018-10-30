<?php /* Smarty version Smarty-3.1.18, created on 2018-10-30 15:23:24
         compiled from "G:\wamp\www\Bootcamp\app\plugins\admin\templates\common\tabs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161585bd8695c913613-52197431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e23edef7240208bd407cf568528685d00b3c55c' => 
    array (
      0 => 'G:\\wamp\\www\\Bootcamp\\app\\plugins\\admin\\templates\\common\\tabs.tpl',
      1 => 1398326624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161585bd8695c913613-52197431',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pins' => 1,
    'key' => 1,
    'HOME' => 1,
    'pin' => 1,
    'iconName' => 1,
    'pinsIconsArray' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5bd8695c9666c7_96173869',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd8695c9666c7_96173869')) {function content_5bd8695c9666c7_96173869($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'G:\\wamp\\www\\Bootcamp/data/functions\\function.L.php';
?><?php if ($_smarty_tpl->tpl_vars['pins']->value!='') {?>
	<div id="sidebar-right">
		<ul>
			<?php  $_smarty_tpl->tpl_vars['pin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pin']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pin']->key => $_smarty_tpl->tpl_vars['pin']->value) {
$_smarty_tpl->tpl_vars['pin']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['pin']->key;
?>
				<?php if (isset($_smarty_tpl->tpl_vars['iconName'])) {$_smarty_tpl->tpl_vars['iconName'] = clone $_smarty_tpl->tpl_vars['iconName'];
$_smarty_tpl->tpl_vars['iconName']->value = $_smarty_tpl->tpl_vars['key']->value; $_smarty_tpl->tpl_vars['iconName']->nocache = true; $_smarty_tpl->tpl_vars['iconName']->scope = 0;
} else $_smarty_tpl->tpl_vars['iconName'] = new Smarty_variable($_smarty_tpl->tpl_vars['key']->value, true, 0);?>
				<li data-toggle="tooltip" data-placement="left" data-original-title="<?php echo smarty_function_L(array('key'=>$_smarty_tpl->tpl_vars['key']->value),$_smarty_tpl);?>
">
					<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/mainDo/showTab/<?php echo base64_encode(str_replace($_smarty_tpl->tpl_vars['HOME']->value,'',$_smarty_tpl->tpl_vars['pin']->value[0]));?>
/<?php echo $_smarty_tpl->tpl_vars['pin']->key;?>
/">
						<i class="color-icons <?php echo $_smarty_tpl->tpl_vars['pinsIconsArray']->value[$_smarty_tpl->tpl_vars['iconName']->value];?>
"></i>
					</a>
				</li>
			<?php } ?>	
			<li data-toggle="tooltip" data-placement="bottom" data-original-title="<?php echo smarty_function_L(array('key'=>"admin.templates.common.tabs.cleanpins"),$_smarty_tpl);?>
">
				<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/do/cleanPins/">
					<i class="fa fa-times-circle "> </i>
				</a>
			</li>				
		</ul>
	</div>
<?php }?><?php }} ?>
