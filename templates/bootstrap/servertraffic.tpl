{if !isset($sid)}
    {if !isset($smarty.get.refresh) OR $smarty.get.refresh == on}
        <meta http-equiv="refresh" content="3; URL=index.php?site=servertraffic" />
    {/if}
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                {if !isset($smarty.get.refresh) OR $smarty.get.refresh == on}
                    <a href="index.php?site=servertraffic&amp;refresh=off" type="button" style="margin-bottom: 10px" class="btn btn-info btn-block">{$lang['stoprefresh']}</a>
                {else}
                    <a href="index.php?site=servertraffic&amp;refresh=on" type="button" style="margin-bottom: 10px" class="btn btn-info btn-block">{$lang['autorefresh']}</a>
                {/if}
            </div>
            <div class="col-md-8">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width:100%; text-align: center" class="thead" colspan="3">{$lang['instancetraffic']}</th>
                        </tr>
                        <tr>
                            <td style="width:33%" class="thead">{$lang['description']}</td>
                            <td style="width:33%" class="thead">{$lang['incoming']}</td>
                            <td style="width:33%" class="thead">{$lang['outgoing']}</td>
                        </tr>
                        <tr>
                            <td class="green1">{$lang['packetstransfered']}</td>
                            <td class="green1 center">{$hostinfo['connection_packets_received_total']}</td>
                            <td class="green1 center">{$hostinfo['connection_packets_sent_total']}</td>
                        </tr>
                        <tr>
                            <td class="green2">{$lang['bytestransfered']}</td>
                            <td class="green2 center">{$hostinfo['connection_bytes_received_total']}</td>
                            <td class="green2 center">{$hostinfo['connection_bytes_sent_total']}</td>
                        </tr>
                        <tr>
                            <td class="green1">{$lang['bandwidthlastsecond']}</td>
                            <td class="green1 center">{$hostinfo['connection_bandwidth_received_last_second_total']} /s</td>
                            <td class="green1 center">{$hostinfo['connection_bandwidth_sent_last_second_total']} /s</td>
                        </tr>
                        <tr>
                            <td class="green2">{$lang['bandwidthlastminute']}</td>
                            <td class="green2 center">{$hostinfo['connection_bandwidth_received_last_minute_total']} /s</td>
                            <td class="green2 center">{$hostinfo['connection_bandwidth_sent_last_minute_total']} /s</td>
                        </tr>
                        <tr>
                            <td class="green1">{$lang['filetransferbandwidth']}</td>
                            <td class="green1 center">{$hostinfo['connection_filetransfer_bandwidth_received']} /s</td>
                            <td class="green1 center">{$hostinfo['connection_filetransfer_bandwidth_sent']} /s</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
{else}
{if isset($permoverview['b_virtualserver_info_view']) AND empty($permoverview['b_virtualserver_info_view'])}
        <table align="center" style="width:50%" class="border" cellpadding="1" cellspacing="0">

            <tr>
                <td class="thead">{$lang['error']}</td>
            </tr>
            <tr>
                <td class="green1">{$lang['nopermissions']}</td>
            </tr>
        </table>
{else}
    {if !isset($smarty.get.refresh) OR $smarty.get.refresh == on}
        <meta http-equiv="refresh" content="3; URL=index.php?site=servertraffic&amp;sid={$sid}" />
    {/if}
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                {if !isset($smarty.get.refresh) OR $smarty.get.refresh == on}
                    <a href="index.php?site=servertraffic&amp;sid={$sid}&amp;refresh=off" type="button" style="margin-bottom: 10px" class="btn btn-info btn-block">{$lang['stoprefresh']}</a>
                {else}
                    <a href="index.php?site=servertraffic&amp;sid={$sid}&amp;refresh=on" type="button" style="margin-bottom: 10px" class="btn btn-info btn-block">{$lang['autorefresh']}</a>                {/if}
            </div>
            <div class="col-md-8">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width:100%; text-align: center" class="thead" colspan="3">{$lang['virtualtraffic']}</th>
                        </tr>
                        <tr>
                            <td style="width:33%" class="thead">{$lang['description']}</td>
                            <td style="width:33%" class="thead">{$lang['incoming']}</td>
                            <td style="width:33%" class="thead">{$lang['outgoing']}</td>
                        </tr>
                        <tr>
                            <td class="green1">{$lang['packetstransfered']}</td>
                            <td class="green1 center">{$serverinfo['connection_packets_received_total']}</td>
                            <td class="green1 center">{$serverinfo['connection_packets_sent_total']}</td>
                        </tr>
                        <tr>
                            <td class="green2">{$lang['bytestransfered']}</td>
                            <td class="green2 center">{$serverinfo['connection_bytes_received_total']}</td>
                            <td class="green2 center">{$serverinfo['connection_bytes_sent_total']}</td>
                        </tr>
                        <tr>
                            <td class="green1">{$lang['bandwidthlastsecond']}</td>
                            <td class="green1 center">{$serverinfo['connection_bandwidth_received_last_second_total']} /s</td>
                            <td class="green1 center">{$serverinfo['connection_bandwidth_sent_last_second_total']} /s</td>
                        </tr>
                        <tr>
                            <td class="green2">{$lang['bandwidthlastminute']}</td>
                            <td class="green2 center">{$serverinfo['connection_bandwidth_received_last_minute_total']} /s</td>
                            <td class="green2 center">{$serverinfo['connection_bandwidth_sent_last_minute_total']} /s</td>
                        </tr>
                        <tr>
                            <td class="green1">{$lang['filetransferbandwidth']}</td>
                            <td class="green1 center">{$serverinfo['connection_filetransfer_bandwidth_received']} /s</td>
                            <td class="green1 center">{$serverinfo['connection_filetransfer_bandwidth_sent']} /s</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
{/if}
{/if}