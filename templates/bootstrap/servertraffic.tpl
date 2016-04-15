{if !isset($sid)}
    {if !isset($smarty.get.refresh) OR $smarty.get.refresh == on}
        <meta http-equiv="refresh" content="3; URL=index.php?site=servertraffic" />
    {/if}
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                {if !isset($smarty.get.refresh) OR $smarty.get.refresh == on}
                    <a href="index.php?site=servertraffic&amp;refresh=off" type="button" style="margin-bottom: 10px" class="btn btn-primary btn-block">{$lang['stoprefresh']}</a>
                {else}
                    <a href="index.php?site=servertraffic&amp;refresh=on" type="button" style="margin-bottom: 10px" class="btn btn-primary btn-block">{$lang['autorefresh']}</a>
                {/if}
            </div>
            <div class="col-md-8">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="panel-title">{$lang['instancetraffic']}</div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr class="bg-info">
                                <th>{$lang['description']}</th>
                                <th>{$lang['incoming']}</th>
                                <th>{$lang['outgoing']}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="active">
                                <td>{$lang['packetstransfered']}</td>
                                <td>{$hostinfo['connection_packets_received_total']}</td>
                                <td>{$hostinfo['connection_packets_sent_total']}</td>
                            </tr>
                            <tr>
                                <td>{$lang['bytestransfered']}</td>
                                <td>{$hostinfo['connection_bytes_received_total']}</td>
                                <td>{$hostinfo['connection_bytes_sent_total']}</td>
                            </tr>
                            <tr class="active">
                                <td>{$lang['bandwidthlastsecond']}</td>
                                <td>{$hostinfo['connection_bandwidth_received_last_second_total']} /s</td>
                                <td>{$hostinfo['connection_bandwidth_sent_last_second_total']} /s</td>
                            </tr>
                            <tr>
                                <td>{$lang['bandwidthlastminute']}</td>
                                <td>{$hostinfo['connection_bandwidth_received_last_minute_total']} /s</td>
                                <td>{$hostinfo['connection_bandwidth_sent_last_minute_total']} /s</td>
                            </tr>
                            <tr class="active">
                                <td>{$lang['filetransferbandwidth']}</td>
                                <td>{$hostinfo['connection_filetransfer_bandwidth_received']} /s</td>
                                <td>{$hostinfo['connection_filetransfer_bandwidth_sent']} /s</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
        </div>
    </div>
{else}
{if isset($permoverview['b_virtualserver_info_view']) AND empty($permoverview['b_virtualserver_info_view'])}
    <div class="container container-alert">
        <div class="alert alert-dismissable alert-danger">
            <h4><b>{$lang['error']} </b></h4>{$lang['nopermissions']}
        </div>
    </div>
{else}
    {if !isset($smarty.get.refresh) OR $smarty.get.refresh == on}
        <meta http-equiv="refresh" content="3; URL=index.php?site=servertraffic&amp;sid={$sid}" />
    {/if}
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                {if !isset($smarty.get.refresh) OR $smarty.get.refresh == on}
                    <a href="index.php?site=servertraffic&amp;sid={$sid}&amp;refresh=off" type="button" style="margin-bottom: 10px" class="btn btn-primary btn-block">{$lang['stoprefresh']}</a>
                {else}
                    <a href="index.php?site=servertraffic&amp;sid={$sid}&amp;refresh=on" type="button" style="margin-bottom: 10px" class="btn btn-primary btn-block">{$lang['autorefresh']}</a>                {/if}
            </div>
            <div class="col-md-8">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="panel-title">{$lang['virtualtraffic']}</div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="bg-info">
                                    <th>{$lang['description']}</th>
                                    <th>{$lang['incoming']}</th>
                                    <th>{$lang['outgoing']}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="active">
                                    <td>{$lang['packetstransfered']}</td>
                                    <td>{$serverinfo['connection_packets_received_total']}</td>
                                    <td>{$serverinfo['connection_packets_sent_total']}</td>
                                </tr>
                                <tr>
                                    <td>{$lang['bytestransfered']}</td>
                                    <td>{$serverinfo['connection_bytes_received_total']}</td>
                                    <td>{$serverinfo['connection_bytes_sent_total']}</td>
                                </tr>
                                <tr class="active">
                                    <td>{$lang['bandwidthlastsecond']}</td>
                                    <td>{$serverinfo['connection_bandwidth_received_last_second_total']} /s</td>
                                    <td>{$serverinfo['connection_bandwidth_sent_last_second_total']} /s</td>
                                </tr>
                                <tr>
                                    <td>{$lang['bandwidthlastminute']}</td>
                                    <td>{$serverinfo['connection_bandwidth_received_last_minute_total']} /s</td>
                                    <td>{$serverinfo['connection_bandwidth_sent_last_minute_total']} /s</td>
                                </tr>
                                <tr class="active">
                                    <td>{$lang['filetransferbandwidth']}</td>
                                    <td>{$serverinfo['connection_filetransfer_bandwidth_received']} /s</td>
                                    <td>{$serverinfo['connection_filetransfer_bandwidth_sent']} /s</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/if}
{/if}