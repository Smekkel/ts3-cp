<?php /* Smarty version Smarty3rc4, created on 2014-07-01 23:39:27
         compiled from "/Users/orangefox/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/ts3wi/templates/bootstrap/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154361121153b3a91f3a7011-07316374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cc2262aa4942f2d4d67d02d470e42eb8466e603' => 
    array (
      0 => '/Users/orangefox/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/ts3wi/templates/bootstrap/login.tpl',
      1 => 1404283163,
    ),
  ),
  'nocache_hash' => '154361121153b3a91f3a7011-07316374',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="navbar navbar-default">
    <a href="#" type="button" class="btn btn-right btn-success navbar-btn">Сайт</a>
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
            <a href="index.html" class="navbar-brand">TS3 Cloud</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Главная</a></li>
                <li><a href="#">Поддержка</a></li>
            </ul>
        </div>
    </div>
</div>


<?php if (!empty($_smarty_tpl->getVariable('error')->value)){?>
<table>
	<tr>
		<td class="error"><?php echo $_smarty_tpl->getVariable('error')->value;?>
</td>
	</tr>
</table>
<?php }?>
<?php if (!empty($_smarty_tpl->getVariable('motd')->value)){?>
<table class="login" style="width:300px" cellpadding="0" cellspacing="0">
	<tr>
		<td class="loginhead"><?php echo $_smarty_tpl->getVariable('lang')->value['motd'];?>
</td>
	</tr>
	<tr>
		<td align="center">
		<?php echo $_smarty_tpl->getVariable('motd')->value;?>

		</td>
	</tr>
	<tr>
		<td class="loginbottom">&nbsp;</td>
	</tr>
</table>
<?php }?>
<?php if (!isset($_POST['sendlogin'])&&$_smarty_tpl->getVariable('loginstatus')->value!==true||$_smarty_tpl->getVariable('loginstatus')->value!==true){?>
<br />
    <div class="container-form">
        <form class="form-signin">
            <h2 class="form-signin-heading text-center">Авторизуйтесь</h2>
            <input type="text" class="form-control" placeholder="Логин">
            <input type="password" class="form-control" placeholder="Пароль">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Вход</button>
        </form>
    </div>

<form method="post" action="index.php?site=login">
<table class="login" style="width:300px" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="2"></td>
	</tr>
	<tr>
		<td class="loginhead" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['login'];?>
</td>
	</tr>
	<tr>
		<td align="center">
		<table style="padding:10px;" cellpadding="1" cellspacing="0">
			<tr>
				<td><?php echo $_smarty_tpl->getVariable('lang')->value['server'];?>
:</td>
				<td>
				<?php if (count($_smarty_tpl->getVariable('instances')->value)==1){?>
					<?php  $_smarty_tpl->tpl_vars['sdata'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['skey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('instances')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['sdata']->key => $_smarty_tpl->tpl_vars['sdata']->value){
 $_smarty_tpl->tpl_vars['skey']->value = $_smarty_tpl->tpl_vars['sdata']->key;
?>
					<input type="hidden" name="skey" value="<?php echo $_smarty_tpl->tpl_vars['skey']->value;?>
" />	<?php echo $_smarty_tpl->tpl_vars['sdata']->value['alias'];?>

					<?php }} ?>
				<?php }else{ ?>
				<select name="skey">
				<?php  $_smarty_tpl->tpl_vars['sdata'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['skey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('instances')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['sdata']->key => $_smarty_tpl->tpl_vars['sdata']->value){
 $_smarty_tpl->tpl_vars['skey']->value = $_smarty_tpl->tpl_vars['sdata']->key;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['skey']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['sdata']->value['alias'];?>
</option>
				<?php }} ?>
				</select>
				<?php }?>
				</td>
			</tr>
			<tr>
				<td><?php echo $_smarty_tpl->getVariable('lang')->value['username'];?>
:</td>
				<td><input type="text" name="loginUser" value="serveradmin" /></td>
			</tr>
			<tr>
				<td><?php echo $_smarty_tpl->getVariable('lang')->value['password'];?>
:</td>
				<td><input type="password" name="loginPw" /></td>
			</tr>
			<tr>
				<td><?php echo $_smarty_tpl->getVariable('lang')->value['option'];?>
:</td>
				<td><input class="button" type="submit" name="sendlogin" value="<?php echo $_smarty_tpl->getVariable('lang')->value['login'];?>
"/></td>
			</tr>
		</table>
		</td>
	</tr>
</table>
</form>
<br />
<?php }?>