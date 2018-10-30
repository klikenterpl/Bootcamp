<?php /* Smarty version Smarty-3.1.18, created on 2018-10-30 15:23:26
         compiled from "G:\wamp\www\Bootcamp\app\plugins\admin\templates\common\widget_icons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:315815bd8695e224b06-86058577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44e55c695c5e7392af8150e8bd954fde46afbb86' => 
    array (
      0 => 'G:\\wamp\\www\\Bootcamp\\app\\plugins\\admin\\templates\\common\\widget_icons.tpl',
      1 => 1398326626,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '315815bd8695e224b06-86058577',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'themename' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5bd8695e2c3c42_12064320',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd8695e2c3c42_12064320')) {function content_5bd8695e2c3c42_12064320($_smarty_tpl) {?>	<?php if (preg_match('/menuu*/',$_smarty_tpl->tpl_vars['themename']->value)) {?>
    	<i class="color-icons icons-property icon-margin"> </i>
    <?php } elseif (preg_match('/sliderr*/',$_smarty_tpl->tpl_vars['themename']->value)) {?>	
    	<i class="color-icons icons-projection-screen icon-margin"> </i>	
    <?php } elseif (preg_match('/search*/',$_smarty_tpl->tpl_vars['themename']->value)) {?>	
    	<i class="color-icons icons-magnifier-medium icon-margin"> </i>	
    <?php } elseif (preg_match('/user*/',$_smarty_tpl->tpl_vars['themename']->value)) {?>	
    	<i class="color-icons icons-user-gray icon-margin"> </i>	
    <?php } elseif (preg_match('/tags*/',$_smarty_tpl->tpl_vars['themename']->value)) {?>	
    	<i class="color-icons icons-price-tag icon-margin"> </i>	
    <?php } elseif (preg_match('/content*/',$_smarty_tpl->tpl_vars['themename']->value)) {?>	
    	<i class="color-icons icons-clipboard-text icon-margin"> </i>			    			    			    			    	
    <?php } else { ?>
    	<i class="color-icons icons-rocket icon-margin"> </i>	
	<?php }?>      	
<?php }} ?>
