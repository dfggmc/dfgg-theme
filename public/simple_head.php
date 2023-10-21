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
<html lang="<?php echo $_COOKIE['language'] ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="dfgg我的世界1.8.X - 1.12.2空岛生存+原版生存服务器">
    <meta name="keywords" content="mc,dfggmc,mcserver">
    <link rel="stylesheet" href="https://unpkg.com/mdui@1.0.2/dist/css/mdui.min.css" />
    <title>dfgg我的世界1.12.2原版生存服务器</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            color: #FFF;
            font-size: 14px;
            overflow: hidden;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: 500;
        }

        input[type="submit"],
        input[type="reset"],
        input[type="button"],
        button,
        .button {
            background-color: transparent;
            box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.35);
            color: #ffffff !important;
        }

        input[type="reset"],
        input[type="button"],
        button,
        .button {
            min-width: 0;
        }

        input[type="submit"],
        input[type="reset"],
        input[type="button"],
        button,
        .button {
            -moz-appearance: none;
            -webkit-appearance: none;
            -ms-appearance: none;
            appearance: none;
            -moz-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
            -webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
            -ms-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
            border-radius: 8px;
            border: 0;
            cursor: pointer;
            display: inline-block;
            font-weight: 300;
            height: 2.75em;
            line-height: 2.75em;
            min-width: 9.25em;
            padding: 0 1.5em;
            text-align: center;
            text-decoration: none;
            white-space: nowrap;
        }

        #background {
            position: fixed;
            top: 0;
            z-index: -1;
            background-image: url('.<?php echo get_theme_url() ?>public/static/img/PlanBackground.jpg');
            opacity: .8;
            width: 100%;
            height: 100%;
        }

        .content {
            font-weight: 500;
            text-align: center;
            margin-top: 100px;
        }
    </style>
</head>

<body>
    <?php
    require_once get_theme_url() . '/public/language_button.php'
    ?>