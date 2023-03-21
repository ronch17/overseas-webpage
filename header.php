<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
<a href="<?php echo site_url(); ?>">
    <img src="<?php echo get_theme_file_uri('/images/logo.png'); ?>" id="logo" alt="site-logo" rel="home">
</img>
</a>
</header>