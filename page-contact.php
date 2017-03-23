<?php
/**
 * Template Name: Contato
 */
?>

<?php
do_action('get_header');
get_template_part('templates/header');

$header_text = trim(get_post_meta(get_the_ID(), 'header_text', true ));
?>
<div id="page-default-template" class="page-contact base-content">
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="banner <?php if(!$header_text) echo "no-text"; ?>">
        <div class="container">
            <h2 class="title"><?php the_title(); ?></h2>
            <?php if($header_text): ?>
            <div class="info">
                <?php echo nl2br($header_text) ?>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <section class="page-content">
        <div class="container">
            <?php the_content(); ?>
        </div>
    </section>
    <?php endwhile; // end of the loop. ?>
</div>
