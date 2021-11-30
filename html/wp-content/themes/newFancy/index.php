<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>NEW FUNCY</title>
    <link rel="stylesheet" href=<?php echo get_stylesheet_uri();?>>
</head>
<body>
<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
<?php include("header.php");?>
<div id="cuerpo">
    <?php
    echo "<h1 class='morado'>Hola Funcy</h1>"
    ?>
</div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
    <div class="entry">
        <?php // the_content();
        the_excerpt(); ?>
    </div>
    <p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
    </div> <!-- closes the first div box -->
<?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer("footer.php")?>
</body>
</html>