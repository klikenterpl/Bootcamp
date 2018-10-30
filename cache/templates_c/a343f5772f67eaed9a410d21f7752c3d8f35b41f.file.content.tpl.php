<?php /* Smarty version Smarty-3.1.18, created on 2018-10-30 15:23:24
         compiled from "G:\wamp\www\Bootcamp\app\plugins\admin\templates\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133115bd8695c973058-31772018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a343f5772f67eaed9a410d21f7752c3d8f35b41f' => 
    array (
      0 => 'G:\\wamp\\www\\Bootcamp\\app\\plugins\\admin\\templates\\content.tpl',
      1 => 1398326624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133115bd8695c973058-31772018',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'subpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5bd8695ca21789_58124913',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd8695ca21789_58124913')) {function content_5bd8695ca21789_58124913($_smarty_tpl) {?>  	<div class="tabbable">
	  <div class="tab-content">
	    <?php if ($_smarty_tpl->tpl_vars['subpage']->value=='help') {?>
	    	<?php echo $_smarty_tpl->getSubTemplate ('common/help.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('ekey'=>lang::read('admin.help.content')), 0);?>
 
	    <?php } elseif ($_smarty_tpl->tpl_vars['subpage']->value=='pages') {?>		  
     		<?php echo $_smarty_tpl->getSubTemplate ('common/pages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	    <?php } elseif ($_smarty_tpl->tpl_vars['subpage']->value=='lang') {?>
		    <?php if (!usersDB::isNoob()) {?>
		    	<?php echo $_smarty_tpl->getSubTemplate ('common/lang.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		    <?php }?>
	    <?php } elseif ($_smarty_tpl->tpl_vars['subpage']->value=='trash') {?>
			<?php echo $_smarty_tpl->getSubTemplate ('common/trash.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	    <?php } elseif ($_smarty_tpl->tpl_vars['subpage']->value=='files') {?>
			<div class="row-fluid">
				<?php echo $_smarty_tpl->getSubTemplate ('common/files.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</div> 	      		
	    <?php } elseif ($_smarty_tpl->tpl_vars['subpage']->value=='images') {?>
			<div class="row-fluid">
				<?php echo $_smarty_tpl->getSubTemplate ('common/images.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</div> 	      		
	    <?php } elseif ($_smarty_tpl->tpl_vars['subpage']->value=='banners') {?>
	    	<?php if (license::hasPro('')) {?>
	    		<?php echo $_smarty_tpl->getSubTemplate ('common/plus/banners.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	    	<?php } else { ?>
	    		<?php echo $_smarty_tpl->getSubTemplate ('common/goPro.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
	    	<?php }?>
	    <?php } elseif ($_smarty_tpl->tpl_vars['subpage']->value=='polls') {?>
	    	<?php if (license::hasPro('')) {?>
	    		<?php echo $_smarty_tpl->getSubTemplate ('common/plus/polls.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	    	<?php } else { ?>
	    		<?php echo $_smarty_tpl->getSubTemplate ('common/goPro.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
	    	<?php }?>
	    <?php } elseif ($_smarty_tpl->tpl_vars['subpage']->value=='calendar') {?>
	    	<?php if (license::hasPro('')) {?>
	    		<?php echo $_smarty_tpl->getSubTemplate ('common/plus/calendar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	    	<?php } else { ?>
	    		<?php echo $_smarty_tpl->getSubTemplate ('common/goPro.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
	    	<?php }?>
	    <?php } elseif ($_smarty_tpl->tpl_vars['subpage']->value=='autosave') {?>
    		<?php echo $_smarty_tpl->getSubTemplate ('common/autosave.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 	    <?php } elseif ($_smarty_tpl->tpl_vars['subpage']->value=='config') {?>
			<?php echo $_smarty_tpl->getSubTemplate ('common/config.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'content'), 0);?>
		
	    <?php }?>	    	            	        	    
	  </div>
	</div><?php }} ?>
