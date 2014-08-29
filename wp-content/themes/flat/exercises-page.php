<?php
/*
Template Name: Exercises Template
*/
?>
<?php get_header(); ?>

    <div id="content" class="site-content" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header>
                <div class="entry-content">
                <?
                // Get exercises and loop
                ?>
                </div>
            </article>

            <?php comments_template(); ?>

        <?php endwhile; ?>

    </div>

<?php get_footer(); ?>