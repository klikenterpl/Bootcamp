<?php /* Smarty version Smarty-3.1.18, created on 2018-10-30 15:25:28
         compiled from "G:\wamp\www\Bootcamp\data\themes\Violet\tpl_views\main_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:277725bd86962e71027-38778018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f837fb1b8af290cfd993ece1ef5beef365be723' => 
    array (
      0 => 'G:\\wamp\\www\\Bootcamp\\data\\themes\\Violet\\tpl_views\\main_page.tpl',
      1 => 1540909524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '277725bd86962e71027-38778018',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5bd8696302f992_51150128',
  'variables' => 
  array (
    'HOME' => 0,
    'pagesDB' => 0,
    'imagesDB' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd8696302f992_51150128')) {function content_5bd8696302f992_51150128($_smarty_tpl) {?><?php if (!is_callable('smarty_function_W')) include 'G:\\wamp\\www\\Bootcamp/data/functions\\function.W.php';
if (!is_callable('smarty_modifier_truncate')) include 'G:\\wamp\\www\\Bootcamp/app/plugins/html/smarty/plugins\\modifier.truncate.php';
if (!is_callable('smarty_function_L')) include 'G:\\wamp\\www\\Bootcamp/data/functions\\function.L.php';
?>
<header>
	<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
">BOOTCAMP</a>
	<nav>
<?php echo smarty_function_W(array('name'=>'menuDroppy'),$_smarty_tpl);?>


	</nav>
</header>

<section class="container">
	<div class="col-md-8">
	<h1>Materiały przykładowe Bootstrap</h1>
	<?php echo smarty_function_W(array('name'=>'commentsNormal'),$_smarty_tpl);?>

	
	</div>
	<div class="col-md-4">
		<h2>Menu Boczne</h2>
		<?php echo smarty_function_W(array('name'=>'newsNormal','newsGroup'=>906,'showAuthor'=>0,'showDate'=>0,'length'=>220,'count'=>4,'width'=>120,'height'=>120,'cssUl'=>"row",'cssLi'=>"col-md-6"),$_smarty_tpl);?>

	</div>
</section>




<!-- 

<div class="container relat mdcontainer">
<?php echo $_smarty_tpl->getSubTemplate ('../tpl_common/top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div class="slider">
		<div class="subslide">
			<?php echo smarty_function_W(array('name'=>'sliderBootstrap','imagesBucket'=>737,'count'=>7,'width'=>1170,'height'=>500,'fit'=>'smart'),$_smarty_tpl);?>

		</div>
	</div>
	<div class="row infobox">
        <div class="col-md-4 gap">
	          <span class="glyphicon glyphicon-search big-icon"></span>
	          <h2><?php echo $_smarty_tpl->tpl_vars['pagesDB']->value->get(742,'name');?>
</h2>
	          <?php $_template = new Smarty_Internal_Template('eval:'.smarty_modifier_truncate($_smarty_tpl->tpl_vars['pagesDB']->value->getContent(742),300), $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?><br/><br/>
	          <p><a class="btn btn-color btn-more" href="#_add_your_url" role="button"><?php echo smarty_function_L(array('key'=>"front.form.more"),$_smarty_tpl);?>
</a></p>
        </div>
        <div class="col-md-4 gap">
	          <span class="glyphicon glyphicon-fire big-icon"></span>
	          <h2><?php echo $_smarty_tpl->tpl_vars['pagesDB']->value->get(740,'name');?>
</h2>
	          <?php $_template = new Smarty_Internal_Template('eval:'.smarty_modifier_truncate($_smarty_tpl->tpl_vars['pagesDB']->value->getContent(740),300), $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?><br/><br/>
	          <p><a class="btn btn-color btn-more" href="#_add_your_url" role="button"><?php echo smarty_function_L(array('key'=>"front.form.more"),$_smarty_tpl);?>
</a></p>
        </div>
        <div class="col-md-4 gap">
	          <span class="glyphicon glyphicon-globe big-icon"></span>
	          <h2><?php echo $_smarty_tpl->tpl_vars['pagesDB']->value->get(741,'name');?>
</h2>
	          <?php $_template = new Smarty_Internal_Template('eval:'.smarty_modifier_truncate($_smarty_tpl->tpl_vars['pagesDB']->value->getContent(741),300), $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?><br/><br/>
	          <p><a class="btn btn-color btn-more" href="#_add_your_url" role="button"><?php echo smarty_function_L(array('key'=>"front.form.more"),$_smarty_tpl);?>
</a></p>
        </div>
    </div>
<div class="mdcontainer">
	<div class="news smnews">
		<div class="center">
			<h1><?php echo smarty_function_L(array('key'=>"editable.front.news"),$_smarty_tpl);?>
</h1>
		</div>
			<div class="container-fluid">
				<?php echo smarty_function_W(array('name'=>'newsNormal','newsGroup'=>745,'showAuthor'=>0,'showDate'=>0,'length'=>220,'count'=>4,'width'=>120,'height'=>120,'cssUl'=>"row",'cssLi'=>"col-md-6"),$_smarty_tpl);?>

			</div>
		<div class="center margin-bottom-lg">
			<a href="#_add_your_url" class="btn btn-lg btn-color btn-purpbig"><?php echo smarty_function_L(array('key'=>"editable.front.news"),$_smarty_tpl);?>
</a>
		</div>
	</div>
</div>	
	<div class="mdcontainer">
		<div class="logos">
			<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['imagesDB']->value->getByBucket(759); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
			    <a href="<?php echo $_smarty_tpl->tpl_vars['image']->value->url;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
image/<?php echo $_smarty_tpl->tpl_vars['image']->value->ekey;?>
/200/150/fit/" alr="strony www"></a>
			<?php } ?>
		</div>
	</div>
	<?php echo $_smarty_tpl->getSubTemplate ('../tpl_common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
 --><?php }} ?>
