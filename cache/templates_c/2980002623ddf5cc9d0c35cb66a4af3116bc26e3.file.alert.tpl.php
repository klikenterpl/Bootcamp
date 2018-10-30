<?php /* Smarty version Smarty-3.1.18, created on 2018-10-30 15:23:24
         compiled from "G:\wamp\www\Bootcamp\app\plugins\admin\templates\common\alert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40005bd8695c36d9b1-50529834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2980002623ddf5cc9d0c35cb66a4af3116bc26e3' => 
    array (
      0 => 'G:\\wamp\\www\\Bootcamp\\app\\plugins\\admin\\templates\\common\\alert.tpl',
      1 => 1398326624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40005bd8695c36d9b1-50529834',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'REQUEST' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5bd8695c3bd907_99949016',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd8695c3bd907_99949016')) {function content_5bd8695c3bd907_99949016($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'G:\\wamp\\www\\Bootcamp/data/functions\\function.L.php';
?><?php if ($_smarty_tpl->tpl_vars['REQUEST']->value->getVariable('mp')!=null) {?>
<div class="alert-top alert-popup alert-popup-green">
	<strong><i class="icon-ok "></i>&nbsp;&nbsp;<?php echo smarty_function_L(array('key'=>$_smarty_tpl->tpl_vars['REQUEST']->value->getVariable('mp')),$_smarty_tpl);?>
</strong>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['REQUEST']->value->getVariable('mn')!=null) {?>
<div class="alert-top alert-popup alert-popup-red">
	<strong><i class="fa fa-times-circle "></i>&nbsp;&nbsp;<?php echo smarty_function_L(array('key'=>$_smarty_tpl->tpl_vars['REQUEST']->value->getVariable('mn')),$_smarty_tpl);?>
</strong>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['REQUEST']->value->getVariable('mi')!=null) {?>
<div class="alert-top alert-popup alert-popup-blue">
	<strong><i class="fa fa-info-circle "></i>&nbsp;&nbsp;<?php echo smarty_function_L(array('key'=>$_smarty_tpl->tpl_vars['REQUEST']->value->getVariable('mi')),$_smarty_tpl);?>
</strong>
</div>
<?php }?>
<div class="alert-top alert-popup alert-popup-green" style="display:none;">
	<strong><i class="icon-ok "></i>&nbsp;&nbsp;<?php echo smarty_function_L(array('key'=>'admin.message.success'),$_smarty_tpl);?>
</strong>
</div>
<div class="alert-top-autosave alert-popup alert-popup-green" style="display:none;">
	<strong><i class="icon-ok "></i>&nbsp;&nbsp;<?php echo smarty_function_L(array('key'=>'admin.message.success.autosave'),$_smarty_tpl);?>
</strong>
</div>


<?php }} ?>
