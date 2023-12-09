<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
<nav class="navbar">
    <div class="logo"><a href="<?php echo site_url(); ?>">Wildwood</a></div>
    <div class="menu-hamburger">
        <label>
            <input type="checkbox">
                <span class="menu"> <span class="hamburger"></span> </span>
                <ul>
                    <li <?php if (is_page('about') or wp_get_post_parent_id(0) == 17) echo 'class="active-menu-item"' ?>><a href="<?php echo site_url('/about'); ?>">About</a></li>
                    <li <?php if (is_page('treatments') or wp_get_post_parent_id(0) == 29) echo 'class="active-menu-item"' ?>><a href="<?php echo site_url('/treatments'); ?>">Treatments</a></li>
                    <li <?php if (is_page('appointments') or wp_get_post_parent_id(0) == 17) echo 'class="active-menu-item"' ?>><a href="<?php echo site_url('/appointments'); ?>">Appointments</a></li>
                </ul>
        </label>
    </div>
</nav>

