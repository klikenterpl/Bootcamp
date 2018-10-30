<?php /* Smarty version Smarty-3.1.18, created on 2018-10-30 15:23:49
         compiled from "G:\wamp\www\Bootcamp\data\themes\Violet\tpl_views\simple_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:274735bd86975735300-98790800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08640eb8d8249beca26b1e05faef1329bf3c9946' => 
    array (
      0 => 'G:\\wamp\\www\\Bootcamp\\data\\themes\\Violet\\tpl_views\\simple_page.tpl',
      1 => 1540909036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '274735bd86975735300-98790800',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOME' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5bd869757eef37_37185869',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd869757eef37_37185869')) {function content_5bd869757eef37_37185869($_smarty_tpl) {?><?php if (!is_callable('smarty_function_W')) include 'G:\\wamp\\www\\Bootcamp/data/functions\\function.W.php';
?>
<header>
	<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
">BOOTCAMP</a>
	<nav>
<?php echo smarty_function_W(array('name'=>'menuDroppy'),$_smarty_tpl);?>

	</nav>
</header>

<content>
<section>
	<div class="span8">
		<h1><?php echo $_smarty_tpl->tpl_vars['page']->value->name;?>
</h1>
	<?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['page']->value->content, $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>
	</div>
	<div class="span4">
		<?php echo smarty_function_W(array('name'=>'newsNormal','newsGroup'=>745,'showAuthor'=>0,'showDate'=>0,'length'=>220,'count'=>4,'width'=>120,'height'=>120,'cssUl'=>"row",'cssLi'=>"col-md-6"),$_smarty_tpl);?>

	</div>

</section>
</content>
<!-- <div class="container relat mdcontainer">
	<?php echo $_smarty_tpl->getSubTemplate ('../tpl_common/top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
	
	<div class="row simplerow">
		<div class="col-md-4 hidden-xs hidden-sm">
			<?php echo $_smarty_tpl->getSubTemplate ('../tpl_common/left_column.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
				
		</div>
		<div class="col-md-8 gal">
		 	<div class="pad">
		 		<h2><?php echo $_smarty_tpl->tpl_vars['page']->value->name;?>
</h2>
		 			<?php echo smarty_function_W(array('name'=>'navigation','page'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>

					<?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['page']->value->content, $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>
			</div>
		</div>
	</div>
	<?php echo $_smarty_tpl->getSubTemplate ('../tpl_common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div> --><?php }} ?>
