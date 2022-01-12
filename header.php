<!DOCTYPE html>
<html>

<head>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <div class="container">
        <header>
            <nav>
                <div class="desktop-nav">
                    <a href="<?php echo site_url('/')?>" class="logo"><img
                            src=<?php echo get_theme_file_uri('./images/logo.png') ?> alt="logo"></a>
                    <ul>
                        <li><a href="<?php echo site_url('/')?>">HOME</a></li>
                        <li><a href="<?php echo site_url('/menu')?>">MENU</a></li>
                        <li><a href="<?php echo site_url('/about-page')?>">ABOUT</a></li>
                        <li><a href="<?php echo site_url('/contact')?>">CONTACT</a></li>
                    </ul>
                    <div class="dropdown">
                        <button class="dropbtn">ORDERING OPTIONS</button>
                        <div id="myDropdown" class="dropdown-content">
                            <div class="dropdown-container">
                                <div class="dropdown-container_details">
                                    <a href="tel:+45 60141520"><p id="copynumber" value="+45 52 62 58 89">+45 52 62 58 89</p></a>
                                    <a href="tel:+45 60141520"><p>Call now</p></a>
                                    <i onclick="copy()"><i class="far fa-copy"></i></i>
                                </div>
                                <div class="dropdown-container_divider">
                                    <div class="dropdown-line"></div>
                                    <p>or</p>
                                    <div class="dropdown-line"></div>
                                </div>

                                <div class="dropdown-container_services">
                                    <img src=<?php echo get_theme_file_uri('./images/hungry.svg') ?> alt=" hungry" style="zoom: 2; margin-left: -30px;">
                                    <img src=<?php echo get_theme_file_uri('./images/waiteer.svg') ?> alt=" waiteer">
                                    <img src=<?php echo get_theme_file_uri('./images/wolt.svg') ?> alt="wolt">
                                    <img src=<?php echo get_theme_file_uri('./images/justeat.svg') ?> alt="justeat">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-nav">
                    <a href="<?php echo site_url('/')?>" class="logo"><img
                            src=<?php echo get_theme_file_uri('./images/logo.png') ?> alt="logo"></a>
                    <ul class="mobile-ul hide">
                        <li><a href="<?php echo site_url('/')?>">Home</a></li>
                        <li><a href="<?php echo site_url('/menu')?>">Menu</a></li>
                        <li><a href="<?php echo site_url('/about-page')?>">About</a></li>
                        <li><a href="<?php echo site_url('/contact')?>">Contact</a></li>
                    </ul>


                    <div id="hamburger-wrapper" class="hamburger">
                        <p class="burger"></p>
                    </div>

                </div>
            </nav>
        </header>