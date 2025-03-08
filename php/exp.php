<?php get_header(); ?>

<section id="home" class="hero">
    <h1>Find Your Dream Home</h1>
    <p>Explore the best properties in your area</p>
    <div class="search-container dropdown">
        <input type="search" id="search" placeholder="Search cities..." onkeyup="filterCities()" autocomplete="off">
        <div id="cityDropdown" class="dropdown-content"></div>
        <button id="search-btn" class="btn">Search</button>
    </div>
</section>

<section class="marquee">
    <marquee behavior="scroll" direction="left" scrollamount="20" scrolldelay="100">
        <img src="marqorder2.jpg" height="250px">
        <img src="marqorder4.avif" height="250px">
        <img src="marqorder1.png" height="250px">
        <img src="marqorder3.webp" height="250px">
        <img src="mar2.jpg" height="250px">
        <img src="mar1.avif" height="250px">
        <img src="mar3.avif" height="250px">
    </marquee>
</section>

<section id="properties" class="properties">
    <h2>Featured Properties</h2>
    <div class="property-list">
        <?php
        $args = array('post_type' => 'properties', 'posts_per_page' => 3);
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post(); ?>
            <div class="property">
                <?php the_post_thumbnail(); ?>
                <h3><?php the_title(); ?></h3>
                <p><?php the_content(); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn-view-details">View Details</a>
            </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
</section>

<?php get_footer(); ?>
