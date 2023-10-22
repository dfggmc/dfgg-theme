<?php
require_once get_theme_url() . '/public/head.php';
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
        <h1><?php echo get_language()->public->site->title ?>-<?php echo get_language()->page->home->game->title ?></h1>
        <p><?php echo get_language()->page->home->game->describe ?></p>
        <div class="animate__animated animate__bounceIn animate__delay-1s">
            <a href="/game/GoogleDinosaur/">
                <button class="btn1">
                    <i class="fab fa-discord"></i>
                    <?php echo get_language()->page->home->game->google_dinosaur_game_button ?>
                </button>
            </a>
            <a href="/game/FruitNinja/">
                <button class="btn3">
                    <i class="fas fa-poll"></i>
                    <?php echo get_language()->page->home->game->fruit_ninja_button ?>
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