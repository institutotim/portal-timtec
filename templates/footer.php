</div>
<div id="footer-tim" style="margin:0">
	<div class="footer-tim">
		<div class="box-it box-sz1">
			<h2>Sobre</h2>
                        <div class="menu-sobre-container">
                            <?php
                            wp_nav_menu(array(
                                'items_wrap' => '<ul id="%1$s" class="footer-links">%3$s</ul>',
                                'theme_location'    => 'sobre-footer',
                            ));
                            ?>
                        </div>

		</div>

		<div class="box-it box-sz1 footerborder-left">
			<h2>Software</h2>
                            <?php
                            wp_nav_menu(array(
                                'items_wrap' => '<ul id="%1$s" class="footer-links">%3$s</ul>',
                                'theme_location'    => 'software-footer',
                            ));
                            ?>
		</div>

		<div class="box-it box-sz1 footerborder-left">
			<h2>Cursos</h2>
                            <?php
                            wp_nav_menu(array(
                                'items_wrap' => '<ul id="%1$s" class="footer-links">%3$s</ul>',
                                'theme_location'    => 'cursos-footer',
                            ));
                            ?>

		</div>
		  
		<div class="box-it box-sz1 footerborder-left">
			<h2>Redes</h2>
                            <?php
                            wp_nav_menu(array(
                                'items_wrap' => '<ul id="%1$s" class="footer-links">%3$s</ul>',
                                'theme_location'    => 'rede-footer',
                            ));
                            ?>

		</div>


		<div class="box-it box-sz2 footerborder-left">
			<a href="http://timfazciencia.com.br/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/imagens/logo_header_institutotim.png" alt="" title="" /></a>
			<h2>Instituto TIM nas Redes</h2>

                    <ul class="rede-social">
                        <?php
                        $loop_redessociais = new WP_Query(
                            array(
                                'post_type' => 'rede_social',
                                'posts_per_page' => -1,
                            )
                        );

                        while ($loop_redessociais->have_posts())
                            :$loop_redessociais->the_post();

                            $link_rede_social = get_post_meta($post->ID, 'rede_social_link', true);
                            $icon_rede_social = get_post_meta($post->ID, 'icone_awesome', true);
                            ?>
                            <li class="<?php the_title(); ?>"><a href="<?php echo $link_rede_social ?>" target="_blank"><i class="fa <?php echo $icon_rede_social ?>"></i></a></li>
                            <?php
                        endwhile;
                        ?>
                    </ul>
                    
		</div>
	</div>

	<div class="creditos">
		 Copyright TIM Celular 2017 - Todos os direitos reservados.
	</div>

</div>
