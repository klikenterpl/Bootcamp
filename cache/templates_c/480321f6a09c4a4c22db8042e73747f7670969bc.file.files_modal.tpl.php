<?php /* Smarty version Smarty-3.1.18, created on 2018-10-30 15:23:25
         compiled from "G:\wamp\www\Bootcamp\app\plugins\admin\templates\common\files_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:226735bd8695d22d607-79613861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '480321f6a09c4a4c22db8042e73747f7670969bc' => 
    array (
      0 => 'G:\\wamp\\www\\Bootcamp\\app\\plugins\\admin\\templates\\common\\files_modal.tpl',
      1 => 1398326626,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '226735bd8695d22d607-79613861',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'REQUEST' => 0,
    'HOME' => 0,
    'bucket' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5bd8695d254184_58250906',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd8695d254184_58250906')) {function content_5bd8695d254184_58250906($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'G:\\wamp\\www\\Bootcamp/data/functions\\function.L.php';
?><?php if ($_smarty_tpl->tpl_vars['REQUEST']->value->getVariable('id')=='') {?><?php if (isset($_smarty_tpl->tpl_vars['bucket'])) {$_smarty_tpl->tpl_vars['bucket'] = clone $_smarty_tpl->tpl_vars['bucket'];
$_smarty_tpl->tpl_vars['bucket']->value = 'main'; $_smarty_tpl->tpl_vars['bucket']->nocache = null; $_smarty_tpl->tpl_vars['bucket']->scope = 0;
} else $_smarty_tpl->tpl_vars['bucket'] = new Smarty_variable('main', null, 0);?><?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['bucket'])) {$_smarty_tpl->tpl_vars['bucket'] = clone $_smarty_tpl->tpl_vars['bucket'];
$_smarty_tpl->tpl_vars['bucket']->value = $_smarty_tpl->tpl_vars['REQUEST']->value->getVariable('id'); $_smarty_tpl->tpl_vars['bucket']->nocache = null; $_smarty_tpl->tpl_vars['bucket']->scope = 0;
} else $_smarty_tpl->tpl_vars['bucket'] = new Smarty_variable($_smarty_tpl->tpl_vars['REQUEST']->value->getVariable('id'), null, 0);?><?php }?>
<div id="filesModal" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel"><?php echo smarty_function_L(array('key'=>"admin.content.common.tpl.addfiles"),$_smarty_tpl);?>
</h3>
	</div>
	<div class="modal-body">
		<iframe src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/ajax/files/modalUploader/<?php echo $_smarty_tpl->tpl_vars['bucket']->value;?>
/"></iframe>
	</div>
</div>	<?php }} ?>
