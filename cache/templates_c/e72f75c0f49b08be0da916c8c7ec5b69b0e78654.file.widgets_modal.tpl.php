<?php /* Smarty version Smarty-3.1.18, created on 2018-10-30 15:23:25
         compiled from "G:\wamp\www\Bootcamp\app\plugins\admin\templates\common\widgets_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129845bd8695d212e97-16931222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e72f75c0f49b08be0da916c8c7ec5b69b0e78654' => 
    array (
      0 => 'G:\\wamp\\www\\Bootcamp\\app\\plugins\\admin\\templates\\common\\widgets_modal.tpl',
      1 => 1398326626,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129845bd8695d212e97-16931222',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5bd8695d223851_48791962',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd8695d223851_48791962')) {function content_5bd8695d223851_48791962($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'G:\\wamp\\www\\Bootcamp/data/functions\\function.L.php';
?><div id="widgetsModal" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel"><?php echo smarty_function_L(array('key'=>"admin.content.common.tpl.addwidget"),$_smarty_tpl);?>
</h3>
	</div>
	<div class="modal-body">
		<iframe src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/ajax/widgets/choseWidget/"></iframe>
	</div>
</div>	<?php }} ?>
