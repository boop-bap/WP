<?php /* Template Name: Single Page */ ?>


<?php get_header(); ?>

<body>
    <a href="<?php echo site_url('/menu')?>">
        <div class="back-home">
            <i class="fas fa-chevron-left">Back to home</i>
        </div>
    </a>

    <div class="product-card">
        <img src=<?php the_field("product_photo"); ?> alt="burger menu item">
        <h1><?php the_field("product_name"); ?></h1>
        <div class="desc"><p><?php the_field("description"); ?></p></div>

        <div class="ingredients">
            <h3>Ingredients:</h3>
            <p><?php the_field("desc"); ?></p>
            
        </div>
        <div class="prices">
            <i class="price-icon price-icon_extra "><?php the_field("price"); ?> Kr.</i>
            <i class="price-icon_secondary"><?php the_field("menu_price"); ?> Kr.<br> SINGLE</i>
            <p>GET 2 SINGLES ADD 40 Kr.</p>
        </div>
    </div>

    <hr class="horizonal">

    <div class="add-options">
        <h2>ADD SIDES AND DRINKS TO YOUR ORDER</h2>
        <div class="item1">
            <img src=<?php echo get_theme_file_uri('./images/burger1.jpg') ?> alt="burger menu item">
            <h3>FRIES</h3>
            <i class="price-icon price-icon_extra ">20kr.-</i>
        </div>
        <div class="item2"><img src=<?php echo get_theme_file_uri('./images/burger1.jpg') ?> alt="burger menu item">
            <h3>FRIES</h3>
            <i class="price-icon price-icon_extra ">20kr.-</i>
        </div>
        <div class="item3"><img src=<?php echo get_theme_file_uri('./images/burger1.jpg') ?> alt="burger menu item">
            <h3>FRIES</h3>
            <i class="price-icon price-icon_extra ">20kr.-</i>
        </div>
    </div>
    <hr class="horizonal">

    <div class="add-options">
        <h2>ADD SIDES AND DRINKS TO YOUR ORDER</h2>
        <div class="item1">
            <img src=<?php echo get_theme_file_uri('./images/burger1.jpg') ?> alt="burger menu item">
            <h3>FRIES</h3>
            <i class="price-icon price-icon_extra ">20kr.-</i>
        </div>
        <div class="item2"><img src=<?php echo get_theme_file_uri('./images/burger1.jpg') ?> alt="burger menu item">
            <h3>FRIES</h3>
            <i class="price-icon price-icon_extra ">20kr.-</i>
        </div>
        <div class="item3"><img src=<?php echo get_theme_file_uri('./images/burger1.jpg') ?> alt="burger menu item">
            <h3>FRIES</h3>
            <i class="price-icon price-icon_extra ">20kr.-</i>
        </div>
    </div>


    <?php get_footer();?>