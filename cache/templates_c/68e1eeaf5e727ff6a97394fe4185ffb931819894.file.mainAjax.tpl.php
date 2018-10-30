<?php /* Smarty version Smarty-3.1.18, created on 2018-10-30 15:23:26
         compiled from "G:\wamp\www\Bootcamp\app\plugins\admin\templates\mainAjax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180035bd8695e0c6b95-61212054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68e1eeaf5e727ff6a97394fe4185ffb931819894' => 
    array (
      0 => 'G:\\wamp\\www\\Bootcamp\\app\\plugins\\admin\\templates\\mainAjax.tpl',
      1 => 1401297304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180035bd8695e0c6b95-61212054',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cssFile' => 0,
    'HOME' => 0,
    'jsFile' => 0,
    'page_content' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5bd8695e22e309_34627334',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd8695e22e309_34627334')) {function content_5bd8695e22e309_34627334($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<style type="text/css">
		<?php  $_smarty_tpl->tpl_vars['cssFile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cssFile']->_loop = false;
 $_from = resourceManager::loadAdminCSS(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cssFile']->key => $_smarty_tpl->tpl_vars['cssFile']->value) {
$_smarty_tpl->tpl_vars['cssFile']->_loop = true;
?>
			@import url("<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>
");	
		<?php } ?>				        
			@import url("<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
app/plugins/admin/resources/css/ajax.css");    
		</style>
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		
		<script type="text/javascript">
			window.HOME = "<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
";
			window.SUBDIR = "<?php echo @constant('SUBDIR');?>
";
			window.TEMPLATE = "<?php echo config::get('template');?>
";
			window.MAX_UPLOAD_FILE_SIZE = "<?php echo @constant('MAX_UPLOAD_FILE_SIZE');?>
";
		</script>
		
		<?php  $_smarty_tpl->tpl_vars['jsFile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['jsFile']->_loop = false;
 $_from = resourceManager::loadAdminJS(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['jsFile']->key => $_smarty_tpl->tpl_vars['jsFile']->value) {
$_smarty_tpl->tpl_vars['jsFile']->_loop = true;
?>
			<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>
"></script>
		<?php } ?>		

		<title>Windu - Admin</title>
	</head>
<body>
    
	    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['page_content']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
</body> 
</html><?php }} ?>
