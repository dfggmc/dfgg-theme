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
        <h1><?php echo get_language()->page->home->index->title ?></h1>
        <p><?php echo get_language()->page->home->index->describe ?></p>
        <div class="animate__animated animate__bounceIn animate__delay-1s">
            <a href="about">
                <button class="mdui-btn mdui-btn-raised mdui-color-pink">
                    <?php echo get_language()->page->home->index->about_button ?>
                </button>
            </a>
            <a href="join">
                <button class="mdui-btn mdui-btn-raised mdui-color-deep-purple">
                    <?php echo get_language()->page->home->index->join_button ?>
                </button>
            </a>
            <a href="page/game">
                <button class="mdui-btn mdui-btn-raised mdui-color-purple">
                    <?php echo get_language()->page->home->index->game_button ?>
                    <i class="mdui-icon material-icons">videogame_asset</i>
                </button>
            </a>
            <br>
        </div>
    </div>
</div>
<?php
require_once get_theme_url() . '/public/footer.php'
?>