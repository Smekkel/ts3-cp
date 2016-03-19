{if !empty($error)}
<div class="container container-alert">
    <div class="alert alert-danger">
        <b>Warning!</b></br> {$error}
    </div>
    </div>
{/if}
<div class="container-login">
            {if !empty($motd)}
            <div class="container">
                <div class="alert alert-dismissable alert-success">
                    <h4><b>{$lang['motd']}</b></h4>{$motd}
                </div>
            </div>
             {/if}
            {if !isset($smarty.post.sendlogin) AND $loginstatus !== true OR $loginstatus !== true}
            <form class="form-signin" method="post" action="index.php?site=login">
            <h2 class="form-signin-heading text-center">{$lang['login']}</h2>
            <input type="text" class="form-control" name="loginUser" placeholder="{$lang['username']} " value="serveradmin">
            <input type="password" class="form-control" name="loginPw" placeholder="{$lang['password']}">
                <div class="row">
                    <div class="col-md-6">
                        {if count($instances) == 1}
                            {foreach key=skey item=sdata from=$instances}
                                <input type="hidden" name="skey" value="{$skey}" />
                        <fieldset disabled>
                            <input class="form-control" type="text" placeholder="{$sdata['alias']}">
                        </fieldset>
                            {/foreach}
                        {else}
                            <select class="form-control"  name="skey">
                                {foreach key=skey item=sdata from=$instances}
                                    <option value="{$skey}">{$sdata['alias']}</option>
                                {/foreach}
                            </select>
                        {/if}
                        </br>
                    </div>
                    <div class="col-md-6">
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="sendlogin">{$lang['login']}</button>
                    </div>
        </form>
            {/if}
    </div>
    <!-- /container -->
