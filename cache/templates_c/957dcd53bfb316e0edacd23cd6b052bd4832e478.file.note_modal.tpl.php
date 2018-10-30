<?php /* Smarty version Smarty-3.1.18, created on 2018-10-30 15:23:24
         compiled from "G:\wamp\www\Bootcamp\app\plugins\admin\templates\common\note_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124515bd8695c358832-33172755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '957dcd53bfb316e0edacd23cd6b052bd4832e478' => 
    array (
      0 => 'G:\\wamp\\www\\Bootcamp\\app\\plugins\\admin\\templates\\common\\note_modal.tpl',
      1 => 1398326624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124515bd8695c358832-33172755',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5bd8695c3624d9_47551572',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd8695c3624d9_47551572')) {function content_5bd8695c3624d9_47551572($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'G:\\wamp\\www\\Bootcamp/data/functions\\function.L.php';
?><div id="notesModal" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel"><?php echo smarty_function_L(array('key'=>"admin.modal.common.tpl.notes"),$_smarty_tpl);?>
</h3>
	</div>
	<div class="modal-body" id="noteModalIframe">
		
	</div>
</div>	<?php }} ?>
