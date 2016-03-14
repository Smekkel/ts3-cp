<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        {if $hoststatus === true}
            <a href="index.php" class="navbar-brand">TS3<sup><small>CP</small></sup></a>
        {else}
            <a href="index.php?site=serverview&sid={$sid}" class="navbar-brand">TS3<sup><small>CP</small></sup></a>
        {/if}
    </div>
    {if $loginstatus === true AND $site !==login}
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                {if $loginstatus === true AND $site !==login}
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-hdd"></span> {$lang['server']} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            {* <li><a href="#">Action</a></li>
                           <li class="divider"></li> *}
                            {if $hoststatus === true}
                                <li><a href="index.php?site=server">{$lang['serverlist']}</a></li>
                            {/if}
                            {if !isset($sid) AND $hoststatus === true}
                                <li><a href="index.php?site=createserver">{$lang['createserver']}</a></li>
                                <li><a href="index.php?site=servertraffic">{$lang['instancetraffic']}</a></li>
                                <li><a href="index.php?site=instanceedit">{$lang['instanceedit']}</a></li>
                                <li><a href="index.php?site=logview">{$lang['logview']}</a></li>
                                <li><a href="index.php?site=iserverbackup">{$lang['instancebackup']}</a></li>
                            {/if}
                            {if isset($sid)}
                                <li><a href="index.php?site=serverview&amp;sid={$sid}">{$lang['serverview']}</a></li>
                                <li><a href="index.php?site=servertraffic&amp;sid={$sid}">{$lang['virtualtraffic']}</a></li>
                                <li><a href="index.php?site=serveredit&amp;sid={$sid}">{$lang['serveredit']}</a></li>
                                <li><a href="index.php?site=temppw&amp;sid={$sid}">{$lang['temppw']}</a></li>
                                <li><a href="index.php?site=fileupload&amp;sid={$sid}">{$lang['iconupload']}</a></li>
                                <li><a href="index.php?site=logview&amp;sid={$sid}">{$lang['logview']}</a></li>
                                <li><a href="index.php?site=filelist&amp;sid={$sid}">{$lang['filelist']}</a></li>
                                <li class="divider"></li>
                                <li><a href="javascript:oeffnefenster('site/interactive.php?sid={$sid}&amp;action=action');">{$lang['massaction']}</a></li>
                            {/if}
                        </ul>
                    </li>
                    {if isset($sid)}
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list"></span> {$lang['channel']} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="index.php?site=channel&amp;sid={$sid}">{$lang['channellist']}</a></li>
                                <li><a href="index.php?site=createchannel&amp;sid={$sid}">{$lang['createchannel']}</a></li>
                                {if isset($cid)}
                                    <li><a href="index.php?site=channelview&amp;sid={$sid}&amp;cid={$cid}">{$lang['channelview']}</a></li>
                                    <li><a href="index.php?site=channeledit&amp;sid={$sid}&amp;cid={$cid}">{$lang['channeledit']}</a></li>
                                {/if}
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> {$lang['clients']} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="index.php?site=counter&amp;sid={$sid}">{$lang['clientcounter']}</a></li>
                                <li><a href="index.php?site=clients&amp;sid={$sid}">{$lang['clientlist']}</a></li>
                                <li><a href="index.php?site=complainlist&amp;sid={$sid}">{$lang['complainlist']}</a></li>
                                <li><a href="index.php?site=chanclienteditperm&amp;sid={$sid}">{$lang['chanclientperms']}</a></li>
                                <li><a href="index.php?site=clientcleaner&amp;sid={$sid}">{$lang['clientcleaner']}</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-remove-circle"></span> {$lang['bans']} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="index.php?site=banlist&amp;sid={$sid}">{$lang['banlist']}</a></li>
                                <li><a href="index.php?site=banadd&amp;sid={$sid}">{$lang['addban']}</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-book"></span> {$lang['groups']} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="index.php?site=sgroups&amp;sid={$sid}">{$lang['servergroups']}</a></li>
                                <li><a href="index.php?site=sgroupadd&amp;sid={$sid}">{$lang['addservergroup']}</a></li>
                                <li><a href="index.php?site=cgroups&amp;sid={$sid}">{$lang['channelgroups']}</a></li>
                                <li><a href="index.php?site=cgroupadd&amp;sid={$sid}">{$lang['addchannelgroup']}</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-tower"></span> {$lang['token']} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="index.php?site=token&amp;sid={$sid}">{$lang['token']}</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-lock"></span> {$lang['backup']} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="index.php?site=backup&amp;sid={$sid}">{$lang['chanbackups']}</a></li>
                                <li><a href="index.php?site=serverbackup&amp;sid={$sid}">{$lang['serverbackups']}</a></li>
                                <li><a href="index.php?site=permexport&amp;sid={$sid}">{$lang['permexport']}</a></li>
                                <li><a href="index.php?site=clientsexport&amp;sid={$sid}">{$lang['clientsexport']}</a></li>
                                <li><a href="index.php?site=bansexport&amp;sid={$sid}">{$lang['bansexport']}</a></li>
                            </ul>
                        </li>
                        {* <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{$lang['console']} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="index.php?site=console&amp;sid={$sid}">{$lang['queryconsole']}</a></li>
                            </ul>
                        </li> *}
                    {/if}
                {/if}
            </ul>

            <ul class="nav navbar-nav navbar-right data-no-collapse="true">
            {if $fastswitch == true AND $hoststatus === true}
                <li><a href="#server-switch" data-toggle="modal"><span class="glyphicon glyphicon-sort"></span> {$lang['switch-server']}</a></li>
            {/if}
            {if $hoststatus === false}
                <li><a href="index.php?site=serverview&sid={$sid}"><span class="glyphicon glyphicon-bookmark"></span> {$lang['my-server']}</a></li>
            {/if}
            <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user" style="margin-right: 10px"> </span> {$smarty.session.loginuser}<span class="caret" style="margin-left: 10px"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="index.php?site=console&amp;sid={$sid}">{$lang['queryconsole']}</a></li>
                    <li><a href="#msgtoall" data-toggle="modal">{$lang['msgtoallmenu']}</a></li>
                    <li class="divider"></li>
                    <li><a href="index.php?site=logout"><span class="glyphicon glyphicon-log-out"> </span> {$lang['logout']}</a></li>
                </ul>
            </li>
            </ul>
        </div>
    {/if}
</div>
<!-- Modal -->
<div class="modal fade" id="server-switch" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container-modal">
                    <h3>{$lang['choose-server']}</h3>
                    {if $fastswitch == true AND $hoststatus === true}
                        <form class="fastswitch-selection" method="get" action="index.php?site=serverview">
                            {if strpos($site, 'edit') == false OR $site == serveredit}
                                <input type="hidden" name="site" value="{$site}" />
                            {else}
                                <input type="hidden" name="site" value="serverview" />
                            {/if}
                            <select class="fastswitch-selection form-control" name="sid" onchange="submit()">
                                {foreach key=key item=server from=$serverlist}
                                    {if $sid == $server['virtualserver_id']}
                                        <option selected="selected" value="{$server['virtualserver_id']}">{$server['virtualserver_name']}-{$server['virtualserver_port']}</option>
                                    {else}
                                        <option value="{$server['virtualserver_id']}">{$server['virtualserver_name']}-{$server['virtualserver_port']}</option>
                                    {/if}
                                {/foreach}
                            </select>
                        </form>
                    {/if}
                    <br>
                    <button type="button" class="btn btn-modal-close btn-xs btn-info" data-dismiss="modal">{$lang['close']}</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="msgtoall" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container-modal">
                    <h3>{$lang['msgtoall']}</h3>
                    <form method="post" action="index.php?site=server">
                        <textarea class="form-control" type="text" name="msgtoall" rows="3"></textarea>
                        <br>
                        <button class="btn btn-primary btn-block" type="submit" name="sendmsg">{$lang['send']}</button>
                        <br>
                        <button type="button" class="btn btn-modal-close btn-xs btn-default" data-dismiss="modal" style="width: 80%">{$lang['close']}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>