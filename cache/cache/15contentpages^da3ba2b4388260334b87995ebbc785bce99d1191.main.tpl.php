<?php /*%%SmartyHeaderCode:128935bd8695b805252-47501044%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da3ba2b4388260334b87995ebbc785bce99d1191' => 
    array (
      0 => 'G:\\wamp\\www\\Bootcamp\\app\\plugins\\admin\\templates\\main.tpl',
      1 => 1401126420,
      2 => 'file',
    ),
    '3cd09728bc3f66a62c1035f52df6d4632df27303' => 
    array (
      0 => 'G:\\wamp\\www\\Bootcamp\\app\\plugins\\admin\\templates\\common\\page_menu.tpl',
      1 => 1400170750,
      2 => 'file',
    ),
    '957dcd53bfb316e0edacd23cd6b052bd4832e478' => 
    array (
      0 => 'G:\\wamp\\www\\Bootcamp\\app\\plugins\\admin\\templates\\common\\note_modal.tpl',
      1 => 1398326624,
      2 => 'file',
    ),
    '2980002623ddf5cc9d0c35cb66a4af3116bc26e3' => 
    array (
      0 => 'G:\\wamp\\www\\Bootcamp\\app\\plugins\\admin\\templates\\common\\alert.tpl',
      1 => 1398326624,
      2 => 'file',
    ),
    '4947850c913dbb85a35af9dc846599fbfc4f8dc2' => 
    array (
      0 => 'G:\\wamp\\www\\Bootcamp\\app\\plugins\\admin\\templates\\common\\top_right_buttons.tpl',
      1 => 1401126696,
      2 => 'file',
    ),
    '4e23edef7240208bd407cf568528685d00b3c55c' => 
    array (
      0 => 'G:\\wamp\\www\\Bootcamp\\app\\plugins\\admin\\templates\\common\\tabs.tpl',
      1 => 1398326624,
      2 => 'file',
    ),
    'a343f5772f67eaed9a410d21f7752c3d8f35b41f' => 
    array (
      0 => 'G:\\wamp\\www\\Bootcamp\\app\\plugins\\admin\\templates\\content.tpl',
      1 => 1398326624,
      2 => 'file',
    ),
    'dba444e30651a22d68d5fa1be1e91c1a6ffc0179' => 
    array (
      0 => 'G:\\wamp\\www\\Bootcamp\\app\\plugins\\admin\\templates\\common\\pages.tpl',
      1 => 1398326626,
      2 => 'file',
    ),
    '15b3485553130de76dd403f973c8923a850d82a5' => 
    array (
      0 => 'G:\\wamp\\www\\Bootcamp\\app\\plugins\\admin\\templates\\common\\content_list.tpl',
      1 => 1400613014,
      2 => 'file',
    ),
    '602a54a438dfbfbfbb4b4453512f8e30d8b8317a' => 
    array (
      0 => 'G:\\wamp\\www\\Bootcamp\\app\\plugins\\admin\\templates\\common\\content_list_icon.tpl',
      1 => 1400613728,
      2 => 'file',
    ),
    'e729a689f1b7e07eac5ac5f807758dae51249c4f' => 
    array (
      0 => 'G:\\wamp\\www\\Bootcamp\\app\\plugins\\admin\\templates\\common\\images_modal.tpl',
      1 => 1398326624,
      2 => 'file',
    ),
    'e72f75c0f49b08be0da916c8c7ec5b69b0e78654' => 
    array (
      0 => 'G:\\wamp\\www\\Bootcamp\\app\\plugins\\admin\\templates\\common\\widgets_modal.tpl',
      1 => 1398326626,
      2 => 'file',
    ),
    '480321f6a09c4a4c22db8042e73747f7670969bc' => 
    array (
      0 => 'G:\\wamp\\www\\Bootcamp\\app\\plugins\\admin\\templates\\common\\files_modal.tpl',
      1 => 1398326626,
      2 => 'file',
    ),
    '95a3e2068a0a6469f9abb08665cd84ef9d8a0df7' => 
    array (
      0 => 'G:\\wamp\\www\\Bootcamp\\app\\plugins\\admin\\templates\\common\\customfields_modal.tpl',
      1 => 1398326624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128935bd8695b805252-47501044',
  'variables' => 
  array (
    'cssFile' => 0,
    'HOME' => 0,
    'jsFile' => 0,
    'loggedIn' => 1,
    'configPomName' => 1,
    'bg' => 1,
    'loggedUser' => 1,
    'pins' => 1,
    'page_content' => 1,
    'SITE_PATH' => 1,
    'REQUEST' => 1,
    'icon' => 0,
    'lang' => 0,
    'pagesDB' => 0,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5bd8695d8ac228_39512634',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd8695d8ac228_39512634')) {function content_5bd8695d8ac228_39512634($_smarty_tpl) {?><?php $_smarty = $_smarty_tpl->smarty; if (!is_callable('smarty_function_L')) include 'G:\\wamp\\www\\Bootcamp/data/functions\\function.L.php';
?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
					<link rel="stylesheet" href="http://localhost/Bootcamp/app/resources/bootstrap/css/bootstrap.min.css?ver=2040">
					<link rel="stylesheet" href="http://localhost/Bootcamp/app/plugins/admin/resources/css/bootstrap-extends.css?ver=2040">
					<link rel="stylesheet" href="http://localhost/Bootcamp/app/resources/css/font-awesome.min.css?ver=2040">
					<link rel="stylesheet" href="http://localhost/Bootcamp/app/resources/css/icons.css?ver=2040">
					<link rel="stylesheet" href="http://localhost/Bootcamp/app/plugins/html/resources/datepicker/datepicker.css?ver=2040">
					<link rel="stylesheet" href="http://localhost/Bootcamp/app/plugins/html/resources/datetimepicker/datetimepicker.css?ver=2040">
					<link rel="stylesheet" href="http://localhost/Bootcamp/app/plugins/image/resources/blueimp-jQuery-File-Upload/css/jquery.fileupload-ui.css?ver=2040">
					<link rel="stylesheet" href="http://localhost/Bootcamp/app/plugins/html/resources/codemirror/lib/codemirror.css?ver=2040">
					<link rel="stylesheet" href="http://localhost/Bootcamp/app/plugins/html/resources/select2/select2.css?ver=2040">
					<link rel="stylesheet" href="http://localhost/Bootcamp/app/plugins/admin/resources/css/admin.css?ver=2040">
								           
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		
		<script type="text/javascript">
			window.HOME = "http://localhost/Bootcamp/";
			window.SUBDIR = "/Bootcamp/";
			window.TEMPLATE = "Violet";
			window.MAX_UPLOAD_FILE_SIZE = "2000000";
		</script>
					<script type="text/javascript" src="http://localhost/Bootcamp/app/resources/js/jquery.js?ver=2040"></script>
					<script type="text/javascript" src="http://localhost/Bootcamp/app/resources/js/jquery-ui.js?ver=2040"></script>
					<script type="text/javascript" src="http://localhost/Bootcamp/app/resources/js/jquery.validate.js?ver=2040"></script>
					<script type="text/javascript" src="http://localhost/Bootcamp/app/resources/js/jquery.cookie.js?ver=2040"></script>
					<script type="text/javascript" src="http://localhost/Bootcamp/app/resources/bootstrap/js/bootstrap.min.js?ver=2040"></script>
					<script type="text/javascript" src="http://localhost/Bootcamp/app/plugins/admin/resources/js/jquery.ui.nestedSortable.js?ver=2040"></script>
					<script type="text/javascript" src="http://localhost/Bootcamp/app/plugins/admin/resources/js/jquery.ui.nestedSortable.getOrderPlugin.js?ver=2040"></script>
					<script type="text/javascript" src="http://localhost/Bootcamp/app/plugins/admin/resources/js/jquery.tablesorter.min.js?ver=2040"></script>
					<script type="text/javascript" src="http://localhost/Bootcamp/app/plugins/admin/resources/js/sortable.js?ver=2040"></script>
					<script type="text/javascript" src="http://localhost/Bootcamp/app/plugins/admin/resources/js/admin.js?ver=2040"></script>
				
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<!--[if gte IE 8]><script src="http://localhost/Bootcamp/image/resources/blueimp-jQuery-File-Upload/js/cors/jquery.xdr-transport.js"></script><![endif]-->
		<title>WinduCMS - Admin</title>
	</head>

    <?php if (isset($_smarty_tpl->tpl_vars['bg'])) {$_smarty_tpl->tpl_vars['bg'] = clone $_smarty_tpl->tpl_vars['bg'];
$_smarty_tpl->tpl_vars['bg']->value = config::get("backgroundAdmin".((string)$_smarty_tpl->tpl_vars['loggedIn']->value->id)); $_smarty_tpl->tpl_vars['bg']->nocache = true; $_smarty_tpl->tpl_vars['bg']->scope = 0;
} else $_smarty_tpl->tpl_vars['bg'] = new Smarty_variable(config::get("backgroundAdmin".((string)$_smarty_tpl->tpl_vars['loggedIn']->value->id)), true, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars['configPomName'])) {$_smarty_tpl->tpl_vars['configPomName'] = clone $_smarty_tpl->tpl_vars['configPomName'];
$_smarty_tpl->tpl_vars['configPomName']->value = "pins-".((string)$_smarty_tpl->tpl_vars['loggedIn']->value->id); $_smarty_tpl->tpl_vars['configPomName']->nocache = true; $_smarty_tpl->tpl_vars['configPomName']->scope = 0;
} else $_smarty_tpl->tpl_vars['configPomName'] = new Smarty_variable("pins-".((string)$_smarty_tpl->tpl_vars['loggedIn']->value->id), true, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars['pins'])) {$_smarty_tpl->tpl_vars['pins'] = clone $_smarty_tpl->tpl_vars['pins'];
$_smarty_tpl->tpl_vars['pins']->value = unserialize(config::get($_smarty_tpl->tpl_vars['configPomName']->value)); $_smarty_tpl->tpl_vars['pins']->nocache = true; $_smarty_tpl->tpl_vars['pins']->scope = 0;
} else $_smarty_tpl->tpl_vars['pins'] = new Smarty_variable(unserialize(config::get($_smarty_tpl->tpl_vars['configPomName']->value)), true, 0);?>

    <body <?php if ($_smarty_tpl->tpl_vars['bg']->value!=null) {?>style="background-color: #<?php echo $_smarty_tpl->tpl_vars['bg']->value;?>
"<?php }?>>
        <noscript><div class="alert">Your browser does not support JavaScript!</div></noscript>
        <?php echo $_smarty_tpl->getSubTemplate ('common/note_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="alert-waiting alert-popup alert-popup-blue"><img src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
app/plugins/admin/resources/img/ajax-loader.gif" style="margin-top:2px;"></div>
        <?php echo $_smarty_tpl->getSubTemplate ('common/alert.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div id="container" <?php if (config::get("smallSidebar".((string)$_smarty_tpl->tpl_vars['loggedUser']->value->id))==1) {?>class="sidebar-small"<?php }?>>
            <div id="sidebar">

                <center>
	<a href="http://localhost/Bootcamp/admin/" class="mobileHidden logo"><img src="http://localhost/Bootcamp/app/plugins/admin/resources/img/logo-icon.png" ></a>
</center>
<a href="#" onclick="
	$( '#sidebar').toggle();
	$('#content').toggleClass('mobileHidden');
	$( '.smallTopNav').toggle();"
	class="noMobileHidden slideButton" style="display:block;">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
<ul class="menu accordion" id="leftMenu">
		<li class="accordion-group active">
	    <div class="accordion-heading">
	      <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#leftMenuContent">
	        <i class="fa fa-file-text "> </i> <span class="menu-description">Treść</span>
	      </a>
	    </div>	
	    <div id="leftMenuContent" class="accordion-body collapse in">
      		<div class="accordion-inner">
				<ul>
				    <li class="active"><a href="http://localhost/Bootcamp/admin/content/pages/"><i class="color-icons icons-clipboard-list icon-margin"> </i><span class="menu-description">Podstrony</span></a></li>				   	<li ><a href="http://localhost/Bootcamp/admin/content/files/"><i class="color-icons icons-blue-folder-horizontal icon-margin">&nbsp;</i><span class="menu-description">Pliki</span></a></li>	
				   	<li ><a href="http://localhost/Bootcamp/admin/content/images/"><i class="color-icons icons-inbox-slide icon-margin">&nbsp;</i><span class="menu-description">Zdjęcia</span></a></li>					<li ><a href="http://localhost/Bootcamp/admin/content/banners/"><i class="color-icons icons-caution-board icon-margin">&nbsp;</i><span class="menu-description">Banery<span class="small-pro">Pro</span></a></li>					<li ><a href="http://localhost/Bootcamp/admin/content/polls/"><i class="color-icons icons-document-task icon-margin">&nbsp;</i><span class="menu-description">Sondy<span class="small-pro">Pro</span></a></li>					<li ><a href="http://localhost/Bootcamp/admin/content/calendar/"><i class="color-icons icons-calendar-list icon-margin">&nbsp;</i><span class="menu-description">Kalendarz<span class="small-pro">Pro</span></a></li>				  		   		
				    <li ><a href="http://localhost/Bootcamp/admin/content/lang/"><i class="color-icons icons-direction icon-margin"> </i><span class="menu-description">Języki</span></a></li>				    <li ><a href="http://localhost/Bootcamp/admin/content/trash/"><i class="color-icons icons-popcorn icon-margin"> </i><span class="menu-description">Kosz</span></a></li>				    <li ><a href="http://localhost/Bootcamp/admin/content/autosave/"><i class="color-icons icons-disk-black icon-margin"> </i><span class="menu-description">Autozapis</span></a></li>			
				    <li ><a href="http://localhost/Bootcamp/admin/content/config/"><i class="color-icons icons-gear icon-margin"> </i><span class="menu-description">Konfiguracja</span></a></li>				</ul>	
			</div>
		</div>			
	</li>
			<li class="accordion-group ">
	    <div class="accordion-heading">
	      <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#leftMenuForum">
	        <i class="fa fa-comments "> </i> <span class="menu-description">Forum</span>
	      </a>
	    </div>	
	    <div id="leftMenuForum" class="accordion-body collapse ">
      		<div class="accordion-inner">	
				<ul>
				    <li ><a href="http://localhost/Bootcamp/admin/forum/forums/"><i class="color-icons icons-application-list icon-margin">&nbsp;</i><span class="menu-description">Fora</span></a></li>				    <li ><a href="http://localhost/Bootcamp/admin/forum/posts/"><i class="color-icons icons-balloon-white-left icon-margin">&nbsp;</i><span class="menu-description">Posty</span></a></li>					<li ><a href="http://localhost/Bootcamp/admin/forum/stats/"><i class="color-icons icons-chart-up icon-margin">&nbsp;</i><span class="menu-description">Statystyki</span></a></li>					
				    <li ><a href="http://localhost/Bootcamp/admin/forum/config/"><i class="color-icons icons-gear icon-margin"> </i><span class="menu-description">Konfiguracja</span></a></li>			  	</ul>	
			</div>
		</div>				  		
	</li>
		
		<li class="accordion-group ">
	    <div class="accordion-heading">
	      <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#leftMenuUsers">
	        <i class="fa fa-users "> </i> <span class="menu-description">Użytkownicy</span>
	      </a>
	    </div>	
	    <div id="leftMenuUsers" class="accordion-body collapse ">
      		<div class="accordion-inner">	
				<ul>
				    <li ><a href="http://localhost/Bootcamp/admin/users/moderator/"><i class="color-icons icons-balloon-white-left icon-margin">&nbsp;</i><span class="menu-description">Moderator</span></a></li>				    <li ><a href="http://localhost/Bootcamp/admin/users/admins/"><i class="color-icons icons-user-black icon-margin">&nbsp;</i><span class="menu-description">Administratorzy</span></a></li>				    <li ><a href="http://localhost/Bootcamp/admin/users/users/"><i class="color-icons icons-user-yellow icon-margin">&nbsp;</i><span class="menu-description">Użytkownicy</span></a></li>				    <li ><a href="http://localhost/Bootcamp/admin/users/authorization/"><i class="color-icons icons-wallet icon-margin">&nbsp;</i><span class="menu-description">Uprawnienia<span class="small-pro">Pro</span></a></li>                    <li ><a href="http://localhost/Bootcamp/admin/users/history/"><i class="color-icons icons-clipboard-invoice icon-margin">&nbsp;</i><span class="menu-description">Historia<span class="small-pro">Pro</span></a></li>
                    <li ><a href="http://localhost/Bootcamp/admin/users/config/"><i class="color-icons icons-gear icon-margin"> </i><span class="menu-description">Konfiguracja</span></a></li>				</ul>  
			</div>
		</div>						
	</li>
			<li class="accordion-group ">
	    <div class="accordion-heading">
	      <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#leftMenuThemes">
	        <i class="fa fa-desktop "> </i> <span class="menu-description">Grafika</span>
	      </a>
	    </div>	
	    <div id="leftMenuThemes" class="accordion-body collapse ">
      		<div class="accordion-inner">	
				<ul>
				    <li ><a href="http://localhost/Bootcamp/admin/themes/themes/"><i class="color-icons icons-resource-monitor icon-margin"> </i><span class="menu-description">Szablony</span></a></li>				    <li ><a href="http://localhost/Bootcamp/admin/themes/widgets/"><i class="color-icons icons-resource-monitor-protector icon-margin"> </i><span class="menu-description">Widgety</span></a></li>				    
				    <li ><a href="http://localhost/Bootcamp/admin/themes/config/"><i class="color-icons icons-gear icon-margin"> </i><span class="menu-description">Konfiguracja</span></a></li>				</ul>	
			</div>
		</div>			
	</li>
			<li class="accordion-group ">
	    <div class="accordion-heading">
	      <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#leftMenuTools">
	        <i class="fa fa-wrench "> </i> <span class="menu-description">Narzędzia</span>
	      </a>
	    </div>	
	    <div id="leftMenuTools" class="accordion-body collapse ">
      		<div class="accordion-inner">		
				<ul>
				  	<li ><a href="http://localhost/Bootcamp/admin/tools/tools/"><i class="color-icons icons-wooden-box icon-margin">&nbsp;</i><span class="menu-description">Narzędzia</span></a></li>				  	<li ><a href="http://localhost/Bootcamp/admin/tools/monitoring/"><i class="color-icons icons-application-monitor icon-margin">&nbsp;</i><span class="menu-description">Monitoring<span class="small-pro">Pro</span></a></li>					<li ><a href="http://localhost/Bootcamp/admin/tools/rss/"><i class="color-icons icons-printer icon-margin">&nbsp;</i><span class="menu-description">RSS<span class="small-pro">Pro</span></a></li>				  	<li ><a href="http://localhost/Bootcamp/admin/tools/seo/"><i class="color-icons icons-globe icon-margin">&nbsp;</i><span class="menu-description">Seo<span class="small-pro">Pro</span></a></li>					<li ><a href="http://localhost/Bootcamp/admin/tools/mailing/"><i class="color-icons icons-mail--arrow icon-margin">&nbsp;</i><span class="menu-description">Mailing<span class="small-pro">Pro</span></a></li>	
					<li ><a href="http://localhost/Bootcamp/admin/tools/contacts/"><i class="color-icons icons-inbox-document-text icon-margin">&nbsp;</i><span class="menu-description">Kontakty<span class="small-pro">Pro</span></a></li>			 	 				 	 		<li ><a href="http://localhost/Bootcamp/admin/tools/database/"><i class="color-icons icons-databases icon-margin">&nbsp;</i><span class="menu-description">Baza danych<span class="small-pro">Pro</span></a></li>			 	  				 	 	
				    <li ><a href="http://localhost/Bootcamp/admin/tools/config/"><i class="color-icons icons-gear icon-margin"> </i><span class="menu-description">Konfiguracja</span></a></li>			 	</ul>	
			</div>
		</div>	 		
	</li>
			<li class="accordion-group ">
	    <div class="accordion-heading">
	      <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#leftMenuConfig">
	        <i class="fa fa-cogs "> </i> <span class="menu-description">Konfiguracja</span>
	      </a>
	    </div>	
	    <div id="leftMenuConfig" class="accordion-body collapse ">
      		<div class="accordion-inner">
				<ul>
									    				    <li class="active"><a href="http://localhost/Bootcamp/admin/config/0/"><i class="color-icons icons-gear icon-margin">&nbsp;</i><span class="menu-description">Ogólny</a></li>
				    				    <li ><a href="http://localhost/Bootcamp/admin/config/1/"><i class="color-icons icons-gear icon-margin">&nbsp;</i><span class="menu-description">Treść</a></li>
				    				    <li ><a href="http://localhost/Bootcamp/admin/config/2/"><i class="color-icons icons-gear icon-margin">&nbsp;</i><span class="menu-description">Użytkownicy</a></li>
				    				    <li ><a href="http://localhost/Bootcamp/admin/config/3/"><i class="color-icons icons-gear icon-margin">&nbsp;</i><span class="menu-description">Grafika</a></li>
				    				    <li ><a href="http://localhost/Bootcamp/admin/config/4/"><i class="color-icons icons-gear icon-margin">&nbsp;</i><span class="menu-description">Narzędzia</a></li>
				    				    <li ><a href="http://localhost/Bootcamp/admin/config/5/"><i class="color-icons icons-gear icon-margin">&nbsp;</i><span class="menu-description">System</a></li>
				    				</ul>	
			</div>
		</div>			
	</li>
					
		<li class="accordion-group ">
	    <div class="accordion-heading">
	      <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#leftMenuSystem">
	        <i class="fa fa-tachometer "> </i> <span class="menu-description">System</span>
	      </a>
	    </div>	
	    <div id="leftMenuSystem" class="accordion-body collapse ">
      		<div class="accordion-inner">
				<ul>
				  	<li ><a href="http://localhost/Bootcamp/admin/system/system/"><i class="color-icons icons-system-monitor icon-margin">&nbsp;</i><span class="menu-description">System</span></a></li>				  	<li ><a href="http://localhost/Bootcamp/admin/system/stats/"><i class="color-icons icons-chart-up icon-margin">&nbsp;</i><span class="menu-description">Statystyki</span></a></li>				  	<li ><a href="http://localhost/Bootcamp/admin/system/notifications/"><i class="color-icons icons icons-caution-board icon-margin">&nbsp;</i><span class="menu-description">Powiadomienia</span></a></li>					<li ><a href="http://localhost/Bootcamp/admin/system/backup/"><i class="color-icons icons-wooden-box-label icon-margin">&nbsp;</i><span class="menu-description">Backup<span class="small-pro">Pro</span></a></li>	
				     	
											<li ><a href="http://localhost/Bootcamp/admin/system/log/"><i class="color-icons icons-rocket icon-margin">&nbsp;</i><span class="menu-description">Logi<span class="small-pro">Pro</span></a></li>				  		<li ><a href="http://localhost/Bootcamp/admin/system/cron/"><i class="color-icons icons-clipboard-invoice icon-margin">&nbsp;</i><span class="menu-description">Cron<span class="small-pro">Pro</span></a></span></li>			 	 		<li ><a href="http://localhost/Bootcamp/admin/system/firewall/"><i class="color-icons icons-network-ethernet icon-margin">&nbsp;</i><span class="menu-description">Zapora<span class="small-pro">Pro</span></a></li>			 	 		<li ><a href="http://localhost/Bootcamp/admin/system/requestlog/showLogs/"><i class="color-icons icons-system-monitor-network icon-margin icon-margin">&nbsp;</i><span class="menu-description">Request Log<span class="small-pro">Pro</span></a></li>						 
					<li ><a href="http://localhost/Bootcamp/admin/system/licence/"><i class="color-icons icons-money icon-margin">&nbsp;</i><span class="menu-description">Licencja</span></a></li>			 	 	   
				    <li ><a href="http://localhost/Bootcamp/admin/system/config/"><i class="color-icons icons-gear icon-margin"> </i><span class="menu-description">Konfiguracja</span></a></li>				</ul>
			</div>
		</div>				
	</li>
	</ul>

            </div>
            <div id="content" <?php if (is_array($_smarty_tpl->tpl_vars['pins']->value)) {?>class="content-margin-right"<?php }?>>
                <div class="top-right-menu">
                    <div class="user-dropdown">
                        <?php echo $_smarty_tpl->getSubTemplate ('common/top_right_buttons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        <?php echo $_smarty_tpl->getSubTemplate ('common/tabs.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    </div>
                </div>
                <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['page_content']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <div id="footer">
                    <div class="bottom-panel">
                        <div class="row-fluid">
                            <div class="span5 mobileHidden">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/mainDo/toggleConfig/smallSidebar<?php echo $_smarty_tpl->tpl_vars['loggedUser']->value->id;?>
/" class="toggleSidebar" data-toggle="tooltip" data-placement="top" data-original-title="<?php echo smarty_function_L(array('key'=>'admin.sidebar'),$_smarty_tpl);?>
"><?php if (config::get("smallSidebar".((string)$_smarty_tpl->tpl_vars['loggedUser']->value->id))==1) {?><i class="fa fa-chevron-right icon-dark"></i><?php } else { ?><i class="fa fa-chevron-left icon-dark"></i><?php }?></a>
                                <?php if (!cache::isCached($_smarty_tpl->tpl_vars['SITE_PATH']->value,3600)) {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo cache::write($_smarty_tpl->tpl_vars['SITE_PATH']->value,round(baseFile::getSize($_tmp1)/1048576,2),'disSize');?>
<?php }?>
                                <i class="color-icons icons-network-ip-local">&nbsp;</i>&nbsp;<?php echo generate::ip();?>
 &nbsp;&nbsp;
                                <i class="color-icons icons-database icon-margin">&nbsp;</i><?php echo cache::read($_smarty_tpl->tpl_vars['SITE_PATH']->value);?>
 MB &nbsp;&nbsp;
                                <span class="smallWidthHidden">
                                    <i class="color-icons icons-databases icon-margin">&nbsp;</i><?php echo round(baseFile::getSize(@constant('FILE_DB_PATH'))/1048576,2);?>
 MB &nbsp;&nbsp;
                                </span>
                            </div>
                            <div class="span2 mobileHidden" style="text-align:center;">
                                <div class="bottom-center-menu">
                                    <a class="top" href="#top" data-toggle="tooltip" data-placement="bottom" data-original-title="<?php echo smarty_function_L(array('key'=>"admin.main.tpl.up"),$_smarty_tpl);?>
"><i class="fa fa-arrow-circle-up icon-dark"></i></a>
                                    <?php if ($_smarty_tpl->tpl_vars['REQUEST']->value->getVariable('subpage')!='') {?><a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/mainDo/pinIt/<?php echo $_smarty_tpl->tpl_vars['REQUEST']->value->getVariable('subpage');?>
/" data-toggle="tooltip" data-placement="bottom" data-original-title="<?php echo smarty_function_L(array('key'=>'admin.pinit'),$_smarty_tpl);?>
"><i class="fa fa-tag icon-dark" ></i></a><?php }?>
                                </div>
                            </div>

                            <div class="span5">
                                <div class="btn-group dropup">
                                                                        <span class="btn dropdown-toggle" data-toggle="dropdown"><img src="http://localhost/Bootcamp/image/szptgxnyzpjq/100/100/original/"> </span>
                                    <ul class="dropdown-menu">
                                                                              <li>
                                            <a href="http://localhost/Bootcamp/admin/mainDo/setLanguage/390/">
                                                <img src='http://localhost/Bootcamp/app/plugins/admin/resources/img/flags/pl.png' class="flag-icon"> PL
                                            </a>
                                        </li>
                                                                              <li>
                                            <a href="http://localhost/Bootcamp/admin/mainDo/setLanguage/659/">
                                                <img src='http://localhost/Bootcamp/app/plugins/admin/resources/img/flags/en.png' class="flag-icon"> EN
                                            </a>
                                        </li>
                                                                              <li>
                                            <a href="http://localhost/Bootcamp/admin/mainDo/setLanguage/760/">
                                                <img src='http://localhost/Bootcamp/app/plugins/admin/resources/img/flags/de.png' class="flag-icon"> DE
                                            </a>
                                        </li>
                                                                              <li>
                                            <a href="http://localhost/Bootcamp/admin/mainDo/setLanguage/761/">
                                                <img src='http://localhost/Bootcamp/app/plugins/admin/resources/img/flags/it.png' class="flag-icon"> IT
                                            </a>
                                        </li>
                                                                              <li>
                                            <a href="http://localhost/Bootcamp/admin/mainDo/setLanguage/762/">
                                                <img src='http://localhost/Bootcamp/app/plugins/admin/resources/img/flags/es.png' class="flag-icon"> ES
                                            </a>
                                        </li>
                                                                              <li>
                                            <a href="http://localhost/Bootcamp/admin/mainDo/setLanguage/763/">
                                                <img src='http://localhost/Bootcamp/app/plugins/admin/resources/img/flags/ru.png' class="flag-icon"> RU
                                            </a>
                                        </li>
                                                                              <li>
                                            <a href="http://localhost/Bootcamp/admin/mainDo/setLanguage/764/">
                                                <img src='http://localhost/Bootcamp/app/plugins/admin/resources/img/flags/zh.png' class="flag-icon"> ZH
                                            </a>
                                        </li>
                                                                          </ul>
                                </div>
                                <div class="admin-themplates">
                                    <a href="http://localhost/Bootcamp/admin/mainDo/setBackground/999/" style="background-color:#999;"></a>
                                    <a href="http://localhost/Bootcamp/admin/mainDo/setBackground/292929/" style="background-color:#292929;"></a>
                                    <a href="http://localhost/Bootcamp/admin/mainDo/setBackground/362c59/" style="background-color:#362c59;"></a>
                                    <a href="http://localhost/Bootcamp/admin/mainDo/setBackground/209a54/" style="background-color:#209a54;"></a>
                                    <a href="http://localhost/Bootcamp/admin/mainDo/setBackground/246bad/" style="background-color:#246bad;"></a>
                                    <a href="http://localhost/Bootcamp/admin/mainDo/setBackground/9b8e87/" style="background-color:#9b8e87;"></a>
                                    <a href="http://localhost/Bootcamp/admin/mainDo/setBackground/b36f45/" style="background-color:#b36f45;"></a>
                                    <a href="http://localhost/Bootcamp/admin/mainDo/setBackground/932727/" style="background-color:#932727;"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-desc">
                    Projekt i wykonanie: <strong>Adam Czajkowski</strong><br>Windu <span class="badge badge-white">3.1</span> rev: <strong>2040</strong>
                </div>
            </div>
        </div>
    </body>
</html><?php }} ?>
