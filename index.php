
  <?php get_header(); ?>

<!-- Begin Section Container -->
    <section class="row">
        <div class="twelve columns landing-page">
            <img src="http://www.laurenyockey.com/finalblog2016/wp-content/uploads/2016/11/banner.png" alt="Welcome to Crossroads Animal Clinic" id="banner" />
        </div>
    </section>
    <div class="row"><div class="twelve columns">
        <div class="schedule-bar">
            <a href="#contact" id="schedule-button">Schedule an Appointment</a>
        </div>
    </div></div>
    <section class="row">
        <div class="twelve columns intro">
            <h2>Welcome to Crossroads Animal Clinic</h2>
            <p class="whitecopy">A full-service veterinary hospital offering extensive care and treatment options for your pet.</p>
        </div>
    </section>
    <section class="row services">
        <div class="four columns medical">
            <img src="http://www.laurenyockey.com/finalblog2016/wp-content/uploads/2016/11/medical.png" alt="Medical" title="Medical Services">
            <h2>Medical</h2>
            <p id="med-description">From the everyday check-up to the more serious health issues, Crossroads guarantees thorough and experienced medical care.</p>
                <a href="#" class="learn-button" id="medical-more">Learn More</a>
        </div>
        <div class="four columns surgical">
            <img src="http://www.laurenyockey.com/finalblog2016/wp-content/uploads/2016/11/surgical.png" alt="Surgical" title="Surgical Services">
            <h2>Surgical</h2>
            <p id="surg-description">Our state-of-the-art surgical suite provides a safe environment for Crossroads vets to perform a wide variety of procedures.</p>
            <a href="#" class="learn-button" id="surgical-more">Learn More</a>
        </div>
        <div class="four columns grooming">
            <img src="http://www.laurenyockey.com/finalblog2016/wp-content/uploads/2016/11/grooming.png" alt="Grooming" title="Grooming Services">
            <h2>Grooming</h2>
            <p id="groom-description">Not only is grooming a great way to keep shedding in check, but it also keeps your pet in good health!</p>
            <a href="#" class="learn-button" id="grooming-more">Learn More</a>
        </div>
    </section>

    <section class="row">
        <div class="twelve columns special">
            <p>Schedule a grooming session and receive 10% off your next check-up.</p>
        </div>
    </section>
    <section class="row about">
        <div class="five columns profile-pic">
            <img src="http://www.laurenyockey.com/finalblog2016/wp-content/uploads/2016/11/vet.png" alt="Vet" title="Meet the Vet">
        </div>
        <div class="seven columns vet-blurb">
            <h2>Meet the Vet</h2>
            <h3>Dr. Tovrea, DVM</h3>
            <p>Dr. Tovrea earned her Doctorate in Veterinary Medicine from The Ohio State University. Shortly after graduation she moved to the Florida panhandle, where she opened her own clinic here at Crossroads.</p>
            <p>Her specialties include internal medicine, soft tissue surgery, small mammal medicine and dentistry. When not running her clinic, she serves on the Board of Directors for the local Emergency Clinic.</p>
            <img src="http://www.laurenyockey.com/finalblog2016/wp-content/uploads/2016/11/orgs.png"alt="Accredidations" title="Accredidations">
        </div>
    </section>
    <section class="row featured-post">
        <div class="twelve columns">
            <h2>Latest from the Blog</h2>
            <?php
            $i = 1; while (have_posts() && $i < 2) : the_post();
            ?>
                <?php
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail('thumbnail');
                    }
                ?>
                <h3 class="fp-title">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>
                <p class="date"><?php the_date(); ?></p>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="read-more-button">Read More</a>
            <?php $i++; endwhile; ?>

            <!-- Add the pagination functions here. -->

            <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
            <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
        </div>
    </section>
    <section class="row schedule" id="schedule">
        <div class="twelve columns">
            <h2>Schedule an Appointment</h2>
            <?php echo do_shortcode("[bupro_appointment]"); ?>
        </div>
    </section>
<!-- End Section Container -->

  <!-- End Loop -->
  <?php get_footer(); ?>
