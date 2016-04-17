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

{if isset($permoverview['b_virtualserver_info_view']) AND empty($permoverview['b_virtualserver_info_view'])}
<div class="container container-alert">
    <div class="alert alert-dismissable alert-danger">
        <h4><b>{$lang['error']} </b></h4>{$lang['nopermissions']}
    </div>
</div>
{else}
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            {* Server management + quick info *}
            {* Server status *}
            <div class="container-fluid well-sm">
                {if $serverinfo['virtualserver_status'] == "online"}
                <button class="disabled btn btn-lg btn-block btn-success">{$serverinfo['virtualserver_status']}</button>
                {elseif $serverinfo['virtualserver_status'] == "offline"}
                <button class="disabled btn btn-lg btn-block btn-danger">{$serverinfo['virtualserver_status']}</button>
                {else}
                <button class="disabled btn btn-lg btn-block btn-warning">{$serverinfo['virtualserver_status']}</button>
                {/if}
            </div>
            {* Progress bar (users online) *}
            {if $serverinfo['virtualserver_status'] == "online"}
            <div class="container-fluid well-sm">
                <div class="progress">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{$serverinfo['virtualserver_clientsonline']-$serverinfo['virtualserver_queryclientsonline']}" aria-valuemin="0" aria-valuemax="{$serverinfo['virtualserver_maxclients']}" style="min-width: 2em;">
                        {$serverinfo['virtualserver_clientsonline']-$serverinfo['virtualserver_queryclientsonline']}
                    </div>
                </div>
            </div>
            {/if}
            {* Start - stop *}
            <div class="container-fluid well-sm">
                <form method="post" action="index.php?site=serverview&amp;sid={$sid}">
                    <input type="hidden" name="sid" value="{$serverinfo['virtualserver_id']}" />
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                        <div class="btn-group btn-group-lg" role="group">
                            <button type="submit" name="start" class="btn {if $serverinfo['virtualserver_status'] == "online"}btn-default disabled disableсlick{else}btn-success{/if}">{$lang['start']}</button>
                        </div>
                        <div class="btn-group btn-group-lg" role="group">
                            <button type="submit" name="stop" class="btn {if $serverinfo['virtualserver_status'] != "online"}btn-default disabled disableсlick{else}btn-danger{/if}" onclick="return confirm('{$lang['stopservermsg']}')">{$lang['stop']}</button>
                        </div>
                    </div>
                </form>
            </div>
            {* Message to server *}
            <div class="container-fluid well-sm">
                 <a href="#msgtosrv" data-toggle="modal" type="button" class="btn btn-primary btn-block btn-lg {if $serverinfo['virtualserver_status'] != "online"}disabled{/if}"><span class="glyphicon glyphicon-envelope"></span>  {$lang['msgtosrvmenu']}</a>
            </div>
            <div class="container-fluid well-sm">
                <a href="index.php?site=serveredit&amp;sid={$sid}" type="button" class="btn btn-default btn-block btn-lg"><span class="glyphicon glyphicon-pencil"></span>  {$lang['serveredit']}</a>
            </div>
        </div>
        <div class="col-md-3 col-sm-push-6">
            {* Server web viewer *}
            <div class="container-fluid">
                <div class="well-sm">
                    <h5><span class="label label-primary">{$lang['tsviewpubhtml']}</span></h5>
                </div>
                <a href="#" type="button" class="disabled btn btn-sm btn-primary btn-block viewer-code-copy">{$lang['copyhtmlcode']}</a>
                <pre class="viewer-code-box">{$pubtsview}</pre>
            </div>
            <div class="container-fluid">
                <a href="ts3server://{$smarty.session.server_ip}?port={$serverinfo['virtualserver_port']}" type="button" class="btn btn-sm btn-primary btn-block viewer-code-copy">{$lang['connectvserver']}</a>
                <pre class="viewer-code-box">{$tree}</pre>
            </div>
        </div>
        <div class="col-md-6 col-sm-pull-3">
            {* Server info (full) *}
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">{$lang['basics']}</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td class="active td-half">{$lang['name']}:</td>
                            <td class="active">{$serverinfo['virtualserver_name']}</td>
                        </tr>
                        <tr>
                            <td class="green2">{$lang['serveraddress']}:</td>
                            <td class="green2">{$smarty.session.server_ip}:{$serverinfo['virtualserver_port']}</td>
                        </tr>
                        <tr>
                            <td class="active">{$lang['status']}:</td>
                            <td class="active">{$serverinfo['virtualserver_status']}</td>
                        </tr>
                        <tr>
                            <td class="green2">{$lang['clients']}:</td>
                            <td class="green2">{$serverinfo['virtualserver_clientsonline']-$serverinfo['virtualserver_queryclientsonline']} / {$serverinfo['virtualserver_maxclients']}</td>
                        </tr>
                        <tr>
                            <td class="active">{$lang['passwordset']}:</td>
                            <td class="active">
                                {if $serverinfo['virtualserver_flag_password'] == 1}
                                    {$lang['yes']}
                                {else}
                                    {$lang['no']}
                                {/if}
                            </td>
                        </tr>
                        <tr>
                            <td>{$lang['autostart']}:</td>
                            <td>
                                {if $serverinfo['virtualserver_autostart'] == 1}
                                    {$lang['yes']}
                                {else}
                                    {$lang['no']}
                                {/if}
                            </td>
                        </tr>
                        <tr>
                            <td class="active td-half" style="width:50%">{$lang['minclientversion']}:</td>
                            <td class="active" style="width:50%">{$serverinfo['virtualserver_min_client_version']}</td>
                        </tr>
                        <tr>
                            <td class="green2">{$lang['uniqueid']}:</td>
                            <td class="green2">{$serverinfo['virtualserver_unique_identifier']}</td>
                        </tr>
                        <tr>
                            <td class="active">{$lang['welcomemsg']}:</td>
                            <td class="active">{$serverinfo['virtualserver_welcomemessage']}</td>
                        </tr>
                        <tr>
                            <td>{$lang['version']}:</td>
                            <td>{$serverinfo['virtualserver_version']}</td>
                        </tr>
                        <tr>
                            <td class="active">{$lang['platform']}:</td>
                            <td class="active">{$serverinfo['virtualserver_platform']}</td>
                        </tr>
                        <tr>
                            <td class="">{$lang['created']}:</td>
                            <td class="">{$serverinfo['virtualserver_created']|date_format:"%d.%m.%Y - %H:%M:%S"}</td>
                        </tr>
                        <tr>
                            <td class="active">{$lang['runtime']}:</td>
                            <td class="active">{$serverinfo['virtualserver_uptime']}
                            </td>
                        </tr>
                        <tr>
                            <td class="">{$lang['queryclients']}:</td>
                            <td class="">{$serverinfo['virtualserver_queryclientsonline']}</td>
                        </tr>
                        <tr>
                            <td class="active">{$lang['maxreservedslots']}:</td>
                            <td class="active">{$serverinfo['virtualserver_reserved_slots']}</td>
                        </tr>
                        <tr>
                            <td class="">{$lang['showonweblist']}:</td>
                            <td class="">
                                {if $serverinfo['virtualserver_weblist_enabled'] == 1}
                                    {$lang['yes']}
                                {else}
                                    {$lang['no']}
                                {/if}
                            </td>
                        </tr>
                        <tr>
                            <td class="active td-half">{$lang['codecencryptionmode']}:</td>
                            <td class="active">
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
                            <td class="">{$lang['channel']}:</td>
                            <td class="">{$serverinfo['virtualserver_channelsonline']}</td>
                        </tr>
                        <tr>
                            <td class="active">{$lang['minclientschan']}:</td>
                            <td class="active">{$serverinfo['virtualserver_min_clients_in_channel_before_forced_silence']}</td>
                        </tr>
                        <tr>
                            <td class="">{$lang['clientsdimm']}:</td>
                            <td class="">{$serverinfo['virtualserver_priority_speaker_dimm_modificator']}</td>
                        </tr>
                        <tr>
                            <td class="active">{$lang['securitylevel']}:</td>
                            <td class="active">{$serverinfo['virtualserver_needed_identity_security_level']}</td>
                        </tr>
                        <tr>
                            <td class="green2">{$lang['iconid']}:</td>
                            <td class="green2">{$serverinfo['virtualserver_icon_id']}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            {**}
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">{$lang['standardgroups']}</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td class="active td-half">{$lang['servergroup']}:</td>
                            <td class="active">
                                {if !empty($servergroups)}
                                    {foreach key=key item=value from=$servergroups}
                                        {if $value['sgid'] == $serverinfo['virtualserver_default_server_group']}
                                            {$value['name']} <span class="badge">  {$value['sgid']}</span>
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
                                            {$value['name']} <span class="badge">  {$value['cgid']}</span>
                                        {/if}
                                    {/foreach}
                                {/if}
                            </td>
                        </tr>
                        <tr>
                            <td class="active">{$lang['chanadmingroup']}:</td>
                            <td class="active">
                                {if !empty($channelgroups)}
                                    {foreach key=key item=value from=$channelgroups}
                                        {if $value['cgid'] == $serverinfo['virtualserver_default_channel_admin_group']}
                                            {$value['name']} <span class="badge">  {$value['cgid']}</span>
                                        {/if}
                                    {/foreach}
                                {/if}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">{$lang['host']}</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td class="active td-half">{$lang['hostmessage']}:</td>
                                <td class="active">{$serverinfo['virtualserver_hostmessage']}</td>
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
                                <td class="active">{$lang['hosturl']}:</td>
                                <td class="active">{$serverinfo['virtualserver_hostbanner_url']}</td>
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
                                <td class="active">{$lang['hostbannerintval']}:</td>
                                <td class="active">{$serverinfo['virtualserver_hostbanner_gfx_interval']}</td>
                            </tr>
                            <tr>
                                <td class="green2">{$lang['hostbuttongfx']}:</td>
                                <td class="green2">{$serverinfo['virtualserver_hostbutton_gfx_url']}</td>
                            </tr>
                            <tr>
                                <td class="active">{$lang['hostbuttontooltip']}:</td>
                                <td class="active">{$serverinfo['virtualserver_hostbutton_tooltip']}</td>
                            </tr>
                            <tr>
                                <td class="green2">{$lang['hostbuttonurl']}:</td>
                                <td class="green2">{$serverinfo['virtualserver_hostbutton_url']}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                {**}
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">{$lang['autoban']}</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td class="green2 td-half">{$lang['autobancount']}:</td>
                                <td class="green2">{$serverinfo['virtualserver_complain_autoban_count']}</td>
                            </tr>
                            <tr>
                                <td class="active">{$lang['autobantime']}:</td>
                                <td class="active">{$serverinfo['virtualserver_complain_autoban_time']}</td>
                            </tr>
                            <tr>
                                <td class="green2">{$lang['removetime']}:</td>
                                <td class="green2">{$serverinfo['virtualserver_complain_remove_time']}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                {**}
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">{$lang['antiflood']}</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td class="active td-half">{$lang['pointstickreduce']}:</td>
                                <td class="active">{$serverinfo['virtualserver_antiflood_points_tick_reduce']}</td>
                            </tr>
                            <tr>
                                <td class="green2">{$lang['pointsneededblockcmd']}:</td>
                                <td class="green2">{$serverinfo['virtualserver_antiflood_points_needed_command_block']}</td>
                            </tr>
                            <tr>
                                <td class="active">{$lang['pointsneededblockip']}:</td>
                                <td class="active">{$serverinfo['virtualserver_antiflood_points_needed_ip_block']}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                {**}
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">{$lang['transfers']}</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td class="active td-half">{$lang['upbandlimit']}:</td>
                                <td class="active">{$serverinfo['virtualserver_max_upload_total_bandwidth']} <span class="label label-primary">Byte/s</span></td>
                            </tr>
                            <tr>
                                <td class="green2">{$lang['uploadquota']}:</td>
                                <td class="green2">{$serverinfo['virtualserver_upload_quota']} <span class="label label-primary">MiB</span></td>
                            </tr>
                            <tr>
                                <td class="active">{$lang['downbandlimit']}:</td>
                                <td class="active">{$serverinfo['virtualserver_max_download_total_bandwidth']} <span class="label label-primary">Byte/s</span></td>
                            </tr>
                            <tr>
                                <td class="green2">{$lang['downloadquota']}:</td>
                                <td class="green2">{$serverinfo['virtualserver_download_quota']} <span class="label label-primary">MiB</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">{$lang['logs']}</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td class="active td-half">{$lang['logclient']}:</td>
                            <td class="active">
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
                            <td class="active">{$lang['logchannel']}:</td>
                            <td class="active">
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
                            <td class="active">{$lang['logserver']}:</td>
                            <td class="active">
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{* Modal pop-ups *}
<div class="modal fade" tabindex="-1" role="dialog" id="msgtosrv">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="index.php?site=serverview&amp;sid={$sid}">
                <input type="hidden" name="sid" value="{$serverinfo['virtualserver_id']}" />
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">{$lang['msgtoserver']}</h4>
                </div>
                <div class="modal-body">
                    <textarea class="form-control vertresize" name="msgtoserver" rows="3" placeholder="{$lang['msgtexthere']}"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{$lang['close']}</button>
                    <button class="btn btn-primary" type="submit" name="sendmsg">{$lang['send']}</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
{/if}