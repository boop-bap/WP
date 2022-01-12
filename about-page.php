<?php /* Template Name: About Page */ ?>


<?php get_header(); ?>

<body>
    <section class="about-introduction">

        <h1>ABOUT US</h1>
        <h2>Get a look inside Burger GO</h2>
        <video class="about-video" controls src=<?php echo get_theme_file_uri('./video/video.webm')?> type="video/webm"
            alt="special offer burger">
        </video>
    </section>


    <section class="aboutus-section">
        <div class="aboutus-container">
            <div class="aboutus-text">
                <h2>How Burger GO started</h2>
                <p>Our doors were opened in the centre of Aalborg in 2016 by Nam.
                    Nam had flipped many burgers at his previous job in a burger joint in Hjørring,
                    so he knew a thing or two about them. This is also where he got inspired to invent
                    his own special burger dressing. Nam travelled a bit in America where he found
                    inspiration to the concept of Burger Go: a simple burger joint with affordable
                    but quality american burgers. The brioche burger bun was an essential part of the vision.</p>
            </div>
            <div class="aboutus-img">
                <img src=<?php echo get_theme_file_uri('./images/About_us-img-min.jpeg') ?> alt="burger">
            </div>
        </div>
        <div class="aboutus-container">
            <div class="aboutus-text">
                <h2>Quality is top priority</h2>
                <p>Tasty and quality burgers served with a smile is what Burger Go strives for.
                    We achieve this by using local produce and 100% Danish beef from Himmerlandskød.
                    Using local meat leads to an increase in quality and animal welfare.
                    We take food-safety and hygiene seriously when we cook for our customers.
                    Follow the link below to see our control report from the Danish Veterinary and Food Administration.
                </p>
                <a href="https://www.findsmiley.dk/Sider/Search.aspx?k=burger%20go%20aalborg">View control report <i
                        class="far fa-smile fa-2x"></i></a>
            </div>
            <div class="aboutus-img">
                <img src=<?php echo get_theme_file_uri('./images/About_us-img2-min.jpeg') ?> alt="burger">
            </div>
        </div>

    </section>






    <?php get_footer();?>