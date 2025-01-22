<?php 
get_header();
?>
<div class="outdoorplants">
    <h1>Plants Details</h1>
</div>

<div class="main-container">
    <?php 
    $args = array('post_type' => 'post');
    $query = new WP_Query($args);
    while ($query->have_posts()) : $query->the_post(); ?>
        <div class="single_post">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            <p><?php the_author(); ?></p>
            <h1><?php the_title(); ?></h1>
            <p><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p>
            <button class="read-more-btn">Read More</button>
            <div class="hidden-details">
                <p><?php the_content(); ?></p>
            </div>
        </div>
    <?php endwhile; wp_reset_postdata(); ?>
</div>

<?php 
get_footer();
?>
