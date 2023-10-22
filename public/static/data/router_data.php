<?php
$theme_url = get_theme_url();
$routes = array(
    "" => $theme_url . "index.php",
    "/join" => $theme_url . "join.php",
    "/about" => $theme_url . "about.php",
    "/page/stae" => $theme_url . "page/stae/index.php",
    "/page/game" => $theme_url . "page/game.php",
    "/game/GoogleDinosaur" => $theme_url . "game/GoogleDinosaur/index.php",
    "/sitemap.xml" => $theme_url . "sitemap.php",
    "/page/(.+)" => $theme_url . "page/page.php",
);
