<?php /* Smarty version Smarty-3.1.18, created on 2018-10-30 15:23:31
         compiled from "G:\wamp\www\Bootcamp\data\widgets\newsNormal\newsNormalView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116105bd869631f9ab6-00363266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddc2d4b1eaccad91f0cd63fa9916e7a792fbf9a4' => 
    array (
      0 => 'G:\\wamp\\www\\Bootcamp\\data\\widgets\\newsNormal\\newsNormalView.tpl',
      1 => 1400585448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116105bd869631f9ab6-00363266',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'data' => 0,
    'HOME' => 0,
    'news' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5bd869634cd351_26215215',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd869634cd351_26215215')) {function content_5bd869634cd351_26215215($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'G:\\wamp\\www\\Bootcamp/app/plugins/html/smarty/plugins\\modifier.truncate.php';
if (!is_callable('smarty_function_L')) include 'G:\\wamp\\www\\Bootcamp/data/functions\\function.L.php';
?><?php if (!isset($_smarty_tpl->tpl_vars['params']->value['count'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['count'] = config::get('newsCount');?><?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['length'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['length'] = config::get('newsLength');?><?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['lengthTitle'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['lengthTitle'] = config::get('newsLengthTitle');?><?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['width'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['width'] = config::get('imgSmallWidth');?><?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['height'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['height'] = config::get('imgSmallHeight');?><?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['span'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['span'] = config::get('newsSpan');?><?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['btncss'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['btncss'] = config::get('newsBtnCssClass');?><?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['cssUl'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['cssUl'] = 'newsNormal';?><?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['cssLi'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['cssLi'] = '';?><?php }?>

<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['showDate'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['showDate'] = true;?><?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['showAuthor'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['showAuthor'] = true;?><?php }?>

<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['showTitle'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['showTitle'] = true;?><?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['showContent'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['showContent'] = true;?><?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['showImg'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['showImg'] = true;?><?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['showMore'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['showMore'] = false;?><?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['startNews'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['startNews'] = 0;?><?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['fit'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['fit'] = 'smart';?><?php }?>

<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['news'])) {?><?php if (isset($_smarty_tpl->tpl_vars['newsList'])) {$_smarty_tpl->tpl_vars['newsList'] = clone $_smarty_tpl->tpl_vars['newsList'];
$_smarty_tpl->tpl_vars['newsList']->value = $_smarty_tpl->tpl_vars['data']->value['pagesDB']->getNews($_smarty_tpl->tpl_vars['params']->value['newsGroup'],$_smarty_tpl->tpl_vars['params']->value['count'],$_smarty_tpl->tpl_vars['params']->value['startNews']); $_smarty_tpl->tpl_vars['newsList']->nocache = null; $_smarty_tpl->tpl_vars['newsList']->scope = 0;
} else $_smarty_tpl->tpl_vars['newsList'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value['pagesDB']->getNews($_smarty_tpl->tpl_vars['params']->value['newsGroup'],$_smarty_tpl->tpl_vars['params']->value['count'],$_smarty_tpl->tpl_vars['params']->value['startNews']), null, 0);?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['newsList'])) {$_smarty_tpl->tpl_vars['newsList'] = clone $_smarty_tpl->tpl_vars['newsList'];
$_smarty_tpl->tpl_vars['newsList']->value = $_smarty_tpl->tpl_vars['params']->value['news']; $_smarty_tpl->tpl_vars['newsList']->nocache = null; $_smarty_tpl->tpl_vars['newsList']->scope = 0;
} else $_smarty_tpl->tpl_vars['newsList'] = new Smarty_variable($_smarty_tpl->tpl_vars['params']->value['news'], null, 0);?><?php }?>

<ul class="<?php echo $_smarty_tpl->tpl_vars['params']->value['cssUl'];?>
">
<?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['news']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['pagesDB']->getNews($_smarty_tpl->tpl_vars['params']->value['newsGroup'],$_smarty_tpl->tpl_vars['params']->value['count'],$_smarty_tpl->tpl_vars['params']->value['startNews']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->_loop = true;
?>
  <li class="<?php echo $_smarty_tpl->tpl_vars['params']->value['cssLi'];?>
">
  <?php if ($_smarty_tpl->tpl_vars['params']->value['showMore']==false) {?><a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
<?php echo $_smarty_tpl->tpl_vars['news']->value->urlKey;?>
"><?php }?>
  	<?php if (pagesDB::getMainImageEkey($_smarty_tpl->tpl_vars['news']->value->id)!=null&&$_smarty_tpl->tpl_vars['params']->value['showImg']) {?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
<?php echo $_smarty_tpl->tpl_vars['news']->value->urlKey;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
image/<?php echo pagesDB::getMainImageEkey($_smarty_tpl->tpl_vars['news']->value->id);?>
/<?php echo $_smarty_tpl->tpl_vars['params']->value['width'];?>
/<?php echo $_smarty_tpl->tpl_vars['params']->value['height'];?>
/<?php echo $_smarty_tpl->tpl_vars['params']->value['fit'];?>
/" class="pull-left img-margin"></a>
    <?php }?>  
      
    <?php if ($_smarty_tpl->tpl_vars['params']->value['showTitle']) {?><h4><a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
<?php echo $_smarty_tpl->tpl_vars['news']->value->urlKey;?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['news']->value->name,$_smarty_tpl->tpl_vars['params']->value['lengthTitle']);?>
</a></h4><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['showAuthor']||$_smarty_tpl->tpl_vars['params']->value['showDate']) {?>
	    <p class="newsNormal-meta">
	    	<?php if ($_smarty_tpl->tpl_vars['params']->value['showAuthor']) {?><span class="label margin-right"><?php echo $_smarty_tpl->tpl_vars['data']->value['usersDB']->get($_smarty_tpl->tpl_vars['news']->value->authorId,'username');?>
</span><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['params']->value['showDate']) {?><?php echo $_smarty_tpl->tpl_vars['news']->value->date;?>
<?php }?>
		</p>
	<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['showContent']) {?><p><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['news']->value->content),$_smarty_tpl->tpl_vars['params']->value['length']);?>
</p><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['showMore']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
<?php echo $_smarty_tpl->tpl_vars['news']->value->urlKey;?>
" class="<?php echo $_smarty_tpl->tpl_vars['params']->value['btncss'];?>
"><?php echo smarty_function_L(array('key'=>"news.normal.more"),$_smarty_tpl);?>
</a><?php }?>
  <?php if ($_smarty_tpl->tpl_vars['params']->value['showMore']==false) {?></a><?php }?>  
  </li>
<?php } ?>
</ul><?php }} ?>
