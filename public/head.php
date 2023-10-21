<!--
 *██████╗ ███████╗ ██████╗ ███████╗███████╗███╗   ██╗ ██████╗     ██████╗ ██╗  ██╗██████╗     ███████╗██████╗  █████╗ ███╗   ███╗███████╗
 *██╔══██╗██╔════╝██╔════╝ ██╔════╝██╔════╝████╗  ██║██╔════╝     ██╔══██╗██║  ██║██╔══██╗    ██╔════╝██╔══██╗██╔══██╗████╗ ████║██╔════╝
 *██║  ██║█████╗  ██║  ███╗█████╗  █████╗  ██╔██╗ ██║██║  ███╗    ██████╔╝███████║██████╔╝    █████╗  ██████╔╝███████║██╔████╔██║█████╗
 *██║  ██║██╔══╝  ██║   ██║██╔══╝  ██╔══╝  ██║╚██╗██║██║   ██║    ██╔═══╝ ██╔══██║██╔═══╝     ██╔══╝  ██╔══██╗██╔══██║██║╚██╔╝██║██╔══╝
 *██████╔╝██║     ╚██████╔╝██║     ███████╗██║ ╚████║╚██████╔╝    ██║     ██║  ██║██║         ██║     ██║  ██║██║  ██║██║ ╚═╝ ██║███████╗
 *╚═════╝ ╚═╝      ╚═════╝ ╚═╝     ╚══════╝╚═╝  ╚═══╝ ╚═════╝     ╚═╝     ╚═╝  ╚═╝╚═╝         ╚═╝     ╚═╝  ╚═╝╚═╝  ╚═╝╚═╝     ╚═╝╚══════╝
 
 *██╗   ██╗███████╗██████╗ ███████╗██╗ ██████╗ ███╗   ██╗        ██╗    ██████╗     █████╗
 *██║   ██║██╔════╝██╔══██╗██╔════╝██║██╔═══██╗████╗  ██║    ██╗███║   ██╔═████╗   ██╔══██╗
 *██║   ██║█████╗  ██████╔╝███████╗██║██║   ██║██╔██╗ ██║    ╚═╝╚██║   ██║██╔██║   ╚██████║
 *╚██╗ ██╔╝██╔══╝  ██╔══██╗╚════██║██║██║   ██║██║╚██╗██║    ██╗ ██║   ████╔╝██║    ╚═══██║
 * ╚████╔╝ ███████╗██║  ██║███████║██║╚██████╔╝██║ ╚████║    ╚═╝ ██║██╗╚██████╔╝██╗ █████╔╝
 *  ╚═══╝  ╚══════╝╚═╝  ╚═╝╚══════╝╚═╝ ╚═════╝ ╚═╝  ╚═══╝        ╚═╝╚═╝ ╚═════╝ ╚═╝ ╚════╝
 * Dfgfeng PHP Frame Version :1.0.9
 * link : https://github.com/dfggmc/dfgfeng
-->
<!DOCTYPE html>
<html lang="<?php echo $_COOKIE["language"] ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="dfgg我的世界1.8.X - 1.12.2空岛生存+原版生存服务器">
    <meta name="keywords" content="mc,dfggmc,mcserver">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href=".<?php echo get_theme_url() ?>public/static/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/mdui@1.0.2/dist/css/mdui.min.css" />
    <title>dfgg我的世界1.12.2原版生存服务器</title>
    <style>
        .bg {
            background-image: url(".<?php echo get_theme_url() ?>public/static/img/background.png");
            position: absolute;
            width: 100%;
            height: 100%;
            filter: blur(7px);
            -webkit-filter: blur(7px);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
<?php
require_once get_theme_url() . '/public/language_button.php'
?>