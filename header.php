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
                <div class="call-btn">
                    <p>ORDERING OPTIONS</p>
                </div>
            </nav>
        </header>