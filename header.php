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
            <li <?php if (is_page('hotel') or wp_get_post_parent_id(0) == 97) echo 'class="active-menu-item"' ?>><a href="<?php echo site_url('/hotel'); ?>">Hotel</a></li>
            <li <?php if (is_page('spa') or wp_get_post_parent_id(0) == 97) echo 'class="active-menu-item"' ?>><a href="<?php echo site_url('/spa'); ?>">Spa</a></li>
        </ul>
    </div>
</nav>