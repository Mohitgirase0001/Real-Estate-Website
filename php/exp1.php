<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <nav>
            <div class="logo"><?php bloginfo('name'); ?></div>
            <ul>
                <li><a href="<?php echo home_url('/about'); ?>">About Us</a></li>
                <li><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
            </ul>
        </nav>
    </header>
