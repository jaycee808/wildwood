<?php get_header(); ?>

<?php
$parentPage = wp_get_post_parent_id(get_the_ID());

while(have_posts()) {
    the_post();
?>

    <div class="page-banner">
        <div class="page-title"><?php the_title(); ?></div>
    </div>

    <div class="page-content">
        <?php the_content(); ?>
    </div>

    <?php
}

get_footer();

?>