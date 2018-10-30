<?php /* Smarty version Smarty-3.1.18, created on 2018-10-30 15:23:49
         compiled from "G:\wamp\www\Bootcamp\data\widgets\userLogin\userLoginView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25515bd86975a57ff1-83161684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '077b2358067389bc44c91db80bba1dac1cadbf21' => 
    array (
      0 => 'G:\\wamp\\www\\Bootcamp\\data\\widgets\\userLogin\\userLoginView.tpl',
      1 => 1399463848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25515bd86975a57ff1-83161684',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5bd86975aa38f2_74840495',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd86975aa38f2_74840495')) {function content_5bd86975aa38f2_74840495($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'G:\\wamp\\www\\Bootcamp/data/functions\\function.L.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['data']->value['loggedIn'])) {?>
<div class="pad">
	<?php echo smarty_function_L(array('key'=>"userlogin.tpl.loggedas"),$_smarty_tpl);?>
<br> <strong><?php echo $_smarty_tpl->tpl_vars['data']->value['loggedIn']->email;?>
</strong> <a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
do/logout/"><?php echo smarty_function_L(array('key'=>"userlogin.tpl.logout"),$_smarty_tpl);?>
</a><br>
	
	<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
<?php echo $_smarty_tpl->tpl_vars['data']->value['panelPage'];?>
"><?php echo smarty_function_L(array('key'=>"userlogin.tpl.accsettings"),$_smarty_tpl);?>
</a>
</div>	
<?php } else { ?>
	<?php echo $_smarty_tpl->tpl_vars['data']->value['form']->toHtml();?>

<?php }?>

<?php }} ?>
