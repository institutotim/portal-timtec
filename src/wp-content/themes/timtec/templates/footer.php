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
			<a href="http://www.institutotim.org.br/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/imagens/logo_header_institutotim.png" alt="" title="" /></a>
		</div>
	</div>

	<div class="creditos">
		 Copyright TIM Celular 2017 - Todos os direitos reservados.
	</div>

</div>

<div class="container footer-mobile">
    <div class="footer-logo col-sm-5 col-xs-4">
        <a href="<?php echo get_option('home'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/imagens/logo_header_institutotim.png" alt="" title="" /></a>
    </div>
    <div class="footer-creditos col-sm-7 col-xs-8">
        &copy; TIM Celular <?php echo date('Y'); ?> - Todos os direitos reservados.
    </div>
</div>
