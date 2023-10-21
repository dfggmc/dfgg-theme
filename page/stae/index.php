<?php
// 原作者为MCNewsTools，由GamerNoTitle二次修改，模板套用的HTML5UP的HTML模板，请在使用该程序的时候不要删除版权信息，Thanks♪(･ω･)ﾉ！
$host = "play.dfggmc.top"; //设置服务器域名或 IP
$port = "56558"; //设置服务器端口，可以直接用服务器的链接端口，也可以使用query端口（UDP协议）
$iconlink = ''; // 网站图标链接，可以使图片格式（.png/.jpg/etc.）或者是ico图标，用绝对路径或相对路径均可
$imagelink = 'https://img.xcccx.top/imgs/2023/10/844f035355d840f4.jpg'; // 图片链接，会显示在服务器信息右边的圈圈里
require_once __DIR__ . '/data.php';
?>
<html lang="<?php echo $_COOKIE['language'] ?>">

<head>
    <title><?php echo get_language()->page->page->stae->title; ?></title>
    <link rel="shortcut icon" href=<?php echo $iconlink; ?>>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href=".<?php echo get_theme_url() ?>public/static/stae/css/main.css" />
    <link rel="stylesheet" href=".<?php echo get_theme_url() ?>public/static/stae/css/noscript.css" />
</head>
<?php
require_once get_theme_url() . '/public/language_button.php'
?>

<body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Main -->
        <div id="main">

            <!-- Introduction -->
            <section id="intro" class="main">
                <div class="spotlight">
                    <div class="content">
                        <header class="major">
                            <h1><?php echo get_language()->page->page->stae->title; ?></h1>
                            <p><?php echo get_language()->page->page->stae->describe; ?></p>
                        </header>
                        <hr>
                        <p><?php echo get_language()->page->page->stae->stae ?><font color="#2a6c0f"><?php echo $status; ?></font>
                        </p>
                        <p><?php echo get_language()->page->page->stae->ip_or_host ?><font color="#2a6c0f"><?php echo $host; ?></font>
                            <br><?php echo get_language()->page->page->stae->port ?><font color="#2a6c0f"><?php echo $port; ?></font>
                        </p>
                        <p><?php echo get_language()->page->page->stae->MOTD ?><font color="#2a6c0f"><?php echo $motd; ?></font>
                            <br><?php echo get_language()->page->page->stae->clean_motd ?><font color="#2a6c0f"><?php echo $clean_motd; ?></font>
                            <br><?php echo get_language()->page->page->stae->html_motd ?><font color="#2a6c0f"><?php echo $html_motd; ?></font>
                        </p>
                        <p><?php echo get_language()->page->page->stae->platform ?><font color="#2a6c0f"><?php echo $platform; ?></font>
                            <br><?php echo get_language()->page->page->stae->game_type ?><font color="#2a6c0f"><?php echo $gametype; ?></font>
                        </p>
                        <p><?php echo get_language()->page->page->stae->version ?><font color="#2a6c0f"><?php echo $version; ?></font>
                            <br><?php echo get_language()->page->page->stae->software ?><font color="#2a6c0f"><?php echo $software; ?></font>
                        </p>
                        <p>
                            <?php echo get_language()->page->page->stae->players_max ?>
                            <font color="#2a6c0f"><?php echo $players_max; ?></font>
                            <br>
                            <?php get_language()->page->page->stae->number_of_online_players ?>
                            <font color="#2a6c0f"><?php echo $players_online; ?></font>
                        </p>
                        <p><?php echo get_language()->page->page->stae->agreement ?><font color="#2a6c0f"><?php echo $agreement; ?></font>
                            <br><?php echo get_language()->page->page->stae->processed ?><font color="#2a6c0f"><?php echo $processed; ?></font>
                        </p>
                        <!-- <hr> -->
                        <h3><?php echo get_language()->page->page->stae->current_online_players ?><font color="#2a6c0f"><?php echo $players_online; ?></font>/<font color="#2a6c0f"><?php echo $players_max; ?></font>
                        </h3>
                        <?php if (is_array($Players)) : ?>
                            <?php foreach ($Players as $Player) : ?>
                                <?php if ($platform == "MINECRAFT") : ?>
                                    <?php echo '<img src="https://cravatar.eu/helmhead/' . htmlspecialchars($Player) . '/15.png"> ' . htmlspecialchars($Player); ?><br>
                                <?php else : ?>
                                    <?php echo '<img src="https://cravatar.eu/helmhead/steve/15.png"> ' . htmlspecialchars($Player); ?><br>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <?php echo get_language()->page->page->stae->no_players_online ?>
                        <?php endif; ?>
                        <hr>
                    </div>
                    <span class="image"><img src=<?php echo $imagelink; ?> alt="" /></span>
                </div>
                <p class="title"><a href="/about"><?php echo get_language()->public->operate->return_to_previous_page ?></a></p>

            </section>
        </div>
    </div>
    <!-- Scripts -->
    <script src="https://unpkg.com/mdui@1.0.2/dist/js/mdui.min.js"></script>
    <script src=".<?php echo get_theme_url() ?>public/static/stae/js/jquery.min.js"></script>
    <script src=".<?php echo get_theme_url() ?>public/static/stae/js/jquery.scrollex.min.js"></script>
    <script src=".<?php echo get_theme_url() ?>public/static/stae/js/jquery.scrolly.min.js"></script>
    <script src=".<?php echo get_theme_url() ?>public/static/stae/js/browser.min.js"></script>
    <script src=".<?php echo get_theme_url() ?>public/static/stae/js/breakpoints.min.js"></script>
    <script src=".<?php echo get_theme_url() ?>public/static/stae/js/util.js"></script>
    <script src=".<?php echo get_theme_url() ?>public/static/stae/js/main.js"></script>
    <script src=".<?php echo get_theme_url() ?>public/static/js/IndexScript.js"></script>
</body>

</html>