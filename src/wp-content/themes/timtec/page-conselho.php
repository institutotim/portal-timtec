<div class="row row-flex">
    <?php
        //$colunas    = 3; //Número de colunas
        //$iCol       = -1;
        $args       = array(
            'posts_per_page' => -1,
            'post_type' => 'conselho'
        );
        $loop_courses = new WP_Query($args);
        while ($loop_courses->have_posts()) : $loop_courses->the_post();
        $url    = get_the_permalink();
        $thumb  = wp_get_attachment_url(get_post_thumbnail_id());
        $title  = get_the_title();
        // $iCol++;
        // if ($iCol == $colunas) {
        //     $iCol = 0;
        //      <!--/div><div class="row"-->
        // <?php
        // }
    ?>
        <div class="col-lg-4 col-sm-6 text-center panel-conselho">
            <img
                class="img-circle img-responsive img-center"
                src="<?php echo $thumb ?>"
                alt="<?php echo $title ?>"
                title="<?php echo $title ?>"
                style="width:200px; height: 200px">
            <h3><?php echo $title ?></h3>
            <?php the_content(); ?>
        </div>
    <?php
        endwhile;
        wp_reset_query();
    ?>
</div>