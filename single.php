<?php /* Template Name: Single Page */ ?>


<?php get_header(); ?>

<body>
    <section class="content-single">
    <a href="<?php echo site_url('/menu')?>">
        <div class="back-home">
            <i class="fas fa-chevron-left"></i>
            <h3>BACK TO MENU</h3>
        </div>
    </a>

    <div class="product-card">
        <img src=<?php the_field("product_photo"); ?> alt="burger menu item">
        <h1><?php the_field("product_name"); ?></h1>
        <div class="desc">
            <p><?php the_field("description"); ?></p>
        </div>
        <div class="prices">
            <i class="price-icon price-icon_extra "><?php the_field("price"); ?> Kr.</i>
            <i class="price-icon_secondary"><?php the_field("menu_price"); ?> Kr.<br> MENU</i>
            <p>GET 2 SINGLES ADD 40 Kr.</p>
        </div>
    </div>

    <div class="menu-product-card">
        <h1>GET THE MENU</h1>
        <img src=<?php the_field("menu_photo"); ?> alt="burger menu item">
        
        <div class="prices">
            <i class="price-icon price-icon_extra "><?php the_field("menu_price"); ?> Kr.</i>
        </div>
    </div>

    <hr class="horizonal">

    <div class="add-options">
        <h2>ADD SIDES AND DRINKS TO YOUR ORDER</h2>
        <div class="item1">
            <img src=<?php echo get_theme_file_uri('./images/Fries-min.jpeg') ?> alt="burger menu item">
            <h4>FRIES</h4>
            <i class="price-icon price-icon_extra ">32kr.-</i>
        </div>
        <div class="item2"><img src=<?php echo get_theme_file_uri('./images/Drinks.png') ?> alt="burger menu item">
            <h4>DRINKS</h4>
            <i class="price-icon price-icon_extra ">23kr.-</i>
        </div>
        <div class="item3"><img src=<?php echo get_theme_file_uri('./images/Hot_wings-min.jpeg') ?>
                alt="burger menu item">
            <h4>HOT WINGS</h4>
            <i class="price-icon price-icon_extra ">35kr.-</i>
        </div>
    </div>
    <hr class="horizonal">

    <div class="add-options">
        <h2>YOU MAY ALSO LIKE</h2>
        <div class="burger-menu-container">


            <?php $menuPosts = new WP_Query (array(
            "category_name" => "burgers",
            "posts_per_page"=> 3
        ));
        while ($menuPosts -> have_posts()) {
            $menuPosts -> the_post(); ?>


<a href="<?php the_permalink(); ?>">
            <div class="product-item burger-menu_item">
                
                    <img src="<?php the_field("product_photo")?>">
                    <h4><?php the_field("product_name"); ?></h4>
                    <div class="price-container">
                        <i class="price-icon price-icon_extra "><?php the_field("price"); ?> Kr.</i>
                        <i class="price-icon_secondary"><?php the_field("menu_price"); ?> Kr.<br> MENU</i>

                    </div>
                
            </div>
</a>
            <?php } ?>
        </div>

    </div>
        </section>
    <?php get_footer();?>