<?php /* Smarty version Smarty3rc4, created on 2014-07-01 23:44:21
         compiled from "/Users/orangefox/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/ts3wi/templates/bootstrap/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172448121753b3aa45e2f0d5-40004212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2edb7fe5feeb8c8ac39d9312da626e01d61c91a' => 
    array (
      0 => '/Users/orangefox/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/ts3wi/templates/bootstrap/index.tpl',
      1 => 1404283459,
    ),
  ),
  'nocache_hash' => '172448121753b3aa45e2f0d5-40004212',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
*Copyright (C) 2012-2013  Psychokiller
*
*This program is free software; you can redistribute it and/or modify it under the terms of 
*the GNU General Public License as published by the Free Software Foundation; either 
*version 3 of the License, or any later version.
*
*This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; 
*without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
*See the GNU General Public License for more details.
*
*You should have received a copy of the GNU General Public License along with this program; if not, see http://www.gnu.org/licenses/. 
-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="de">
<head>
<title>Teamspeak 3 - Webinterface</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

<link rel="stylesheet" href="templates/<?php echo $_smarty_tpl->getVariable('tmpl')->value;?>
/gfx/bootstrap.min.css" type="text/css" media="screen" />
<link rel="stylesheet" href="templates/<?php echo $_smarty_tpl->getVariable('tmpl')->value;?>
/gfx/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="templates/<?php echo $_smarty_tpl->getVariable('tmpl')->value;?>
/gfx/tsview.css" type="text/css" media="screen" />
    <script type="text/javascript" charset="utf-8" src="templates/<?php echo $_smarty_tpl->getVariable('tmpl')->value;?>
/gfx/js/customtabs.js"></script>
    <script type="text/javascript" charset="utf-8" src="templates/<?php echo $_smarty_tpl->getVariable('tmpl')->value;?>
/gfx/js/include.js"></script>
<script type="text/javascript">
//<![CDATA[
function Klappen(Id) 
	{
	
	if(Id == 0)
		{
		var i = 1;
		var jetec_Minus="gfx/images/minus.png", jetec_Plus="gfx/images/plus.png";
		
		if(document.getElementById('Pic0').name == 'plus')
			{
			document.getElementById('Pic0').src = jetec_Minus;
			document.getElementById('Pic0').name = 'minus';
			var openAll = 1;
			}
			else
			{
			document.getElementById('Pic0').src = jetec_Plus;
			document.getElementById('Pic0').name = 'plus';
			var openAll = 0;
			}
		while(i<100)
			{
			if(document.getElementById('Pic'+i)!=null)
				{
				var KlappText = document.getElementById('Lay'+i);
				var KlappBild = document.getElementById('Pic'+i);
				if (openAll == 1) 
					{
					KlappText.style.display = 'block';
					KlappBild.src = jetec_Minus;
					} 
					else 
					{
					KlappText.style.display = 'none';
					KlappBild.src = jetec_Plus;
					}
				i++;
				}
				else
				{
				break;
				}
			}
		}
	var KlappText = document.getElementById('Lay'+Id);
	var KlappBild = document.getElementById('Pic'+Id);
	var jetec_Minus="gfx/images/minus.png", jetec_Plus="gfx/images/plus.png";
	if (KlappText.style.display == 'none') 
		{
		KlappText.style.display = 'block';
		KlappBild.src = jetec_Minus;
		} 
		else 
		{
		KlappText.style.display = 'none';
		KlappBild.src = jetec_Plus;
		}
	}
	
function oeffnefenster (url) {
 fenster = window.open(url, "fenster1", "width=350,height=150,status=no,scrollbars=yes,resizable=no");
 fenster.opener.name="opener";
 fenster.focus();
}

function hide_select(selectId)
	{
	if(selectId==0)
		{
		document.getElementById("groups").style.display = "";
		document.getElementById("servergroups").style.display = "";
		document.getElementById("channelgroups").style.display = "none";
		document.getElementById("channel").style.display = "none";
		}
	  else if (selectId==1)
		{
		document.getElementById("groups").style.display = "";
		document.getElementById("servergroups").style.display = "none";
		document.getElementById("channelgroups").style.display = "";
		document.getElementById("channel").style.display = "";
		}
		else
		{
		document.getElementById("groups").style.display = "none";
		document.getElementById("servergroups").style.display = "none";
		document.getElementById("channelgroups").style.display = "none";
		document.getElementById("channel").style.display = "none";
		}
	}

var checkflag = "false";

function check(form) 
	{
	if (checkflag == "false") 
		{
		for (i = 0; i < document.forms[form].elements.length; i++) 
			{
			if(document.forms[form].elements[i].name != 'checkall')
				{
				document.forms[form].elements[i].checked = true;
				}
			}
		checkflag = "true";
		return checkflag; 
		}
		else 
		{
		for (i = 0; i < document.forms[form].elements.length; i++) 
			{
				document.forms[form].elements[i].checked = false;
			}
		checkflag = "false";
		return checkflag; 
		}
	}
var conf_arr = new Array();
function confirmArray(sid, name, port, action)
	{
	conf_arr[sid]=new Object();
	conf_arr[sid]['name']=name;
	conf_arr[sid]['port']=port;
	if(document.getElementById("caction"+sid).options.selectedIndex == 0)
		{
		conf_arr[sid]['action']='';
		}
		else if(document.getElementById("caction"+sid).options.selectedIndex == 1)
		{
		conf_arr[sid]['action']='start';
		}
		else if(document.getElementById("caction"+sid).options.selectedIndex == 2)
		{
		conf_arr[sid]['action']='stop';
		}
		else if(document.getElementById("caction"+sid).options.selectedIndex == 3)
		{
		conf_arr[sid]['action']='del';
		}
	}
	
function confirmAction()
	{
	var text="Möchtest du folgende Aktion wirklich ausführen?\n\n";
	for(var i in conf_arr)
		{
		if(conf_arr[i]['action'] == 'start')
			{
			text = text+"***Starten*** "+conf_arr[i]['name']+" "+conf_arr[i]['port']+"\n";
			}
			else if(conf_arr[i]['action'] == 'stop')
			{
			text = text+"***Stoppen*** "+conf_arr[i]['name']+" "+conf_arr[i]['port']+"\n";
			}
			else if(conf_arr[i]['action'] == 'del')
			{
			text = text+"***Löschen*** "+conf_arr[i]['name']+" "+conf_arr[i]['port']+"\n";
			}
		}
	return text;
	}
//]]>
</script>
</head>
<body>
<table align="center" class="border" style="width:1000px; background-color:#FFFFFF;" cellpadding="1" cellspacing="0">
	<tr>
		<td colspan="2"><?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tmpl')->value)."/head.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?></td>
	</tr>
	<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tmpl')->value)."/showupdate.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	<tr valign="top">	
		<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tmpl')->value)."/mainbar.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
		<td align="center">
		<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tmpl')->value)."/".($_smarty_tpl->getVariable('site')->value).".tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
		</td>
	</tr>
	<tr>
		<td colspan="2" class="footer">
		<?php echo $_smarty_tpl->getVariable('footer')->value;?>

            <div class="footer">
                <p>&copy; ts3cloud.net 2014</p>
            </div>
		</td>
	</tr>
</table>
<script language="JavaScript" type="text/javascript" src="gfx/js/wz_tooltip.js"></script>
</body>
</html>