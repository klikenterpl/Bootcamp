<?php /* Smarty version Smarty-3.1.18, created on 2018-10-30 15:23:25
         compiled from "G:\wamp\www\Bootcamp\app\plugins\admin\templates\common\images_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43795bd8695d1f3810-57172094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e729a689f1b7e07eac5ac5f807758dae51249c4f' => 
    array (
      0 => 'G:\\wamp\\www\\Bootcamp\\app\\plugins\\admin\\templates\\common\\images_modal.tpl',
      1 => 1398326624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43795bd8695d1f3810-57172094',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOME' => 0,
    'REQUEST' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5bd8695d2072f8_23147949',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd8695d2072f8_23147949')) {function content_5bd8695d2072f8_23147949($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'G:\\wamp\\www\\Bootcamp/data/functions\\function.L.php';
?><div id="imagesModal" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel"><?php echo smarty_function_L(array('key'=>"admin.content.common.tpl.addimages"),$_smarty_tpl);?>
</h3>
	</div>
	<div class="modal-body">
		<iframe src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/ajax/images/modalUploader/<?php echo $_smarty_tpl->tpl_vars['REQUEST']->value->getVariable('id');?>
/" style="height: 100%"></iframe>
	</div>
</div>	<?php }} ?>
