<?php
/*
Template name: Blog Posts
*/
?>

<?php get_header(); ?>
<?php query_posts('post_type=post&post_status=publish&posts_per_page=5&paged='. get_query_var('paged')); ?>

<section class="row">
    <div class="twelve columns main-blog-content">
        <h2 class="page-heading">Blog Posts</h2>
    <!-- BEGIN LOOP -->
    <?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>

                <h3 class="fp-title blog-post-headings"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                <p class="date"><?php the_date(); ?></p>

                <?php the_excerpt(__('Continue reading »','example')); ?>

                <a href="<?php the_permalink(); ?>" class="read-more-button">Read More</a>
            <?php endwhile; ?>

        <!-- Navigation -->
        <div class="navigation">
            <span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
        </div>
    <?php else: ?>
        <div class="404-section">
            <p><?php _e('None found.','example'); ?></p>
        </div>
    <?php endif; wp_reset_query(); ?>
    <!-- END LOOP -->
    </div>

    <?php get_footer(); ?>
