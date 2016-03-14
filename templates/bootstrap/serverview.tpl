{* {if !empty($error) OR !empty($noerror)}
<table xmlns="http://www.w3.org/1999/html">
	{if !empty($error)}
	<tr>
		<td class="error">{$error}</td>
	</tr>
	{/if}
	{if !empty($noerror)}
	<tr>
		<td class="noerror">{$noerror}</td>
	</tr>
	{/if}
</table>
{/if}
*}
{if !empty($error) OR !empty($noerror)}
    <div class="container container-alert">
        {if !empty($error)}
            <div class="alert alert-dismissable alert-warning">
                <h4><b>Warning! </b></h4>{$error}
            </div>
        {/if}
        {if !empty($noerror)}
            <div class="alert alert-dismissable alert-success">
                {$noerror}
            </div>
        {/if}
    </div>
{/if}



{if $newserverversion !== true AND !empty($serverinfo['virtualserver_version'])}
    <div class="container alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">{$lang['close']}</span></button>
        {$lang['serverupdateav']}<strong>{$newserverversion}</strong>
    </div>
{/if}
<br>
<div class="container">
    <div class="row">
    <div class="col-md-4">
        {* Control buttons *}
        <div class="text-center">
            <form method="post" action="index.php?site=serverview&amp;sid={$sid}">
                <input type="hidden" name="sid" value="{$serverinfo['virtualserver_id']}" />
                <div class="btn-group" style="width: 80%">
                <button type="submit" style="margin-bottom: 5px; width: 50%; height: 50px" name="start" class="start btn btn-success">{$lang['start']}</button>
                <button type="submit" style="margin-bottom: 5px; width: 50%; height: 50px" name="stop" class="stop btn btn-danger" onclick="return confirm('{$lang['stopservermsg']}')">{$lang['stop']}</button>
                </div>
            </form>
        </div>
        <a href="#msgtosrv" data-toggle="modal" type="button" style="margin-bottom: 20px; width: 80%" class="btn btn-warning btn-block center-block"><span class="glyphicon glyphicon-envelope"></span>  {$lang['msgtosrvmenu']}</a>
    {* Status *}
        <h5>{$lang['status']}</h5>
        {if $serverinfo['virtualserver_status'] == "online"}
            <button type="button" class="btn btn-success btn-block disabled">{$serverinfo['virtualserver_status']}</button>
        {else}
            <button type="button" class="btn btn-danger btn-block disabled">{$serverinfo['virtualserver_status']}</button>
        {/if}
        <span class="sr-only"><hr></span>
        {* Usage *}
        <h5>{$lang['slotusage']}</h5>
        <div class="progress" style="height: 30px">
            <div class="progress-bar progress-bar-striped progress-bar-success active" role="progressbar" style="width: {($serverinfo['virtualserver_clientsonline']-$serverinfo['virtualserver_queryclientsonline'])/$serverinfo['virtualserver_maxclients']*100}%;">
                <span class="sr-only">{$serverinfo['virtualserver_clientsonline']-$serverinfo['virtualserver_queryclientsonline']} / {$serverinfo['virtualserver_maxclients']}</span>
            </div>
        </div>
        <span class="sr-only"><hr></span>
        <div class="well">
            <a href="#" type="button" style="margin-bottom: 10px" class="disabled btn btn-sm btn-default btn-block">{$lang['connectvserver']}</a>
            <?php } ?>
            {$tree}
        </div>
        <h5>{$lang['tsviewpubhtml']}</h5>
        <a href="#" type="button" class="disabled btn btn-sm btn-default btn-block">{$lang['copyhtmlcode']}</a>
        <pre>{$pubtsview}</pre>
    </div>
        <div class="col-md-8">
        {if isset($permoverview['b_virtualserver_info_view']) AND empty($permoverview['b_virtualserver_info_view'])}
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <td class="thead">{$lang['error']}</td>
                </tr>
                <tr>
                    <td class="green1">{$lang['nopermissions']}</td>
                </tr>
            </table>
        </div>
        {else}

        <div class="panel-group" id="accordion">
        <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <button type="button" class="btn btn-info btn-block" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                    {$lang['virtualserver']} #{$serverinfo['virtualserver_id']}
                </button>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in">
        <div class="panel-body">

            <div class="table-responsive">
                <table class="table table-bordered">
                <tr>
                    <td class="maincat" colspan="2">{$lang['basics']}</td>
                </tr>
                <tr>
                    <td class="green1">{$lang['autostart']}:</td>
                    <td class="green1">
                        {if $serverinfo['virtualserver_autostart'] == 1}
                            {$lang['yes']}
                        {else}
                            {$lang['no']}
                        {/if}
                    </td>
                </tr>
                <tr>
                    <td class="green2">{$lang['serveraddress']}:</td>
                    <td class="green2">{$smarty.session.server_ip}:{$serverinfo['virtualserver_port']}</td>
                </tr>
                <tr>
                    <td class="green1" style="width:50%">{$lang['minclientversion']}:</td>
                    <td class="green1" style="width:50%">{$serverinfo['virtualserver_min_client_version']}</td>
                </tr>
                <tr>
                    <td class="green2">{$lang['uniqueid']}:</td>
                    <td class="green2">{$serverinfo['virtualserver_unique_identifier']}</td>
                </tr>
                <tr>
                    <td class="green1">{$lang['name']}:</td>
                    <td class="green1">{$serverinfo['virtualserver_name']}</td>
                </tr>
                <tr>
                    <td class="green2">{$lang['welcomemsg']}:</td>
                    <td class="green2">{$serverinfo['virtualserver_welcomemessage']}</td>
                </tr>
                <tr>
                    <td class="green1">{$lang['version']}:</td>
                    <td class="green1">{$serverinfo['virtualserver_version']}</td>
                </tr>
                <tr>
                    <td class="green2">{$lang['platform']}:</td>
                    <td class="green2">{$serverinfo['virtualserver_platform']}</td>
                </tr>
                <tr>
                    <td class="green1">{$lang['created']}:</td>
                    <td class="green1">{$serverinfo['virtualserver_created']|date_format:"%d.%m.%Y - %H:%M:%S"}</td>
                </tr>
                <tr>
                    <td class="green2">{$lang['status']}:</td>
                    <td class="green2">{$serverinfo['virtualserver_status']}</td>
                </tr>
                <tr>
                    <td class="green1">{$lang['runtime']}:</td>
                    <td class="green1">{$serverinfo['virtualserver_uptime']}
                    </td>
                </tr>
                <tr>
                    <td class="green2">{$lang['clients']}:</td>
                    <td class="green2">{$serverinfo['virtualserver_clientsonline']-$serverinfo['virtualserver_queryclientsonline']} / {$serverinfo['virtualserver_maxclients']}</td>
                </tr>
                <tr>
                    <td class="green1">{$lang['queryclients']}:</td>
                    <td class="green1">{$serverinfo['virtualserver_queryclientsonline']}</td>
                </tr>
                <tr>
                    <td class="green2">{$lang['maxreservedslots']}:</td>
                    <td class="green2">{$serverinfo['virtualserver_reserved_slots']}</td>
                </tr>
                <tr>
                    <td class="green1">{$lang['showonweblist']}:</td>
                    <td class="green1">
                        {if $serverinfo['virtualserver_weblist_enabled'] == 1}
                            {$lang['yes']}
                        {else}
                            {$lang['no']}
                        {/if}
                    </td>
                </tr>
                <tr>
                    <td class="green2">{$lang['codecencryptionmode']}:</td>
                    <td class="green2">
                        {if $serverinfo['virtualserver_codec_encryption_mode']==0}
                            {$lang['codecencryptionmodeindi']}
                        {elseif $serverinfo['virtualserver_codec_encryption_mode']==1}
                            {$lang['codecencryptionmodegoff']}
                        {elseif $serverinfo['virtualserver_codec_encryption_mode']==2}
                            {$lang['codecencryptionmodegon']}
                        {/if}
                    </td>
                </tr>
                <tr>
                    <td class="green1">{$lang['channel']}:</td>
                    <td class="green1">{$serverinfo['virtualserver_channelsonline']}</td>
                </tr>
                <tr>
                    <td class="green2">{$lang['minclientschan']}:</td>
                    <td class="green2">{$serverinfo['virtualserver_min_clients_in_channel_before_forced_silence']}</td>
                </tr>
                <tr>
                    <td class="green1">{$lang['clientsdimm']}:</td>
                    <td class="green1">{$serverinfo['virtualserver_priority_speaker_dimm_modificator']}</td>
                </tr>
                <tr>
                    <td class="green2">{$lang['passwordset']}:</td>
                    <td class="green2">
                        {if $serverinfo['virtualserver_flag_password'] == 1}
                            {$lang['yes']}
                        {else}
                            {$lang['no']}
                        {/if}
                    </td>
                </tr>
                <tr>
                    <td class="green1">{$lang['securitylevel']}:</td>
                    <td class="green1">{$serverinfo['virtualserver_needed_identity_security_level']}</td>
                </tr>
                <tr>
                    <td class="green2">{$lang['iconid']}:</td>
                    <td class="green2">{$serverinfo['virtualserver_icon_id']}</td>
                </tr>
                <tr>
                    <td class="maincat" colspan="2">{$lang['standardgroups']}</td>
                </tr>
                <tr>
                    <td class="green1">{$lang['servergroup']}:</td>
                    <td class="green1">
                        {if !empty($servergroups)}
                            {foreach key=key item=value from=$servergroups}
                                {if $value['sgid'] == $serverinfo['virtualserver_default_server_group']}
                                    ({$value['sgid']}){$value['name']}
                                {/if}
                            {/foreach}
                        {/if}
                    </td>
                </tr>
                <tr>
                    <td class="green2">{$lang['channelgroup']}:</td>
                    <td class="green2">
                        {if !empty($channelgroups)}
                            {foreach key=key item=value from=$channelgroups}
                                {if $value['cgid'] == $serverinfo['virtualserver_default_channel_group']}
                                    ({$value['cgid']}){$value['name']}
                                {/if}
                            {/foreach}
                        {/if}
                    </td>
                </tr>
                <tr>
                    <td class="green1">{$lang['chanadmingroup']}:</td>
                    <td class="green1">
                        {if !empty($channelgroups)}
                            {foreach key=key item=value from=$channelgroups}
                                {if $value['cgid'] == $serverinfo['virtualserver_default_channel_admin_group']}
                                    ({$value['cgid']}){$value['name']}
                                {/if}
                            {/foreach}
                        {/if}
                    </td>
                </tr>
                <tr>
                    <td class="maincat" colspan="2">{$lang['host']}</td>
                </tr>
                <tr>
                    <td class="green1">{$lang['hostmessage']}:</td>
                    <td class="green1">{$serverinfo['virtualserver_hostmessage']}</td>
                </tr>
                <tr>
                    <td class="green2">{$lang['hostmessageshow']}:</td>
                    <td class="green2">
                        {if $serverinfo['virtualserver_hostmessage_mode'] == '0'}
                            {$lang['nomessage']}
                        {elseif $serverinfo['virtualserver_hostmessage_mode'] == '1'}
                            {$lang['showmessagelog']}
                        {elseif $serverinfo['virtualserver_hostmessage_mode'] == '2'}
                            {$lang['showmodalmessage']}
                        {elseif $serverinfo['virtualserver_hostmessage_mode'] == '3'}
                            {$lang['modalandexit']}
                        {/if}
                    </td>
                </tr>
                <tr>
                    <td class="green1" colspan="2">&nbsp;</td>
                </tr>
                <tr>
                    <td class="green1">{$lang['hosturl']}:</td>
                    <td class="green1">{$serverinfo['virtualserver_hostbanner_url']}</td>
                </tr>
                <tr>
                    <td class="green2">{$lang['hostbannerurl']}:</td>
                    <td class="green2">
                        {if $serverinfo['virtualserver_hostbanner_gfx_url']!=''}
                            <img style="width:350px" src="{$serverinfo['virtualserver_hostbanner_gfx_url']}" alt="" /><br />
                        {/if}
                        {$serverinfo['virtualserver_hostbanner_gfx_url']}</td>
                </tr>
                <tr>
                    <td class="green1">{$lang['hostbannerintval']}:</td>
                    <td class="green1">{$serverinfo['virtualserver_hostbanner_gfx_interval']}</td>
                </tr>
                <tr>
                    <td class="green2" colspan="2">&nbsp;</td>
                </tr>
                <tr>
                    <td class="green2">{$lang['hostbuttongfx']}:</td>
                    <td class="green2">{$serverinfo['virtualserver_hostbutton_gfx_url']}</td>
                </tr>
                <tr>
                    <td class="green1">{$lang['hostbuttontooltip']}:</td>
                    <td class="green1">{$serverinfo['virtualserver_hostbutton_tooltip']}</td>
                </tr>
                <tr>
                    <td class="green2">{$lang['hostbuttonurl']}:</td>
                    <td class="green2">{$serverinfo['virtualserver_hostbutton_url']}</td>
                </tr>
                <tr>
                    <td class="maincat" colspan="2">{$lang['autoban']}</td>
                </tr>
                <tr>
                    <td class="green2">{$lang['autobancount']}:</td>
                    <td class="green2">{$serverinfo['virtualserver_complain_autoban_count']}</td>
                </tr>
                <tr>
                    <td class="green1">{$lang['autobantime']}:</td>
                    <td class="green1">{$serverinfo['virtualserver_complain_autoban_time']}</td>
                </tr>
                <tr>
                    <td class="green2">{$lang['removetime']}:</td>
                    <td class="green2">{$serverinfo['virtualserver_complain_remove_time']}</td>
                </tr>
                <tr>
                    <td class="maincat" colspan="2">{$lang['antiflood']}</td>
                </tr>
                <tr>
                    <td class="green1">{$lang['pointstickreduce']}:</td>
                    <td class="green1">{$serverinfo['virtualserver_antiflood_points_tick_reduce']}</td>
                </tr>
                <tr>
                    <td class="green2">{$lang['pointsneededblockcmd']}:</td>
                    <td class="green2">{$serverinfo['virtualserver_antiflood_points_needed_command_block']}</td>
                </tr>
                <tr>
                    <td class="green1">{$lang['pointsneededblockip']}:</td>
                    <td class="green1">{$serverinfo['virtualserver_antiflood_points_needed_ip_block']}</td>
                </tr>
                <tr>
                    <td class="thead" colspan="2">{$lang['transfers']}</td>
                </tr>
                <tr>
                    <td class="green1">{$lang['upbandlimit']}:</td>
                    <td class="green1">{$serverinfo['virtualserver_max_upload_total_bandwidth']} Byte/s</td>
                </tr>
                <tr>
                    <td class="green2">{$lang['uploadquota']}:</td>
                    <td class="green2">{$serverinfo['virtualserver_upload_quota']} MiB</td>
                </tr>
                <tr>
                    <td class="green1">{$lang['downbandlimit']}:</td>
                    <td class="green1">{$serverinfo['virtualserver_max_download_total_bandwidth']} Byte/s</td>
                </tr>
                <tr>
                    <td class="green2">{$lang['downloadquota']}:</td>
                    <td class="green2">{$serverinfo['virtualserver_download_quota']} MiB</td>
                </tr>
                <tr>
                    <td class="maincat" colspan="2">{$lang['logs']}</td>
                </tr>
                <tr>
                    <td class="green1">{$lang['logclient']}:</td>
                    <td class="green1">
                        {if $serverinfo['virtualserver_log_client'] == 1}
                            {$lang['yes']}
                        {else}
                            {$lang['no']}
                        {/if}
                    </td>
                </tr>
                <tr>
                    <td class="green2">{$lang['logquery']}:</td>
                    <td class="green2">
                        {if $serverinfo['virtualserver_log_query'] == 1}
                            {$lang['yes']}
                        {else}
                            {$lang['no']}
                        {/if}
                    </td>
                </tr>
                <tr>
                    <td class="green1">{$lang['logchannel']}:</td>
                    <td class="green1">
                        {if $serverinfo['virtualserver_log_channel'] == 1}
                            {$lang['yes']}
                        {else}
                            {$lang['no']}
                        {/if}
                    </td>
                </tr>
                <tr>
                    <td class="green2">{$lang['logpermissions']}:</td>
                    <td class="green2">
                        {if $serverinfo['virtualserver_log_permissions'] == 1}
                            {$lang['yes']}
                        {else}
                            {$lang['no']}
                        {/if}
                    </td>
                </tr>
                <tr>
                    <td class="green1">{$lang['logserver']}:</td>
                    <td class="green1">
                        {if $serverinfo['virtualserver_log_server'] == 1}
                            {$lang['yes']}
                        {else}
                            {$lang['no']}
                        {/if}
                    </td>
                </tr>
                <tr>
                    <td class="green2">{$lang['logfiletransfer']}:</td>
                    <td class="green2">
                        {if $serverinfo['virtualserver_log_filetransfer'] == 1}
                            {$lang['yes']}
                        {else}
                            {$lang['no']}
                        {/if}
                    </td>
                </tr>
                </table>
            </div>
        {/if}
        </div>
        </div>
        </div>
        </div>
        </div>
    </div>
</div>
{* modal msg to srv *}
<div class="modal fade" id="msgtosrv" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container-modal">
                    <h3>{$lang['msgtoserver']}</h3>
                    <form method="post" action="index.php?site=serverview&amp;sid={$sid}">
                        <textarea class="form-control" type="text" name="msgtoserver" rows="3"></textarea>
                        <br>
                        <input type="hidden" name="sid" value="{$serverinfo['virtualserver_id']}" />
                        <button class="btn btn-primary btn-block" type="submit" name="sendmsg">{$lang['send']}</button>
                        <br>
                        <button type="button" class="btn btn-modal-close btn-xs btn-default" data-dismiss="modal">{$lang['close']}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
