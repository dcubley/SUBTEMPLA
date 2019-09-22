<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>SUBTEMPLA</title>

    <?php wp_head();?>

</head>
<body>


<header>
        <div class="container">

            <div class="row d-flex align-items-center justify-content-between">
                
                <img src="<?php bloginfo('template_directory');?>/images/music-logo2.png" class="img-fluid logo">

                <?php wp_nav_menu( array('theme_location' => 'top-menu', 'menu_class' => 'top-bar'));?>

            </div>
        </div>
        
</header>