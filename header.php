<!DOCTYPE html>
<html>

<head>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Hotjar Tracking Code for https://justaskav.com/ -->
    <script>
    (function(h, o, t, j, a, r) {
        h.hj = h.hj || function() {
            (h.hj.q = h.hj.q || []).push(arguments)
        };
        h._hjSettings = {
            hjid: 2775080,
            hjsv: 6
        };
        a = o.getElementsByTagName('head')[0];
        r = o.createElement('script');
        r.async = 1;
        r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
        a.appendChild(r);
    })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
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
                                    <a href="tel:+45 60141520">
                                        <p id="copynumber" value="+45 52 62 58 89">+45 52 62 58 89</p>
                                    </a>
                                    <a href="tel:+45 60141520">
                                        <p>Call now</p>
                                    </a>
                                    <i onclick="copy()"><i class="far fa-copy"></i></i>
                                </div>
                                <div class="dropdown-container_divider">
                                    <div class="dropdown-line"></div>
                                    <p>or</p>
                                    <div class="dropdown-line"></div>
                                </div>

                                <div class="dropdown-container_services">
                                    <a
                                        href="https://www.hungry.dk/aalborg/burger-go/?gclid=EAIaIQobChMItMydhpGs9QIVaI1oCR1OlAFjEAAYASAAEgLTGPD_BwE">
                                        <img src=<?php echo get_theme_file_uri('./images/hungry.svg') ?> alt=" hungry">
                                    </a>
                                    <a href="https://waiteer.com/restaurant/aalborg/burger-go"> <img
                                            src=<?php echo get_theme_file_uri('./images/waiteer.svg') ?> alt=" waiteer">
                                    </a>
                                    <a
                                        href="https://www.just-eat.dk/menu/burger-go?k1111=k1111&gclid=EAIaIQobChMIn8ndk5Ss9QIVkI9oCR3yHAWDEAAYAiAAEgLqyvD_BwE&gclsrc=aw.ds">
                                        <img src=<?php echo get_theme_file_uri('./images/justeat.svg') ?> alt="justeat">
                                    </a>
                                    <a
                                        href="https://wolt.com/da/DNK/aalborg/restaurant/burger-go?utm_source=google&utm_medium=cpc&utm_term=burger%20go&utm_campaign=DNK_Web_FTU_Search_Restaurant-venue_Aalborg_DA&gclid=EAIaIQobChMIn8ndk5Ss9QIVkI9oCR3yHAWDEAAYAyAAEgJNH_D_BwE">
                                        <img src=<?php echo get_theme_file_uri('./images/wolt.svg') ?> alt="wolt">
                                    </a>
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


                    <div class="dropdown dropdown-mobile">
                        <button class="dropbtn dropbtn-mobile">ORDERING OPTIONS</button>
                        <div id="myDropdown" class=" dropdown-content-mobile">
                            <div class="dropdown-container dropdown-container-mobile">
                                <div class="dropdown-container_details dropdown-container_details_mobile">
                                    <a href="tel:+45 60141520">
                                        <p id="copynumber" value="+45 52 62 58 89">+45 52 62 58 89</p>
                                    </a>
                                    <a href="tel:+45 60141520">
                                        <p>Call now</p>
                                    </a>
                                    <i onclick="copy()"><i class="far fa-copy"></i></i>
                                </div>

                                <div class="dropdown-container_mobile_services">
                                    <a
                                        href="https://www.hungry.dk/aalborg/burger-go/?gclid=EAIaIQobChMItMydhpGs9QIVaI1oCR1OlAFjEAAYASAAEgLTGPD_BwE">
                                        <img src=<?php echo get_theme_file_uri('./images/hungry.svg') ?> alt=" hungry">
                                    </a>
                                    <a href="https://waiteer.com/restaurant/aalborg/burger-go"> <img
                                            src=<?php echo get_theme_file_uri('./images/waiteer.svg') ?> alt=" waiteer">
                                    </a>
                                    <a
                                        href="https://www.just-eat.dk/menu/burger-go?k1111=k1111&gclid=EAIaIQobChMIn8ndk5Ss9QIVkI9oCR3yHAWDEAAYAiAAEgLqyvD_BwE&gclsrc=aw.ds">
                                        <img src=<?php echo get_theme_file_uri('./images/justeat.svg') ?> alt="justeat">
                                    </a>
                                    <a
                                        href="https://wolt.com/da/DNK/aalborg/restaurant/burger-go?utm_source=google&utm_medium=cpc&utm_term=burger%20go&utm_campaign=DNK_Web_FTU_Search_Restaurant-venue_Aalborg_DA&gclid=EAIaIQobChMIn8ndk5Ss9QIVkI9oCR3yHAWDEAAYAyAAEgJNH_D_BwE">
                                        <img src=<?php echo get_theme_file_uri('./images/wolt.svg') ?> alt="wolt">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </nav>
        </header>