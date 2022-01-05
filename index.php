<?php get_header(); ?>

<body>

    <main>
        <article class="hero">
            <img src=<?php echo get_theme_file_uri('./images/burger.png') ?> alt="burger">
            <div class="hero-text">
                <p>Hungry? lets eat!</p>
                <h1>Burger Go - Simple is Better</h1>
                <h3>With us you always get your food fast and cheap
                    and always in best quaility!</h3>
                <div class="menu-btn">
                    <a href="#">See our MENU</a>
                </div>
            </div>
        </article>

        <div class="special-offers">
            <h2>Eat more for less</h2>
            <div class="special-offers-container">
                <div class="special-offers_burger">
                    <img src=<?php echo get_theme_file_uri('./images/burger.png') ?> alt="special offer burger">
                    <h4>2x the special</h4>
                    <p>Cheese, bacon, 100% beef
                        tomato, cheese, chili mayo, lettuce, onion, red onion, jalapeño, gravy, red peppers</p>
                    <p>99kr.-</p>
                </div>
                <div class="special-offers_burger">
                    <img src=<?php echo get_theme_file_uri('./images/burger.png') ?> alt="special offer burger">
                    <h4>2x the special</h4>
                    <p>Cheese, bacon, 100% beef
                        tomato, cheese, chili mayo, lettuce, onion, red onion, jalapeño, gravy, red peppers</p>
                    <p>99kr.-</p>
                </div>
                <div class="special-offers_burger">
                    <img src=<?php echo get_theme_file_uri('./images/burger.png') ?> alt="special offer burger">
                    <h4>2x the special</h4>
                    <p>Cheese, bacon, 100% beef
                        tomato, cheese, chili mayo, lettuce, onion, red onion, jalapeño, gravy, red peppers</p>
                    <p>99kr.-</p>
                </div>
            </div>
        </div>
    </main>


    <?php get_footer();?>