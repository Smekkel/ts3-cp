<?php /* Smarty version Smarty3rc4, created on 2014-07-14 16:27:54
         compiled from "W:\home\cp.test.ru\www\ts3wi\templates/yeti/mainmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3165753c3cccad78d65-08192763%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a07c978ea8c786c7215f224250ec5d4628e2b7f' => 
    array (
      0 => 'W:\\home\\cp.test.ru\\www\\ts3wi\\templates/yeti/mainmenu.tpl',
      1 => 1405340873,
    ),
  ),
  'nocache_hash' => '3165753c3cccad78d65-08192763',
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
            <a href="index.php" class="navbar-brand">TS3 Cloud</a>
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