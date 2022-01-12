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
                <h1>Delicious<br> burgers to <span>GO</span> </h1>
                <h3>Pick up your take-away, dine in at <span>Ved Stranden 11B</span> or get it delivered with our
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


        <section class="opening-hours">
            <h2>OPENING HOURS</h2>
            <div class="hours-container">
                <div class="hours">
                    <p>12 - 21</p>
                    <p>MON - THU</p>
                </div>
                <div class="hours">
                    <p>12 - 21</p>
                    <p>MON - THU</p>
                </div>
                <div class="hours">
                    <p>12 - 21</p>
                    <p>MON - THU</p>
                </div>
                <div class="hours">
                    <p>12 - 21</p>
                    <p>MON - THU</p>
                </div>
            </div>
        </section>


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
                        <p>"Average choice if you need a simple but tasty burger quickly. Various selection, menu
                            options,
                            very
                            nice and friendly staff, with a quick service."</p>
                        <p>Dora the explorer</p>
                    </div>
                    <div class="carousel__photo">
                        <p>"Average choice if you need a simple but tasty burger quickly. Various selection, menu
                            options,
                            very
                            nice and friendly staff, with a quick service."</p>
                        <p>Dora he explorer</p>
                    </div>
                    <div class="carousel__photo">
                        <p>"Average choice if you need a simple but tasty burger quickly. Various selection, menu
                            options,
                            very
                            nice and friendly staff, with a quick service."</p>
                        <p>Dora the explorer</p>
                    </div>
                    <div class="carousel__photo">
                        <p>"Average choice if you need a simple but tasty burger quickly. Various selection, menu
                            options,
                            very
                            nice and friendly staff, with a quick service."</p>
                        <p>Dora the explorer</p>
                    </div>


                    <div class="carousel__button--next"></div>
                    <div class="carousel__button--prev"></div>

                </div>
            </div>

        </section>





        <section class="adress-map">
            <div class="adress-map_left">
                <h2>FIND US IN THE CENTRE OF AALBORG</h2>
                <p>Pick up your burgers as take-away or dine-in with us.
                    Reservations are not neccessary.</p>
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