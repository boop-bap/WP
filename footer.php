<footer>
    <div class="footer-container">
        <div class="footer-container_box">
            <h3>GET IN TOUCH</h3>
            <div class="box__info">
                <p>Ved Stranden 11B
                    9000, Aalborg</p>
                <br>
                <p>+45 52 62 58 89</p>
            </div>
        </div>
        <?php 
        $timePosts = new WP_Query(array(
            "post_type" => "time",
            "posts-per-page" => 1
        ));
if ($timePosts->have_posts()) :
    while ($timePosts->have_posts()) : $timePosts->the_post();
    ?>
        <div class="footer-container_box">
            <h3>OPENING HOURS</h3>
            <p>MON - WED: <?php the_field("mon-time") ?></p>

            <p>THU: <?php the_field("fri-time") ?></p>

            <p>FRI - SAT: <?php the_field("sat-time") ?></p>

            <p>SUN: <?php the_field("sun-time") ?></p>

        </div>
        <?php
    endwhile;
endif;
wp_reset_postdata();
         ?>

        <div class="footer-container_box">
            <h3>LINKS</h3>
            <a href="">Home</a>
            <a href="">Menu</a>
            <a href="">About us</a>
            <a href="">Contact</a>
            <div class="footer-container_box__icons">
                <a href="https://www.facebook.com/BurgerGO9000/">
                    <i class="fab fa-facebook-square fa-2x "></i></a>
                <a href="https://www.findsmiley.dk/Sider/Search.aspx?k=burger%20go%20aalborg"> <i
                        class="far fa-smile fa-2x"></i>
                </a>
                <a href="https://www.instagram.com/">
                    <i class="fab fa-instagram-square fa-2x"></i>
                </a>
            </div>
        </div>

        <a href="<?php echo site_url('/')?>" class="logo-footer logo"><img
                src=<?php echo get_theme_file_uri('./images/logo.png') ?> alt="logo"></a>
        <h5>Ⓒ 2021 Group 6</h5>
    </div>

</footer>
</div>

<?php wp_footer(); ?>
</body>

</html>