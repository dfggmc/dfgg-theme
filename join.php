<?php
require_once get_theme_url() . '/public/head.php'
?>

<div class="bg"></div>
<!--- Particles -->
<div class="animation-wrapper">
    <div class="particle particle-1"></div>
    <div class="particle particle-2"></div>
    <div class="particle particle-3"></div>
    <div class="particle particle-4"></div>
</div>
<div class="center">
    <div class="animate__animated animate__jackInTheBox">
        <h1><?php echo get_language()->public->site->title ?>-<?php echo get_language()->page->home->join->title ?></h1>
        <div class="animate__animated animate__bounceIn animate__delay-1s">
            <a href="http://qm.qq.com/cgi-bin/qm/qr?_wv=1027&k=DAjKCyKVcJsqHfX72sC_5FYKf3hWCtLP&authKey=89gXv5rmDCnYxGQ3zi1piH2Z55edIOz3GdCyulPm2ESbfQLm10u3zmb9YDblx23i&noverify=0&group_code=569578817">
                <button class="mdui-btn mdui-btn-raised mdui-color-light-blue">
                    <?php echo get_language()->page->home->join->qq_group_number_button ?>
                </button>
            </a>
            <a href="http://chat.tpfeng.top/dfgg" target="_blank">
                <button class="mdui-btn mdui-btn-raised mdui-color-cyan">
                    <?php echo get_language()->page->home->join->online_chat_rooms_button ?>
                </button>
            </a>
            <a href="https://discord.gg/jWCdnXB5nR" target="_blank" rel="noopener noreferrer">
                <button class="mdui-btn mdui-btn-raised mdui-color-teal">
                    <?php echo get_language()->page->home->join->discord_sever_button ?>
                </button>
            </a>
            <a href="https://bbs.dfggmc.top" target="_blank">
                <button class="mdui-btn mdui-btn-raised mdui-color-indigo">
                    <?php echo get_language()->page->home->join->bbs_button ?>
                </button>
            </a>
            <br>
            <div class="mdui-typo">
                <a href="javascript:history.back(-1)"><?php echo get_language()->public->operate->return_to_previous_page ?></a>
            </div>
        </div>
    </div>
</div>
<?php
require_once get_theme_url() . '/public/footer.php'
?>