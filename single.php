<?php get_header(); ?>

<?php 
    while(have_posts()) {
        the_post(); ?>
        <div class="post-content">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </div>
<?php 
    
}

get_footer();

?>