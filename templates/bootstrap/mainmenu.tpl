<div class="container">
<div class="navbar navbar-default navbar-fixed-top">
    <a href="http://ts3cloud.net" type="button" class="btn btn-right btn-warning navbar-btn">Сайт</a>
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand">TS3 Cloud</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Панель управления</a></li>
                {if $loginstatus === true AND $site !==login}
                <li><a href="#">Сервер лист</a></li>
                <li><a href="#">Меню 1</a></li>
                <li><a href="#">Меню 2</a></li>
                {/if}
            </ul>
        </div>
    </div>
</div>
</div>