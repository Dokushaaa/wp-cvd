<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creative Visual Design - Home</title>
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <script src="https://kit.fontawesome.com/a6726e13c6.js" crossorigin="anonymous"></script>
    <!-- call heading parts -->
    <?php wp_head() ?>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header__wrapper">
                <div class="branding">
                    <!-- how to create a shitty image obj -->
                    <img src="<?php echo get_field('logo') ?>" alt="">
                    <h3>Creative <span>Visual</span>  Design</h3>
                </div>
                <div class="header__nav">
                    <ul>
                        <!-- loop call for header navigation -->
                        <?php wp_menu_li() ?>
                    </ul>
                </div>
                <div class="toggle__menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>