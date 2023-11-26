<?php get_header(); ?>

<?php
    $parentPage = wp_get_post_parent_id(get_the_ID());

    while(have_posts()) {
        the_post();
?>

    <div class="page-banner">
        <div class="page-banner-content">
            <h2 class="page-banner-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
        </div>
    </div>

    <div class="page-content">
        <?php the_excerpt(); ?>
        <div class="post-btn"><a href="<?php the_permalink() ?>">Continue Reading</a></div>
    </div>

    <?php
}

get_footer();

?>