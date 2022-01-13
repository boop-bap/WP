<?php /* Template Name: Main Page */ ?>

<?php get_header(); ?>

<body>

    <main>
        <section class="hero">
            <div class="hero-image">
                <img class="hide-on-mobile" src=<?php echo get_theme_file_uri('./images/burger.png') ?> alt="burger">
                <img class="hide-on-desktop" src=<?php echo get_theme_file_uri('./images/mobile-burger.png') ?>
                    alt="burger">

            </div>
            <div class="hero-text">
                <h1>Delicious<br> burgers to <span style="font-style:italic;">GO</span> </h1>
                <h3>Come and taste our burgers at <span style="text-decoration: underline;">Ved Stranden 11B</span> or get it delivered with our
                    affiliates.</h3>
                <div class="menu-btn hide-on-mobile ">
                    <a href="<?php echo site_url('/menu')?>">SEE THE MENU</a>
                </div>
            </div>

        </section>

        <div class="menu-btn menu-btn-mobile hide-on-desktop ">
            <a href="<?php echo site_url('/menu')?>">SEE THE MENU</a>
        </div>

        <section class="special-offers">
            <h2>SPECIAL DEALS</h2>
            <?php $menuPosts = new WP_Query (array(
            "post_per_page" => 2,
            "category_name" => "offers"
        ));
        while ($menuPosts -> have_posts()) {
            $menuPosts -> the_post(); 
        
         ?>

            <div class="product-item burger-menu_item special-offer">

                <a href="<?php the_permalink(); ?>">
                    <img src="<?php the_field("product_photo")?>">
                    <h4><?php the_field("product_name"); ?></h4>
                    <div class="description">
                        <p><?php the_field("description"); ?></p>
                    </div>
                    <div class="price-container">
                        <i class="price-icon price-icon_extra "><?php the_field("price"); ?> Kr.</i>
                        <p>Save 15 Kr.</p>

                    </div>
                </a>
            </div>


            <?php } ?>

            <div class="menu-btn menu-btn_special">
                <a href="<?php echo site_url('/menu')?>">SEE THE MENU</a>
            </div>
        </section>

        <?php 
        $timePosts = new WP_Query(array(
            "post_type" => "time",
            "posts-per-page" => 1
        ));
if ($timePosts->have_posts()) :
    while ($timePosts->have_posts()) : $timePosts->the_post();
    ?>
        <section class="opening-hours">
            <h2>OPENING HOURS</h2>
            <div class="hours-container">
                <div class="hours">
                    <p><?php the_field("mon-time") ?></p>
                    <p>MON - WED</p>
                </div>
                <div class="hours">
                    <p><?php the_field("fri-time") ?></p>
                    <p>THU</p>
                </div>
                <div class="hours">
                    <p><?php the_field("sat-time") ?></p>
                    <p>FRI - SAT</p>
                </div>
                <div class="hours">
                    <p><?php the_field("sun-time") ?></p>

                    <p>SUN</p>
                </div>
            </div>
        </section>
        <?php
    endwhile;
endif;
wp_reset_postdata();
         ?>
        <section class="selling-points">
            <h2>HIGH-QUALITY BURGERS FOR AN ATTRACTIVE PRICE</h2>

            <div class="selling-points-container">
                <div class="selling-point_box">
                    <img src=<?php echo get_theme_file_uri('./images/star.svg') ?> alt="special offer burger">
                    <p>High-quality burgers made with local produce. All of our burger patties are made of 100% Danish
                        beef from Himmerlandskød.</p>
                </div>
                <div class="selling-point_box">
                    <img src=<?php echo get_theme_file_uri('./images/speed.svg') ?> alt="special offer burger">
                    <p>Swiftly made burgers so you can enjoy truly fast food, even when you are in a hurry!</p>
                </div>
                <div class="selling-point_box">
                    <img src=<?php echo get_theme_file_uri('./images/best.svg') ?> alt="special offer burger">
                    <p>Get more for less at Burger Go. We guarantee affordable yet top-notch burgers.</p>
                </div>

            </div>

        </section>




        <section class="reviews">
            <h2>A WORD FROM OUR CUSTOMERS</h2>
            <div class="carousel-wrapper">
                <div class="carousel">

                    <div class="carousel__photo initial">
                        <p>"De bedste brugere/pomfritter jeg længe har smagt! Hold nu fast en omgang lækkerhed. 
                        Min mund løber helt i vand, blot ved at skrive denne anmeldelse.</p>
                        <p>Niclas</p>
                    </div>
                    <div class="carousel__photo">
                        <p>"Uden tvivl mit favoritsted i Aalborg. Og helt sikkert Danmarks bedste burger. Giv det er forsøg! I vil ikke fortryde det 😍"</p>
                        <p>Mustafe</p>
                    </div>
                    <div class="carousel__photo">
                        <p>"Super dejlig service, og simpel men fantastisk burger!"</p>
                        <p>Caroline</p>
                    </div>
                    <div class="carousel__photo">
                        <p>"Efter at have boet i Aalborg i over 5 år, kan jeg med sikkerhed sige at BurgerGo er der, hvor har har haft de bedste burgeroplevelser. "</p>
                        <p>Mads</p>
                    </div>


                    <div class="carousel__button--next"></div>
                    <div class="carousel__button--prev"></div>

                </div>
            </div>

        </section>





        <section class="adress-map">
            <div class="adress-map_left">
                <h2>FIND US IN THE CENTRE OF AALBORG</h2>
                <p>You can pick up your take-away or dine-in with us. 
                    We look forward to seeing you!</p>
                <p>VED STRANDEN 11B
                    9000, AALBORG</p>
                <p>+45 12 34 56 78</p>
                <a href="https://goo.gl/maps/igmxjks1J8w14n2v5" target="_blank">GET DIRECTIONS</a>
            </div>
            <div class="adress-map_right">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2170.062453759092!2d9.918045315898109!3d57.05046989862971!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4649328c63bf7415%3A0x7c6478aac36f1a84!2sBurger%20GO!5e0!3m2!1sda!2sdk!4v1641657272732!5m2!1sda!2sdk"
                    style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>



        </section>

    </main>


    <?php get_footer();?>