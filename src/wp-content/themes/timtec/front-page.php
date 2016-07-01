<!--
<section id="modal-home" style="display:none" one-time-show>
    <div class="bg-modal"></div>
    <div class="modal-home-wrapper">
        <div class="modal-timtec-logo"></div>
        <div class="modal-triangle-up fa fa-caret-up"></div>
        <div class="modal-home-content">
            <a href="#" class="close js-close-modal"><i class="fa fa-times"></i></a>
            <h3><a href="http://mooc.timtec.com.br"><span>CLIQUE AQUI</span> PARA ACESSAR OS CURSOS</a></h3>
            <div class="icon"><div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icones-cursos.png" alt="Cursos TIM Tec"></div></div>
            <p>Este é o novo Portal TIM Tec.</p>
            <p>A plataforma TIM Tec mudou de endereço: <a href="http://mooc.timtec.com.br">mooc.timtec.com.br</a></p>
        </div>
    </div>
</section>

<section id="news" class="" >
    <div class="container">
        <h3>Novidades: </h3>
        <div id="newsCarouselWrapper" class="container-fluid">
   <div id="newsCarousel" class="carousel slide">
      <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="item-item col-md-6">
                        <a href="#" class="categoria">
                            #categoria
                        </a>
                        <a href="#">
                           <span>Novidade 1 - titulo, lote, Inspum |</span>
                            <span> ás 18h30 12/09/2015</span>
                        </a>
                    </div>
                 </div>
                 <div class="item ">
                    <div class="item-item col-md-6">
                        <a href="#" class="categoria">
                            #categoria
                        </a>
                        <a href="#">
                           <span>Novidade 2 - titulo, lote, Inspum |</span>
                            <span> ás 10h30 10/09/2015</span>
                        </a>
                    </div>
                 </div>
                 <div class="item ">
                    <div class="item-item col-md-6">
                        <a href="#" class="categoria">
                            #categoria
                        </a>
                        <a href="#">
                           <span>Novidade 3 - titulo, lote, Inspum |</span>
                            <span> ás 09h30 19/09/2015</span>
                        </a>
                    </div>
                 </div>

      </div>
      <!-- Controls
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
      </a>

   </div>
</div>
    </div>
</section>

-->

<section id="banner" class=" ">
    <div class="container">
        <div class="col-lg-10 col-md-12 center">
            <div class="row cerebro">
                <h3>
                    <?php _oi("TIM TEC ="); ?>
                    <span class="titulo"><?php _oi("SOFTWARE LIVRE + CURSOS + REDE E-TEC BRASIL"); ?> </span>
                </h3>
                <div class="itens-banner hidden-sm hidden-xs">
                    <div class="col-md-4 item-banner js-scroll-to" data-target="#software" >
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icones-software.png" />
                        <h4><?php _oi("Software"); ?> </h4>
                        <p><?php _oi("Lorem ipsum dolor sit amet, consectetur adipiscing elit. "); ?> </p>
                        <a href="#"><span class="caret caret-8"></span></a>
                    </div>
                    <div class="col-md-4 item-banner js-scroll-to" data-target="#courses" >
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icones-cursos.png" />
                        <h4><?php _oi("Cursos"); ?> </h4>
                        <p><?php _oi("Lorem ipsum dolor sit amet, elit. Maecenasid velit lobortis."); ?></p>
                        <a href="#"><span class="caret caret-8"></span></a>
                    </div>
                    <div class="col-md-4 item-banner js-scroll-to" data-target="#network">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icones-redes.png" />
                        <h4><?php _oi("Redes"); ?> </h4>
                        <p><?php _oi("Lorem ipsum consectetur adipiscing ultricies magna porta, molestie diam."); ?></p>
                        <a href="#"><span class="caret caret-8"></span></a>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="software" class="section">
    <div class="container">
        <div class="boxs row">
            <div class="col-md-6">
                <div class="box">
                    <div class="icon hidden-sm hidden-xs">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ilustra-software01.png" />
                    </div>

                    <div class="title">
                        <h3><?php _oi("SOFTWARE"); ?></h3>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icones-software.png" class="hidden-md hidden-lg" />
                    </div>
                    <div class="text">
                        <?php _oi("Suco de cevadiss, é um leite divinis, qui tem matis, aguis e fermentis. Interagi  vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere pulvinar pellentesque nibh ullamcorper. Pharetra in mattis molestie, volutpat elementum justo. Aenean ut ante turpis. Pellentesque laoreet mé vel lectus scelerisque interdum cursus velit auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac mauris lectus, non scelerisque augue. Aenean justo massa."); ?>
                    </div>
                    <div class="links">
                        <?php
                        wp_nav_menu(array(
                            'items_wrap' => '<span id="%1$s" class="sub-menu">%3$s</span>',
                            'theme_location'    => 'software-home',
                            'walker'  => new MenuWalker_Buttons() //use our custom walker
                        ));
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-2 linha hidden-sm hidden-xs">
                <span class="linha-centro" >
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/listra-verde.png" />
                </span>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icones-boxes-principais-software.png" class="icon-imgPrinc" />
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icones-cursos.png"  class="icon-imgSecun"/>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icones-redes.png"  class="icon-imgSecun2" />
            </div>
            <div class="col-md-4 hidden-sm hidden-xs">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ilustra-software02.png" class="img"/>
            </div>
        </div> <!-- /.row -->
    </div><!-- /container-->
</section>

<section id="courses" class="section">
    <div class="container">
        <div class="boxs row">
            <div class="col-md-6 hidden-sm hidden-xs">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ilustra-cursos.png" class="img"/>
            </div>

            <div class="title hidden-md hidden-lg">
                <h3><?php _oi("CURSOS"); ?></h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icones-cursos.png" class="hidden-md hidden-lg" />
            </div>

            <div class="col-md-2 linha hidden-sm hidden-xs">
                <span class="linha-centro" >
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/listra-azul.png" />
                </span>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icones-software.png" class="icon-imgPrinc" />
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icones-boxes-principais-cursos.png"  class="icon-imgSecun"/>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icones-redes.png"  class="icon-imgSecun2" />
            </div>
            <div class="col-md-4">
                <div class="box">
                    <div class="text text1">
                        <?php _oi("Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Ut scelerisque neque et turpis posuere pulvinar pellentesque nibh ullamcorper.  Aenean justo massa."); ?>
                    </div>
                    <div class="title hidden-sm hidden-xs">
                        <h3><?php _oi("CURSOS"); ?></h3>
                    </div>
                    <div class="text">
                        <?php _oi("Suco de cevadiss, é um leite divinis, aguis e fermentis. Ut scelerisque neque et turpis posuere pulvinar pellentesque nibh ullamcorper.  Aenean justo massa."); ?>
                    </div>
                    <div class="links">
                        <?php
                        wp_nav_menu(array(
                            'items_wrap' => '<span id="%1$s" class="sub-menu">%3$s</span>',
                            'theme_location'    => 'cursos-home',
                            'walker'  => new MenuWalker_Buttons() //use our custom walker
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </div> <!-- /.row -->
    </div><!-- /container-->
</section>

<section id="network" class="section">
    <div class="container">
        <div class="boxs row">
            <div class="col-md-12 hidden-sm hidden-xs">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ilustra-redes.png" class="img"/>
            </div>

            <div class="col-md-6">
                <div class="title">
                    <h3><?php _oi("REDES"); ?></h3>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icones-redes.png"  class="hidden-md hidden-lg" />
                </div>

                <div class="links hidden-sm hidden-xs">
                    <?php
                    wp_nav_menu(array(
                        'items_wrap' => '<span id="%1$s" class="sub-menu">%3$s</span>',
                        'theme_location'    => 'rede-home',
                        'walker'  => new MenuWalker_Buttons() //use our custom walker
                    ));
                    ?>
                </div>
            </div>
            <div class="col-md-2 linha hidden-sm hidden-xs">
                <span class="linha-centro" >
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/listra-branco.png" />
                </span>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icones-software.png" class="icon-imgPrinc" />
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icones-cursos.png"  class="icon-imgSecun"/>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icones-boxes-principais-redes.png"  class="icon-imgSecun2" />
            </div>
            <div class="col-md-4">
                <div class="box">
                    <div class="text">
                        <?php _oi("Suco de cevadiss,  qui tem lupuliz, matis, aguis e fermentis. Ut scelerisque neque et turpis posuere pulvinar pellentesque nibh ullamcorper.  Aenean justo massa."); ?>
                    </div>
                </div>
            </div>

            <div class="links hidden-md hidden-lg">
                <?php
                wp_nav_menu(array(
                    'items_wrap' => '<span id="%1$s" class="sub-menu">%3$s</span>',
                    'theme_location'    => 'software-home',
                    'walker'  => new MenuWalker_Buttons() //use our custom walker
                ));
                ?>
            </div>
        </div> <!-- /.row -->
    </div><!-- /container-->
</section>


