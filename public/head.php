<!-- 
 ____    ____    ____    ____                 ____        ____    ____    ____    __  __  ____    ____       
/\  _`\ /\  _`\ /\  _`\ /\  _`\       /'\_/`\/\  _`\     /\  _`\ /\  _`\ /\  _`\ /\ \/\ \/\  _`\ /\  _`\     
\ \ \/\ \ \ \L\_\ \ \L\_\ \ \L\_\    /\      \ \ \/\_\   \ \,\L\_\ \ \L\_\ \ \L\ \ \ \ \ \ \ \L\_\ \ \L\ \   
 \ \ \ \ \ \  _\/\ \ \L_L\ \ \L_L    \ \ \__\ \ \ \/_/_   \/_\__ \\ \  _\L\ \ ,  /\ \ \ \ \ \  _\L\ \ ,  /   
  \ \ \_\ \ \ \/  \ \ \/, \ \ \/, \   \ \ \_/\ \ \ \L\ \    /\ \L\ \ \ \L\ \ \ \\ \\ \ \_/ \ \ \L\ \ \ \\ \  
   \ \____/\ \_\   \ \____/\ \____/    \ \_\\ \_\ \____/    \ `\____\ \____/\ \_\ \_\ `\___/\ \____/\ \_\ \_\
    \/___/  \/_/    \/___/  \/___/      \/_/ \/_/\/___/      \/_____/\/___/  \/_/\/ /`\/__/  \/___/  \/_/\/ /
                                                                                                             
                                                                                                             
-->
<!DOCTYPE html>
<html lang="<?php echo $_COOKIE["language"] ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo get_language()->public->site->describe ?>">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href=".<?php echo get_theme_url() ?>public/static/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/mdui@1.0.2/dist/css/mdui.min.css" />
    <title><?php echo get_language()->public->site->title ?></title>
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