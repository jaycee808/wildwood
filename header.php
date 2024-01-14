<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
<nav class="navbar">
    <div class="logo"><a href="<?php echo site_url(); ?>">Wildwood.</a></div>
    <div class="nav-menu">
        <ul>
            <li <?php if (is_page('accommodations') or wp_get_post_parent_id(0) == 97) echo 'class="active-menu-item"' ?>><a href="<?php echo site_url('/accommodations'); ?>">Accommodation</a></li>
            <li <?php if (is_page('search-availability') or wp_get_post_parent_id(0) == 98) echo 'class="active-menu-item"' ?>><a href="<?php echo site_url('/search-availability'); ?>">Search Room</a></li>
        </ul>
    </div>
</nav>