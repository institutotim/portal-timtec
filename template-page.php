<?php /* Template Name: Página  */ ?>
<?php
do_action('get_header');

the_post();
?>
<div id="page-forum" class="page single">
        <div class="banner">
            <div class="container">
                <h2 class="title"><?php the_title();?></h2>
            </div>
        </div>
        <div class="container">
            <?php the_content(); ?>
        </div>
    </div>
</div>

<?php
do_action('get_footer');
wp_footer();
