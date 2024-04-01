<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( "charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_the_title() . ' | ' . get_bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body class="">
    <?php wp_body_open(); ?>
    <?php the_custom_logo(); //Logo for webpage from custom theme ?>
   