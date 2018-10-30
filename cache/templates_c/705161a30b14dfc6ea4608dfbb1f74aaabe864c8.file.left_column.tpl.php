<?php /* Smarty version Smarty-3.1.18, created on 2018-10-30 15:23:49
         compiled from "G:\wamp\www\Bootcamp\data\themes\Violet\tpl_common\left_column.tpl" */ ?>
<?php /*%%SmartyHeaderCode:216875bd86975895008-23678479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '705161a30b14dfc6ea4608dfbb1f74aaabe864c8' => 
    array (
      0 => 'G:\\wamp\\www\\Bootcamp\\data\\themes\\Violet\\tpl_common\\left_column.tpl',
      1 => 1401291184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '216875bd86975895008-23678479',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5bd869758b9b31_04176314',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd869758b9b31_04176314')) {function content_5bd869758b9b31_04176314($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'G:\\wamp\\www\\Bootcamp/data/functions\\function.L.php';
if (!is_callable('smarty_function_W')) include 'G:\\wamp\\www\\Bootcamp/data/functions\\function.W.php';
?><div class="box-silver box pad">
	<h2><?php echo smarty_function_L(array('key'=>"editable.front.search"),$_smarty_tpl);?>
</h2>
		<hr>
		<?php echo smarty_function_W(array('name'=>'search','targetPage'=>476),$_smarty_tpl);?>

</div>
<div class="box-silver box pad userlogin-box margin-top logbox">
	<h2><?php echo smarty_function_L(array('key'=>"editable.front.login"),$_smarty_tpl);?>
</h2>
		<hr>
		<?php echo smarty_function_W(array('name'=>'userLogin','registerPage'=>637,'panelPage'=>639),$_smarty_tpl);?>

</div>
<?php }} ?>
