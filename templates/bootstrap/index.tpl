<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
*Copyright (C) 2012-2013  Psychokiller
* Bootstrap template by San3ko (san3ko.com/san3ko@ya.ru)
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
<title>Панель управления</title>
<meta name="viewport" content="width=device-width">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="templates/{$tmpl}/gfx/css/bootstrap.min.css" type="text/css" media="screen" />
<link rel="stylesheet" href="templates/{$tmpl}/gfx/css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="templates/{$tmpl}/gfx/css/tsview.css" type="text/css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Syncopate' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="templates/{$tmpl}/gfx/js/jquery-2.2.2.min.js"></script>
<script type="text/javascript" src="templates/{$tmpl}/gfx/js/bootstrap.js" type="text/javascript"></script>


{*<link rel="stylesheet" href="templates/{$tmpl}/gfx/css/bootstrap-grid.css" type="text/css" media="screen" /> *}
{*<link rel="stylesheet" href="templates/{$tmpl}/gfx/css/jasny-bootstrap.css" type="text/css" media="screen" />
<script src="templates/{$tmpl}/gfx/js/jasny-bootstrap.min.js" type="text/javascript"></script> *}

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
    <div class="container-main">
        {*
        {include file="{$tmpl}/mainmenu.tpl"}
        *}
        <div class="container-main">
            {include file="{$tmpl}/mainbar.tpl"}
        </div>
        {* <div class="container-header">
        {include file="{$tmpl}/head.tpl"}
        {include file="{$tmpl}/showupdate.tpl"}
        </div> *}
    </div>
    <div class="container-main" align="center">
        {include file="{$tmpl}/{$site}.tpl"}
    </div>
    <div class="container-footer" align="center">
        <hr>
        {$footer}
        <h6 style="color: #b3b3b3">Панель от <strong><a href='http://www.ts3.cs-united.de'>Psychokiller</a></strong> </br>
        Русский язык, дизайн, верстка - <strong><a href="http://san3ko.com">San3ko</a></strong> </br>
		При поддержке проекта <strong><a href="http://defnox.com">DEFNOX</a></strong> </br>
        Работает на <a href="http://getbootstrap.com/">Bootstrap</a> и <a href="http://jquery.com/">jQuery</a></h6>
    </div>
<script language="JavaScript" type="text/javascript" src="gfx/js/wz_tooltip.js"></script>
</body>
</html>