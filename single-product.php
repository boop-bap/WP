<?php /* Template Name: Single Page */ ?>


<?php get_header(); ?>

<body>
    <a href="#">
        <div class="back-home">
            <i class="fas fa-chevron-left">Back to home</i>
        </div>
    </a>

    <div class="product-card">
        <img src=<?php echo get_theme_file_uri('./images/burger1.jpg') ?> alt="burger menu item">
        <h1>THE SPECIAL MENU</h1>
        <div class="desc">
            <p>Some long desc whivh will be placed from wordpress. Some long desc whivh will be placed from wordpress.
                Some long desc whivh will be placed from wordpress.</p>
        </div>
        <div class="prices">
            <i class="price-icon price-icon_extra ">99kr.-</i>
            <i class="price-icon_secondary">54kr. <br> SINGLE</i>
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