<?php /* Smarty version Smarty3rc4, created on 2014-10-18 00:45:59
         compiled from "W:\home\cp.test.ru\www\ts3wi\templates/bootstrap/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2053254418007a17565-13492902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6534f1c265c6c466c59d0abb2a81180c19f0a21d' => 
    array (
      0 => 'W:\\home\\cp.test.ru\\www\\ts3wi\\templates/bootstrap/login.tpl',
      1 => 1405649780,
    ),
  ),
  'nocache_hash' => '2053254418007a17565-13492902',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!empty($_smarty_tpl->getVariable('error')->value)){?>
<div class="container container-alert">
    <div class="alert alert-danger">
        <b>Warning!</b></br> <?php echo $_smarty_tpl->getVariable('error')->value;?>

    </div>
    </div>
<?php }?>
<div class="container-login">
            <?php if (!empty($_smarty_tpl->getVariable('motd')->value)){?>
            <div class="alert alert-dismissable alert-success">
                <h4><b><?php echo $_smarty_tpl->getVariable('lang')->value['motd'];?>
</b></h4><?php echo $_smarty_tpl->getVariable('motd')->value;?>

            </div>
            <?php }?>
            <?php if (!isset($_POST['sendlogin'])&&$_smarty_tpl->getVariable('loginstatus')->value!==true||$_smarty_tpl->getVariable('loginstatus')->value!==true){?>
            <form class="form-signin" method="post" action="index.php?site=login">
            <h2 class="form-signin-heading text-center"><?php echo $_smarty_tpl->getVariable('lang')->value['login'];?>
</h2>
            <input type="text" class="form-control" name="loginUser" placeholder="<?php echo $_smarty_tpl->getVariable('lang')->value['username'];?>
 ">
            <input type="password" class="form-control" name="loginPw" placeholder="<?php echo $_smarty_tpl->getVariable('lang')->value['password'];?>
">
                <div class="row">
                    <div class="col-md-6">
                        <?php if (count($_smarty_tpl->getVariable('instances')->value)==1){?>
                            <?php  $_smarty_tpl->tpl_vars['sdata'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['skey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('instances')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['sdata']->key => $_smarty_tpl->tpl_vars['sdata']->value){
 $_smarty_tpl->tpl_vars['skey']->value = $_smarty_tpl->tpl_vars['sdata']->key;
?>
                                <input type="hidden" name="skey" value="<?php echo $_smarty_tpl->tpl_vars['skey']->value;?>
" />
                        <fieldset disabled>
                            <input class="form-control" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['sdata']->value['alias'];?>
">
                        </fieldset>
                            <?php }} ?>
                        <?php }else{ ?>
                            <select class="form-control"  name="skey">
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
                        </br>
                    </div>
                    <div class="col-md-6">
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="sendlogin"><?php echo $_smarty_tpl->getVariable('lang')->value['login'];?>
</button>
                    </div>
        </form>
            <?php }?>
    </div>
    <!-- /container -->
