<?php get_header(); ?>

<?php 
    while(have_posts()) {
        the_post(); ?>
        <div class="post-container">
            <div class="post-content">
                <div class="post-title"><?php the_title(); ?></div>
                    <div class="post-text">
                        <?php the_content(); ?>
                    </div>
            </div>
        </div>
<?php 
    
}

get_footer();

?>