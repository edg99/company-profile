<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Company_Profile
 */

?>

	<main id="primary" class="site-main-post">
		
	<div class="post-head"> <?php get_header(); ?></div>
			
	<div class="post-container">

        <!-- Post Content -->
        <article class="post">
            <header>
                <h1 class="post-title"><?php the_title(); ?></h1>
                <div class="post-meta">
                    <span class="post-date"><?php the_date(); ?></span>
                    <span class="post-author">By <?php the_author(); ?></span>
                </div>
            </header>

            <?php if (has_post_thumbnail()): ?>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail('large'); ?>
                </div>
            <?php endif; ?>

            <div class="post-content">
                <?php the_content(); ?>
            </div>

            <footer>
                <?php comments_template(); ?>
                <!-- Additional post details or comments can be added here -->
            </footer>
        </article>

    </div>

	</main><!-- #main -->

<?php

get_footer();
