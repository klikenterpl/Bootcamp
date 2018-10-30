<?php /* Smarty version Smarty-3.1.18, created on 2018-10-30 15:23:31
         compiled from "G:\wamp\www\Bootcamp\data\themes\Violet\tpl_common\top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:275315bd869634e3248-96948218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33637de2bd81d31c4faf0320b9704ab2d5eea74c' => 
    array (
      0 => 'G:\\wamp\\www\\Bootcamp\\data\\themes\\Violet\\tpl_common\\top.tpl',
      1 => 1401291184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '275315bd869634e3248-96948218',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOME' => 0,
    'TEMPLATE_HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5bd86963500217_36214364',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd86963500217_36214364')) {function content_5bd86963500217_36214364($_smarty_tpl) {?><?php if (!is_callable('smarty_function_W')) include 'G:\\wamp\\www\\Bootcamp/data/functions\\function.W.php';
?><div class="top">	
		<?php echo smarty_function_W(array('name'=>'notify'),$_smarty_tpl);?>
	
	<div class="container-fluid">
		<div class="row">
		    <div class="col-md-1 drplang">
		    	<?php echo smarty_function_W(array('name'=>'languageDropDownBox'),$_smarty_tpl);?>

		    </div>
		    	<div class="col-md-3 topmn">
					<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
" class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_HOME']->value;?>
/img/logo2.png"></a>
		    	</div>	 
	         <div class="col-md-8 clm7">
	        	<div class="dropcl">
					<?php echo smarty_function_W(array('name'=>'menuDroppy'),$_smarty_tpl);?>

				</div>
	        </div>	   
		</div>     
	</div>
</div>
	
<?php }} ?>
