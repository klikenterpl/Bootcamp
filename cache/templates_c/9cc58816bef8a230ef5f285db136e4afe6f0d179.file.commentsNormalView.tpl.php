<?php /* Smarty version Smarty-3.1.18, created on 2018-10-30 15:24:18
         compiled from "G:\wamp\www\Bootcamp\data\widgets\commentsNormal\commentsNormalView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187595bd86992910b30-15405795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cc58816bef8a230ef5f285db136e4afe6f0d179' => 
    array (
      0 => 'G:\\wamp\\www\\Bootcamp\\data\\widgets\\commentsNormal\\commentsNormalView.tpl',
      1 => 1398326624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187595bd86992910b30-15405795',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'comment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5bd86992994a32_03341717',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd86992994a32_03341717')) {function content_5bd86992994a32_03341717($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'G:\\wamp\\www\\Bootcamp/data/functions\\function.L.php';
?><h3><?php echo smarty_function_L(array('key'=>"comments.normal.addcomments"),$_smarty_tpl);?>
</h3>
<div class="box box-comments-form">
	<?php if (empty($_smarty_tpl->tpl_vars['data']->value['user'])&&config::get('commentsLoggedUser')) {?>
		<div class="pad" style="padding-top:0px;">
			<?php echo smarty_function_L(array('key'=>"comments.normal.mustlogin"),$_smarty_tpl);?>

		</div>
	<?php } else { ?>
		<?php echo $_smarty_tpl->tpl_vars['data']->value['form']->toHtml();?>

	<?php }?>
</div>

<?php if ($_smarty_tpl->tpl_vars['data']->value['commentsDB']->fetchCount("bucket=".((string)$_smarty_tpl->tpl_vars['data']->value['bucket'])." and status = 1")>0) {?>
	<h3><?php echo smarty_function_L(array('key'=>"comments.normal.comments"),$_smarty_tpl);?>
</h3>
	<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['commentsDB']->getByBucket($_smarty_tpl->tpl_vars['data']->value['bucket'],"status = 1"); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
	<div class="box box-comments">
		<?php echo $_smarty_tpl->tpl_vars['comment']->value->content;?>

		<div class="box-comments-footer">
			<?php echo $_smarty_tpl->tpl_vars['comment']->value->name;?>
<span class="date"><?php echo $_smarty_tpl->tpl_vars['comment']->value->createTime;?>
</span>
		</div>
	</div>
	<?php } ?>
<?php }?><?php }} ?>
