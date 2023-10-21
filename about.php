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
        <h1><?php echo get_language()->public->site->title ?>-<?php echo get_language()->page->home->about->title ?></h1> <!--- Server Name -->
        <p><?php echo get_language()->page->home->about->describe ?></p> <!--- Description -->
        <div class="animate__animated animate__bounceIn animate__delay-1s mdui-typo">
            <a href="./page/plan">
                <button class="mdui-btn mdui-btn-raised mdui-color-cyan">
                    <i class="fab fa-discord"></i>
                    <?php echo get_language()->page->home->about->plan_button ?>
                </button>
            </a>
            <a href="./page/SponsorshipList">
                <button class="mdui-btn mdui-btn-raised mdui-color-teal">
                    <i class="fas fa-poll"></i>
                    <?php echo get_language()->page->home->about->sponsorship_list_button ?>
                </button>
            </a>
            <a href="./page/stae">
                <button class="mdui-btn mdui-btn-raised mdui-color-indigo">
                    <i class="fas fa-poll"></i>
                    <?php echo get_language()->page->home->about->stae_button ?>
                </button>
            </a>
            <a href="./page/map">
                <button class="mdui-btn mdui-btn-raised mdui-color-lime">
                    <i class="fas fa-poll"></i>
                    <?php echo get_language()->page->home->about->map_button ?>
                </button>
            </a>
            <br>
            <a href="/"><?php echo get_language()->public->operate->return_to_previous_page ?></a>
        </div>
    </div>
</div>
<?php
require_once get_theme_url() . '/public/footer.php'
?>