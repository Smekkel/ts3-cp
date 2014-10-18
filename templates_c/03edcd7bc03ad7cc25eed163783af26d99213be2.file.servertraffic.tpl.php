<?php /* Smarty version Smarty3rc4, created on 2014-07-15 16:15:52
         compiled from "W:\home\cp.test.ru\www\ts3wi\templates/yeti/servertraffic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2333353c51b78e1e682-97329802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03edcd7bc03ad7cc25eed163783af26d99213be2' => 
    array (
      0 => 'W:\\home\\cp.test.ru\\www\\ts3wi\\templates/yeti/servertraffic.tpl',
      1 => 1405426552,
    ),
  ),
  'nocache_hash' => '2333353c51b78e1e682-97329802',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!isset($_smarty_tpl->getVariable('sid')->value)){?>
    <?php if (!isset($_GET['refresh'])||$_GET['refresh']=='on'){?>
        <meta http-equiv="refresh" content="3; URL=index.php?site=servertraffic" />
    <?php }?>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php if (!isset($_GET['refresh'])||$_GET['refresh']=='on'){?>
                    <a href="index.php?site=servertraffic&amp;refresh=off" type="button" style="margin-bottom: 10px" class="btn btn-info btn-block"><?php echo $_smarty_tpl->getVariable('lang')->value['stoprefresh'];?>
</a>
                <?php }else{ ?>
                    <a href="index.php?site=servertraffic&amp;refresh=on" type="button" style="margin-bottom: 10px" class="btn btn-info btn-block"><?php echo $_smarty_tpl->getVariable('lang')->value['autorefresh'];?>
</a>
                <?php }?>
            </div>
            <div class="col-md-8">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width:100%; text-align: center" class="thead" colspan="3"><?php echo $_smarty_tpl->getVariable('lang')->value['instancetraffic'];?>
</th>
                        </tr>
                        <tr>
                            <td style="width:33%" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['description'];?>
</td>
                            <td style="width:33%" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['incoming'];?>
</td>
                            <td style="width:33%" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['outgoing'];?>
</td>
                        </tr>
                        <tr>
                            <td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['packetstransfered'];?>
</td>
                            <td class="green1 center"><?php echo $_smarty_tpl->getVariable('hostinfo')->value['connection_packets_received_total'];?>
</td>
                            <td class="green1 center"><?php echo $_smarty_tpl->getVariable('hostinfo')->value['connection_packets_sent_total'];?>
</td>
                        </tr>
                        <tr>
                            <td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['bytestransfered'];?>
</td>
                            <td class="green2 center"><?php echo $_smarty_tpl->getVariable('hostinfo')->value['connection_bytes_received_total'];?>
</td>
                            <td class="green2 center"><?php echo $_smarty_tpl->getVariable('hostinfo')->value['connection_bytes_sent_total'];?>
</td>
                        </tr>
                        <tr>
                            <td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['bandwidthlastsecond'];?>
</td>
                            <td class="green1 center"><?php echo $_smarty_tpl->getVariable('hostinfo')->value['connection_bandwidth_received_last_second_total'];?>
 /s</td>
                            <td class="green1 center"><?php echo $_smarty_tpl->getVariable('hostinfo')->value['connection_bandwidth_sent_last_second_total'];?>
 /s</td>
                        </tr>
                        <tr>
                            <td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['bandwidthlastminute'];?>
</td>
                            <td class="green2 center"><?php echo $_smarty_tpl->getVariable('hostinfo')->value['connection_bandwidth_received_last_minute_total'];?>
 /s</td>
                            <td class="green2 center"><?php echo $_smarty_tpl->getVariable('hostinfo')->value['connection_bandwidth_sent_last_minute_total'];?>
 /s</td>
                        </tr>
                        <tr>
                            <td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['filetransferbandwidth'];?>
</td>
                            <td class="green1 center"><?php echo $_smarty_tpl->getVariable('hostinfo')->value['connection_filetransfer_bandwidth_received'];?>
 /s</td>
                            <td class="green1 center"><?php echo $_smarty_tpl->getVariable('hostinfo')->value['connection_filetransfer_bandwidth_sent'];?>
 /s</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php }else{ ?>
<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_info_view'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_info_view'])){?>
        <table align="center" style="width:50%" class="border" cellpadding="1" cellspacing="0">

            <tr>
                <td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['error'];?>
</td>
            </tr>
            <tr>
                <td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['nopermissions'];?>
</td>
            </tr>
        </table>
<?php }else{ ?>
    <?php if (!isset($_GET['refresh'])||$_GET['refresh']=='on'){?>
        <meta http-equiv="refresh" content="3; URL=index.php?site=servertraffic&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
" />
    <?php }?>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php if (!isset($_GET['refresh'])||$_GET['refresh']=='on'){?>
                    <a href="index.php?site=servertraffic&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
&amp;refresh=off" type="button" style="margin-bottom: 10px" class="btn btn-info btn-block"><?php echo $_smarty_tpl->getVariable('lang')->value['stoprefresh'];?>
</a>
                <?php }else{ ?>
                    <a href="index.php?site=servertraffic&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
&amp;refresh=on" type="button" style="margin-bottom: 10px" class="btn btn-info btn-block"><?php echo $_smarty_tpl->getVariable('lang')->value['autorefresh'];?>
</a>                <?php }?>
            </div>
            <div class="col-md-8">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width:100%; text-align: center" class="thead" colspan="3"><?php echo $_smarty_tpl->getVariable('lang')->value['virtualtraffic'];?>
</th>
                        </tr>
                        <tr>
                            <td style="width:33%" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['description'];?>
</td>
                            <td style="width:33%" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['incoming'];?>
</td>
                            <td style="width:33%" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['outgoing'];?>
</td>
                        </tr>
                        <tr>
                            <td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['packetstransfered'];?>
</td>
                            <td class="green1 center"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['connection_packets_received_total'];?>
</td>
                            <td class="green1 center"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['connection_packets_sent_total'];?>
</td>
                        </tr>
                        <tr>
                            <td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['bytestransfered'];?>
</td>
                            <td class="green2 center"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['connection_bytes_received_total'];?>
</td>
                            <td class="green2 center"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['connection_bytes_sent_total'];?>
</td>
                        </tr>
                        <tr>
                            <td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['bandwidthlastsecond'];?>
</td>
                            <td class="green1 center"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['connection_bandwidth_received_last_second_total'];?>
 /s</td>
                            <td class="green1 center"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['connection_bandwidth_sent_last_second_total'];?>
 /s</td>
                        </tr>
                        <tr>
                            <td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['bandwidthlastminute'];?>
</td>
                            <td class="green2 center"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['connection_bandwidth_received_last_minute_total'];?>
 /s</td>
                            <td class="green2 center"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['connection_bandwidth_sent_last_minute_total'];?>
 /s</td>
                        </tr>
                        <tr>
                            <td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['filetransferbandwidth'];?>
</td>
                            <td class="green1 center"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['connection_filetransfer_bandwidth_received'];?>
 /s</td>
                            <td class="green1 center"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['connection_filetransfer_bandwidth_sent'];?>
 /s</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php }?>
<?php }?>