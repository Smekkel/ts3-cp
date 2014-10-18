<?php /* Smarty version Smarty3rc4, created on 2014-07-13 06:29:25
         compiled from "/Users/orangefox/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/ts3wi/templates/yeti/mainmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26890073953c289b533ecc7-50999534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db0cb8b00e054881c478b7632a54851b156a6766' => 
    array (
      0 => '/Users/orangefox/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/ts3wi/templates/yeti/mainmenu.tpl',
      1 => 1405258157,
    ),
  ),
  'nocache_hash' => '26890073953c289b533ecc7-50999534',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="container">
<div class="navbar navbar-default navbar-fixed-top">
    <a href="http://ts3cloud.net" type="button" class="btn btn-right btn-warning navbar-btn">Сайт</a>
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
            <a href="index.html" class="navbar-brand">TS3 Cloud</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Панель управления</a></li>
                <?php if ($_smarty_tpl->getVariable('loginstatus')->value===true&&$_smarty_tpl->getVariable('site')->value!=='login'){?>
                <li><a href="#">Сервер лист</a></li>
                <li><a href="#">Меню 1</a></li>
                <li><a href="#">Меню 2</a></li>
                <?php }?>
            </ul>
        </div>
    </div>
</div>
</div>