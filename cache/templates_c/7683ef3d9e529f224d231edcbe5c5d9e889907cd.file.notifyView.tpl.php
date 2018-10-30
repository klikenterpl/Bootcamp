<?php /* Smarty version Smarty-3.1.18, created on 2018-10-30 15:23:31
         compiled from "G:\wamp\www\Bootcamp\data\widgets\notify\notifyView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:216085bd86963511781-19025028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7683ef3d9e529f224d231edcbe5c5d9e889907cd' => 
    array (
      0 => 'G:\\wamp\\www\\Bootcamp\\data\\widgets\\notify\\notifyView.tpl',
      1 => 1398326626,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '216085bd86963511781-19025028',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5bd869635478e3_54722871',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd869635478e3_54722871')) {function content_5bd869635478e3_54722871($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'G:\\wamp\\www\\Bootcamp/data/functions\\function.L.php';
?><?php if ($_smarty_tpl->tpl_vars['data']->value['notifyMessageNegative']!='') {?>
	<div class="alert alert-error">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<?php echo smarty_function_L(array('key'=>$_smarty_tpl->tpl_vars['data']->value['notifyMessageNegative']),$_smarty_tpl);?>

	</div>
<?php } elseif ($_smarty_tpl->tpl_vars['data']->value['notifyMessagePositive']!='') {?>
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<?php echo smarty_function_L(array('key'=>$_smarty_tpl->tpl_vars['data']->value['notifyMessagePositive']),$_smarty_tpl);?>

	</div>
<?php }?>
<?php }} ?>
