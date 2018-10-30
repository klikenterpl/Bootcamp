<?php /* Smarty version Smarty-3.1.18, created on 2018-10-30 15:23:30
         compiled from "G:\wamp\www\Bootcamp\data\themes\Violet\tpl_main\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182875bd86962dbe7a9-01431413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50f0a571019f994b46c8f85d2999f4ce3ef1763b' => 
    array (
      0 => 'G:\\wamp\\www\\Bootcamp\\data\\themes\\Violet\\tpl_main\\main.tpl',
      1 => 1540907515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182875bd86962dbe7a9-01431413',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'meta' => 0,
    'cssFile' => 0,
    'lessFile' => 0,
    'HOME' => 0,
    'jsFile' => 0,
    'pageTpl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5bd86962e2f7e4_09831878',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd86962e2f7e4_09831878')) {function content_5bd86962e2f7e4_09831878($_smarty_tpl) {?><!doctype html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">    
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="robots" content="INDEX, FOLLOW">
        <meta name="GOOGLEBOT" content="INDEX, FOLLOW">
        <meta name="revisit-after" content="7 days">
        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['meta']->value->description;?>
">
        <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['meta']->value->keywords;?>
">
        <meta name="copyright" content="Copyright (c) Bootstrap">
        <meta name="distribution" content="global">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>      
		<?php  $_smarty_tpl->tpl_vars['cssFile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cssFile']->_loop = false;
 $_from = resourceManager::loadFrontCSS(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cssFile']->key => $_smarty_tpl->tpl_vars['cssFile']->value) {
$_smarty_tpl->tpl_vars['cssFile']->_loop = true;
?>
			<link rel='stylesheet' type='text/css' href='<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>
'>
		<?php } ?>	
		<?php  $_smarty_tpl->tpl_vars['lessFile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lessFile']->_loop = false;
 $_from = resourceManager::loadFrontLESS(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lessFile']->key => $_smarty_tpl->tpl_vars['lessFile']->value) {
$_smarty_tpl->tpl_vars['lessFile']->_loop = true;
?>
			<link rel='stylesheet/less' type='text/css' href='<?php echo $_smarty_tpl->tpl_vars['lessFile']->value;?>
'>
		<?php } ?>
		<script type="text/javascript">
			window.HOME = "<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
";
			window.TEMPLATE = "<?php echo config::get('template');?>
";
		</script>	
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<?php  $_smarty_tpl->tpl_vars['jsFile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['jsFile']->_loop = false;
 $_from = resourceManager::loadFrontJS(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['jsFile']->key => $_smarty_tpl->tpl_vars['jsFile']->value) {
$_smarty_tpl->tpl_vars['jsFile']->_loop = true;
?>
			<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>
"></script>
		<?php } ?>
		<title><?php echo $_smarty_tpl->tpl_vars['meta']->value->title;?>
</title>
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	</head>
<body>
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['pageTpl']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body> 
</html><?php }} ?>
