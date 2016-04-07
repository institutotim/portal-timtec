<div class="row">
   <?php
        $args = array(
            'posts_per_page' => -1,
            'post_type' => 'conselho'
        );
        $loop_courses = new WP_Query($args);

        while ($loop_courses->have_posts()) : $loop_courses->the_post();
        $url = get_the_permalink();
        $thumb = wp_get_attachment_url(get_post_thumbnail_id());
        $title = get_the_title();

    ?>
         <div class="col-md-4">            
            <img 
                src="<?php echo $thumb ?>"
                alt="<?php echo $title ?>"
                title="<?php echo $title ?>"
                class="circle-image center-block"
            >
            <h3 class="text-center" ><?php echo $title ?></h3>
            <?php the_content(); ?>
        </div>
    <?php
        endwhile;
        wp_reset_query();
    ?>
</div>