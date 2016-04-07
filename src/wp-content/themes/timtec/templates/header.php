<?php global $_MENUS; ?>
<header id="main-navbar" class="navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <h1 class="text-hide">
                <a class="brand" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
                <a class="timtec" href="<?php echo esc_url(home_url('/')); ?>" > TIMTec</a>
            </h1>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navbar-collapse">
                <span class="sr-only">Alternar navegação</span>
                <span class="text">Menu</span>
            </button>
        </div>
        <nav class="collapse navbar-collapse navbar-nav" id="main-navbar-collapse">
            <?php                
                wp_nav_menu( array(                    
                    'items_wrap'        => '<ul id="menu-menu-pt" class="nav nav-pills">%3$s</ul>'.user_logado(),
                    'menu'              => 'geral-topo',
                    'theme_location'    => 'geral-topo',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'menu-menu-pt-container',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            =>  new wp_bootstrap_navwalker()
                ));
            ?>

        </nav>
    </div>
</header>


<?php 
    if ( is_user_logged_in() ) {
        $current_user = wp_get_current_user();
?>
<!-- modal logado -->
<div class="modal modal-menu fade" id="modal-logado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-container">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-triangle-up fa fa-caret-up"></div>
        <div class="modal-content">
          <div class="modal-body">
                <h3>Olá, <span><?php echo esc_html( $current_user->user_firstname ); ?></span>, deseja sair? ;)</h3>
                <a href="<?php echo wp_logout_url( home_url() ); ?>" class="btn btn-logout">Sim, quero me deslogar</a>
                <a href="#" class="btn btn-cancel">Cancelar</a>
                <div class="info">
                    <div class="icon">
                    <?php
                        $nome_completo = $current_user->display_name;
                        $name = explode( " ", $nome_completo );
                        $iniciais = "";
                        for ($i = 0; $i < count($name); $i++) {
                            if ($i < 2) {
                                $iniciais .= substr($name[$i],0,1); 
                            };
                        }
                        echo $iniciais;        
                    ?>
                    </div>
                    <div class="text"><span><?php echo esc_html( $current_user->user_firstname ); ?></span>, para para editar seus dados de perfil, <a href="/cadastro/">clique aqui</a>.</div>
                </div>
          </div>
        </div>
      </div>
    </div>
</div>
<?php 
    }else{
?>
    <!-- modal login -->
<div class="modal modal-menu fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-container">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-triangle-up fa fa-caret-up"></div>
        <div class="modal-content">
          <div class="modal-body">
            <h3><span>Login</span></h3>
            <h4>Olá, deseja entrar? ;)</h4>
            <form name="registerform" action="<?php echo wp_login_url( get_permalink() ); ?>" method="post">
              <div class="form-group">
                <label for="login-email" class="sr-only">E-mail ou nome</label>
                <input type="text" name="log" class="form-control" id="login-email" placeholder="e-mail ou nome">
              </div>
              <div class="form-group">
                <label for="login-password" class="sr-only">Password</label>
                <input type="password" name="pwd" class="form-control" id="login-password" placeholder="senha">
              </div>
              <button type="submit" class="btn">Iniciar sessão</button>
            </form>
            <p><a href="<?php echo get_option('home'); ?>/reset-login" title="Esqueceu sua senha? Clique aqui!">Esqueceu sua senha?</a><br /></p>
            <hr>
            <p><a href="/cadastro/">Clique aqui para fazer o cadastro.</a></p>
            <p>O cadastro permite acessar os fóruns e baixar os cursos.</p>
          </div>
        </div>
      </div>
    </div>
</div>


<?php         
    }//EndIf User Logged
?>
