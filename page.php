<?php get_header(); ?>

<?php
$parentPage = wp_get_post_parent_id(get_the_ID());

while(have_posts()) {
    the_post();
?>

    <div class="page-banner">
        <div class="page-banner-content">
            <h2 class="page-banner-title"><?php the_title(); ?></h2>
        </div>
    </div>

    <div class="page-content">
        <?php the_content(); ?>
        <hr>
    </div>

    <?php
}

get_footer();

?>