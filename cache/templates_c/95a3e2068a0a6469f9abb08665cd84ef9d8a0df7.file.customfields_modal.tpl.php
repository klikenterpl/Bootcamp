<?php /* Smarty version Smarty-3.1.18, created on 2018-10-30 15:23:25
         compiled from "G:\wamp\www\Bootcamp\app\plugins\admin\templates\common\customfields_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51105bd8695d25f7d5-90855475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95a3e2068a0a6469f9abb08665cd84ef9d8a0df7' => 
    array (
      0 => 'G:\\wamp\\www\\Bootcamp\\app\\plugins\\admin\\templates\\common\\customfields_modal.tpl',
      1 => 1398326624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51105bd8695d25f7d5-90855475',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5bd8695d26eca2_12375342',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd8695d26eca2_12375342')) {function content_5bd8695d26eca2_12375342($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'G:\\wamp\\www\\Bootcamp/data/functions\\function.L.php';
?><div id="customFielsdModal" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel"><?php echo smarty_function_L(array('key'=>"admin.customfields.modal.tpl.addfields"),$_smarty_tpl);?>
</h3>
	</div>
	<div class="modal-body">
		<iframe src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/ajax/customfields/index/"></iframe>
	</div>
</div>	<?php }} ?>
