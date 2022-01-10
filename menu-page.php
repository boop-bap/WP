<?php /* Template Name: Menu Page */ ?>


<?php get_header(); ?>

<body>
    <main>

        <?php 

			$photo = get_field('product_photo');

		?>

        <section class="burger-menu">
            <h1>THE BURGER MENU</h1>
            <div class="burger-menu-container">
                <?php $menuPosts = new WP_Query (array(
            "post_per_page" => 2,
            "category_name" => "burgers"
        ));
        while ($menuPosts -> have_posts()) {
            $menuPosts -> the_post(); 
        
         ?>
                <div class="product-item">
                    <a href="<?php  ?>" class="burger-menu_item">
                        <img src="<?php the_field("product_photo")?>" alt="burger menu item">
                        <h4><?php the_field("product_name"); ?></h4>
                        <div class="price-container">
                            <i class="price-icon price-icon_extra "><?php the_field("price"); ?> Kr.</i>
                            <i class="price-icon_secondary"><?php the_field("menu_price"); ?> Kr.<br> SINGLE</i>
                    </a>
                </div>
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
                <div class="product-item">
                    <a href="<?php the_permalink(); ?>" class="burger-menu_item">
                        <img src=<?php the_field("product_photo"); ?> alt="burger menu item">
                        <h4><?php the_field("product_name"); ?></h4>
                        <div class="price-container">
                            <i class="price-icon price-icon_extra "><?php the_field("price"); ?> Kr.</i>
                            <i class="price-icon_secondary"><?php the_field("menu_price"); ?> Kr.<br> SINGLE</i>
                    </a>
                </div>
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
        
         ?>
                <div class="product-item">
                    <a href="<?php echo site_url('/single-product')?>" class="burger-menu_item">
                        <img src=<?php the_field("product_photo"); ?> alt="burger menu item">
                        <h4><?php the_field("product_name"); ?></h4>
                        <div class="price-container">
                            <i class="price-icon price-icon_extra "><?php the_field("price"); ?> Kr.</i>
                            <i class="price-icon_secondary"><?php the_field("menu_price"); ?> Kr.<br> SINGLE</i>
                    </a>
                </div>
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
                <div class="product-item">
                    <a href="<?php echo site_url('/single-product')?>" class="burger-menu_item">
                        <img src=<?php the_field("product_photo"); ?> alt="burger menu item">
                        <h4><?php the_field("product_name"); ?></h4>
                        <div class="price-container">
                            <i class="price-icon price-icon_extra "><?php the_field("price"); ?> Kr.</i>
                            <i class="price-icon_secondary"><?php the_field("menu_price"); ?> Kr.<br> SINGLE</i>
                    </a>
                </div>
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
                <div class="product-item">
                    <a href="<?php echo site_url('/single-product')?>" class="burger-menu_item">
                        <img src=<?php the_field("product_photo"); ?> alt="burger menu item">
                        <h4><?php the_field("product_name"); ?></h4>
                        <div class="price-container">
                            <i class="price-icon price-icon_extra "><?php the_field("price"); ?> Kr.</i>
                            <i class="price-icon_secondary"><?php the_field("menu_price"); ?> Kr.<br> SINGLE</i>
                    </a>
                </div>
            </div>

            <?php } ?>

        </section>
    </main>




    <?php get_footer();?>