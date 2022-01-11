<?php /* Template Name: Menu Page */ ?>


<?php get_header(); ?>

<body>
    <main>
    <div class="secondary-nav">

<i class="fas fa-hamburger">Burgers</i>

<span class="iconify" data-icon="ep:fries">Fries</span>

<span class="iconify" data-icon="ep:fries">Dips</span>

<span class="iconify" data-icon="icon-park-outline:drink">Drinks</span>

</div>
    <section class="burger-menu">
            <h1>THE BURGER MENU</h1>
            <div class="burger-container">
                <?php $menuPosts = new WP_Query (array(
            "category_name" => "burgers"
        ));
        while ($menuPosts -> have_posts()) {
            $menuPosts -> the_post(); 
        
         ?>
                <div class="product-item burger-menu_item">
                <a href="<?php the_permalink(); ?>">
                        <img src="<?php the_field("product_photo")?>">
                        <h4><?php the_field("product_name"); ?></h4>
                        <div class="price-container">
                            <i class="price-icon price-icon_extra "><?php the_field("price"); ?> Kr.</i>
                            <i class="price-icon_secondary"><?php the_field("menu_price"); ?> Kr.<br> SINGLE</i>

                        </div>
                    </a>
                </div>

                <?php } ?>

        </section>




        <hr class="horizonal">




        <section class="burger-menu">
            <h1>SPECIAL OFFERS</h1>
            <div class="burger-menu-container">
                <?php $menuPosts = new WP_Query (array(
            "post_per_page" => 2,
            "category_name" => "offers"
        ));
        while ($menuPosts -> have_posts()) {
            $menuPosts -> the_post(); 
        
         ?>
                <div class="product-item burger-menu_item">
                <a href="<?php the_permalink(); ?>">
                        <img src="<?php the_field("product_photo")?>">
                        <h4><?php the_field("product_name"); ?></h4>
                        <div class="price-container">
                            <i class="price-icon price-icon_extra "><?php the_field("price"); ?> Kr.</i>

                        </div>
                    </a>
                </div>
                <?php } ?>

        </section>

        <hr class="horizonal">

        <section class="burger-menu">
            <h1>SIDE DISHES</h1>
            <div class="burger-menu-container">

            <?php $menuPosts = new WP_Query (array(
            "post_per_page" => 2,
            "category_name" => "side_dishes"
        ));
        while ($menuPosts -> have_posts()) {
            $menuPosts -> the_post(); 
        
         ?>     <div class="product-item burger-menu_item">
         <a href="<?php the_permalink(); ?>">
                 <img src="<?php the_field("product_photo")?>">
                 <h4><?php the_field("product_name"); ?></h4>
                 <div class="price-container">
                     <i class="price-icon price-icon_extra "><?php the_field("price"); ?> Kr.</i>

                 </div>
             </a>
         </div>
                <?php } ?>

        </section>

        <hr class="horizonal">

        <section class="burger-menu">
            <h1>DIPS</h1>
            <div class="burger-menu-container">
                <?php $menuPosts = new WP_Query (array(
            "post_per_page" => 2,
            "category_name" => "dips"
        ));
        while ($menuPosts -> have_posts()) {
            $menuPosts -> the_post(); 
        
         ?>
                <div class="product-item burger-menu_item">
                <a href="<?php the_permalink(); ?>">
                        <img src="<?php the_field("product_photo")?>">
                        <h4><?php the_field("product_name"); ?></h4>
                        <div class="price-container">
                            <i class="price-icon price-icon_extra "><?php the_field("price"); ?> Kr.</i>

                        </div>
                    </a>
                </div>
                <?php } ?>

        </section>
        <hr class="horizonal">

        <section class="burger-menu">
            <h1>DRINKS</h1>
            <div class="burger-menu-container">
                <?php $menuPosts = new WP_Query (array(
            "post_per_page" => 2,
            "category_name" => "drinks"
        ));
        while ($menuPosts -> have_posts()) {
            $menuPosts -> the_post(); 
        
         ?>
                <div class="product-item burger-menu_item">
                <a href="<?php the_permalink(); ?>">
                        <img src="<?php the_field("product_photo")?>">
                        <h4><?php the_field("product_name"); ?></h4>
                        <div class="price-container">
                            <i class="price-icon price-icon_extra "><?php the_field("price"); ?> Kr.</i>

                        </div>
                    </a>
                </div>
                <?php } ?>

        </section>
    </main>




    <?php get_footer();?>