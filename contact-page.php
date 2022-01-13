<?php /* Template Name: Contact Page */ ?>


<?php get_header(); ?>

<body>
    <section class="contact-page">
        <h1 class="contact-us">CONTACT</h1>
    <div class="contact-intro">
        
        <p>Burger Go is located near Jomfru Ane Gade in the centre of Aalborg. If you have any questions or would like
            to place an order, you are welcome to drop by the restaurant or simply give us a call.</p>
</div>
        <div class="contact-info">
        <h3>GET IN TOUCH</h3> <br>
        <p>Burger Go<br>
            Ved stranden 11B<br>
            9000 Aalborg<br>
        </p><br>
        <p>Tel: +45 52 95 65 78<br>
        </p>
        <br>
        <a class="directions" target="_blank" href="https://www.google.com/maps/dir//Burger+GO+Ved+Stranden+11B+9000+Aalborg/@57.050467,9.920234,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x4649328c63bf7415:0x7c6478aac36f1a84!2m2!1d9.920234!2d57.050467">GET DIRECTIONS</a>
    </div>
    <div class="vertical">
    </div>
    <?php 
        $timePosts = new WP_Query(array(
            "post_type" => "time",
            "posts-per-page" => 1
        ));
if ($timePosts->have_posts()) :
    while ($timePosts->have_posts()) : $timePosts->the_post();
    ?>
    <div class="contact-hours">
        <h3>OPENING HOURS</h3>
        <p>MON - WED<br>
        <?php the_field("mon-time") ?>
        </p>
        <br>
        <p>THU<br>
        <?php the_field("fri-time") ?>
        </p>
        <br>
        <p>FRI - SAT<br>
        <?php the_field("sat-time") ?>
        </p>
        <br>
        <p>SUN<br>
        <?php the_field("sun-time") ?>
        </p>
</div>
<?php
    endwhile;
endif;
wp_reset_postdata();
         ?>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2170.062453759092!2d9.918045315898109!3d57.05046989862971!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4649328c63bf7415%3A0x7c6478aac36f1a84!2sBurger%20GO!5e0!3m2!1sda!2sdk!4v1641657272732!5m2!1sda!2sdk"
            width="100%" height="100%" style="border-radius: 15px; border: none;" allowfullscreen="">
        </iframe>
    
    </section>
    <?php get_footer();?>