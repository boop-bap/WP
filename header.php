<!DOCTYPE html>
<html>

<head>
    <?php wp_head(); ?>
</head>

<body>
    <div class="container">
        <header>
            <nav>
                <a href="<?php echo site_url('/')?>" class="logo"><img
                        src=<?php echo get_theme_file_uri('./images/logo.png') ?> alt="logo"></a>
                <ul>
                    <li><a href="<?php echo site_url('/')?>">Home</a></li>
                    <li><a href="<?php echo site_url('/menu')?>">Menu</a></li>
                    <li><a href="<?php echo site_url('/about-page')?>">About</a></li>
                    <li><a href="<?php echo site_url('/contact')?>">Contact</a></li>
                </ul>
                <div class="dropdown">
                    <button class="dropbtn">ORDERING OPTIONS</button>
                    <div id="myDropdown" class="dropdown-content">
                        <div class="dropdown-container">
                            <div class="dropdown-container_details">
                                <p>+45 52 62 58 89</p>
                                <p>Call now</p>
                                <p>Icon</p>
                            </div>
                            <div class="dropdown-container_divider">
                                <div class="dropdown-line"></div>
                                <p>or</p>
                                <div class="dropdown-line"></div>
                            </div>

                            <div class="dropdown-container_services">
                                <img src=<?php echo get_theme_file_uri('./images/hungry.svg') ?> alt=" hungry">
                                <img src=<?php echo get_theme_file_uri('./images/waiteer.svg') ?> alt=" waiteer">
                                <img src=<?php echo get_theme_file_uri('./images/wolt.svg') ?> alt="wolt">
                                <img src=<?php echo get_theme_file_uri('./images/justeat.svg') ?> alt="justeat">
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>