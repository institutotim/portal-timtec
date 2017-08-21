<?php global $_MENUS; ?>


<style>


#tim-container {
    width: 100%;
    margin: 0;
    padding: 0;
    background-color: #075aa5
}
.logo-it {
    background-color: #00427f;
    border-bottom: 2px solid #82b9e6;
    height: 27px;
    padding-top: 3px;
}
.menu-it {
    background-color: #004691;
}
#menu-nav-it{
    text-transform: uppercase;
}
.menu-fixed-bottom-left {
    left: 0;
    position: relative;
}
.navbar-overtop-tim-en-pt a {
    color: #82b9e6;
}
#menu-nav-it,
.box-it li,
.box-it,
.creditos,
.box-sz1 h2,
.searchbox input[type="text"] {
    font-family: 'TIMSansWeb', Fallback, times-new-roman
}
.logo2 {
    width: 188px;
    float: left;
}
.logo2 img {
    width: 188px;
}
.navbar-toggle{
    margin-top: 10px;
    margin-right: 0;
}
.navbar-default,
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus{
    border: none;
    background-color: transparent;
}
#menu-nav-it {
    margin-top: 0;
}
#menu-nav-it li > a{
    margin-right: 15px;
    margin-left: 0;
    padding: 10px;
    color: #FFF;
    border-radius: inherit;
}
#menu-nav-it li > a > .dropdown-toggle .fa-angle-down:before{
    color: #00a4e4 !important;
}
.nav .open a:hover,
.nav .open a:active,
.nav .open a:focus,
#menu-nav-it li > a:hover,
#menu-nav-it li > a:active,
#menu-nav-it li > a:focus,
#menu-nav-it li.open > a:hover,
#menu-nav-it li.open > a:active,
#menu-nav-it li.open > a:focus
{
    color: #FFF;
    border-radius: inherit;
    background-color: #428bca !important;
}
#menu-nav-it li > ul > li > a,
#menu-nav-it li.open > ul > li > a:hover,
#menu-nav-it li.open > ul > li > a:focus,
#menu-nav-it li.open > ul > li > a:active{
    color: #075aa5;
    font-size: 12px;
    background-color: #fff;
}
#menu-nav-it li > ul > li > a:hover{
    color: #00a4e4;
}

.navbar-toggle {
    background: transparent;
    border: none;
}

.menu-nav-it-container{
    padding: 0;
}

.searchbox {
    width: 280px;
    position: relative;
    margin-top: 5px;
    height: 25px
}
.searchbox input {
    outline: none
}
.searchbox input:focus::-webkit-input-placeholder {
    color: transparent
}
.searchbox input:focus:-moz-placeholder {
    color: transparent;
}
.searchbox input:focus::-moz-placeholder {
    color: transparent
}
.searchbox input[type="text"] {
    background-color: #fff;
    border: 0px;
    font-size: 12px;
    color: #666;
    padding: 8px;
    width: 260px;
    border: 1px solid #fff;
    border-radius: 4px;
    font-size: 12px;
}
.searchbox input[type="text"]:focus {
    color: #000;
    text-indent: 0px;
}
#button-submit {
    background: url(<?php echo get_template_directory_uri();
    ?>/imagens/searchicon.png) no-repeat;
    margin-left: -32px;
    border-width: 0px;
    width: 21px;
    height: 21px;
}
#search-row-mobile{
    padding: 0;
    height: 52px;
}
#search-row-mobile > .searchbox {
    width: 100%;
    padding-top: 8px;
    margin-bottom: 8px;
    height: 33px;
    border-top: 1px solid #00a4e4;
}
#search-row-mobile > .searchbox > input[type="text"]{
    width: 98%;
}

.footer-mobile {
    width: 100%;
    background-color: #075aa5;
    height: 56px;
    color: #00a4e4;
    display: block;
    margin: 0;
    min-height: inherit;
    padding: 17px 20px;
}

.footer-logo img {
    width: 117px;
}

.footer-creditos{
    margin-top: 6px;
    text-align: right;

}

nav.navbar {
    background: transparent;
    padding: 0;
}

.logo2.logo-project{
    width: 65px;
    margin: 16px 0 0 20px;
}
.logo2.logo-project > a > img {
    width: 90px;
}

div.divider{
    border-left: 2px solid #155ea3;
    height: 22px;
    position: relative;
    left: 10px;
    top: 18px;
    float: left
}

@media only screen and (max-width: 799px){
    .home-first-section{
        margin-top: 0;
    }
    .footer-creditos{
        font-size: 7px;
    }
    #menu-nav-it{
        background-color: #e7e7e7;
    }
    #menu-nav-it li > a{
        color: #004279;
        margin-right: 0;
    }
    .nav-e{
        display: none;
    }
    #search-row-mobile{
        display: block;
    }
    .menu-it,
    .menu-it > .container.container-2.bar-secundary {
        min-height: 56px;
    }
    .menu-fixed-bottom-left{
        margin-top: 18px;
        margin-left: 2px;
    }
    .menu-fixed-border-left{
        padding-right: 15px;
    }
    .navbar{
        margin-bottom: 0;
    }
    .navbar-header {
        float: none;
    }
    .navbar-left,.navbar-right {
        float: none !important;
    }
    .navbar-toggle {
        display: block;
    }
    .navbar-collapse {
        border-top: 1px solid transparent;
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
    }
    .navbar-fixed-top {
        top: 0;
        border-width: 0 0 1px;
    }
    .navbar-collapse.collapse {
        display: none!important;
    }
    .navbar-nav {
        float: none!important;
        margin: 0;
    }
    .navbar-nav>li {
        float: none;
    }
    .navbar-nav>li>a {
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .collapse.in{
        display:block !important;
    }
    #footer-tim{
        display: none;
    }
    .container-2 {
        margin: 0;
    }
}

@media only screen and (min-width: 800px) {
    div.divider{
        top: 35px;
        float: left;
    }
    .logo2.logo-project {
        margin-top: 32px;
    }
    #search-row-mobile{
        display: none;
    }
    .rede-social,
    #footer-tim {
        display: none
    }
    .container-2 {
        width: 640px;
        margin: 0 auto
    }
    .logo2 {
        width: 188px;
        float: left;
        z-index: 99999;
        height: 21px
    }
    .logo2 img {
        width: 188px;
        z-index: 99999
    }
    .bar-primary,
    .bar-secundary {
        padding-left: 20px;
        width: 640px
    }
    .bar-secundary {
        height: 99px;
    }
    .nav-it {
        padding-right: 0;
        border-top: 1px solid #00a4e4;
        height: 39px
    }
    .nav-f {
        position: relative;
        z-index: 9999;
        float: left;
        display: block;
        z-index: 1;
        height: 90px;
        width: 464px;
        padding-left: 50px;
    }
    .nav-i {
        width: 402px;
        height: 55px;
        margin-top: -9px
    }
    .nav-e {
        width: 350px;
        float: left;
        padding-bottom: 0;
        padding-top: 0;
        height: 48px;
    }
    .container-2 {
        width: 800px;
    }
    .bar-primary,
    .bar-secundary {
        width: 800px;
    }
    #menu-nav-it li > a {
        font-size: 12px;
        margin: 0;
        padding: 10px 6px;
    }
    .nav-i {
        width: 402px;
        height: 57px;
        margin-top: 0
    }
    .nav-e {
        height: 35px;
        margin-top: 7px
    }
    #menu-menu-1 li {
        display: inline-block
    }
    .footer-mobile {
        display: none
    }
    #et-featured-posts {
        margin-top: 0
    }
    .ltrad {
        margin-right: 15px
    }
    #footer-tim {
        display: block;
        width: 100%;
        background-color: #075aa5;
        margin-top: 30px;
        height: 320px;
        color: #00a4e4
    }
    #footer-tim ul {
        padding: 0
    }
    .footer-tim {
        width: 768px;
        height: 180px;
        font-size: 10pt;
        padding: 30px
    }
    .footer-links {
        margin-left: 0px
    }
    .footer-links li a {
        font-size: 13px;
        color: #fff;
        text-decoration: none;
        line-height: 0px;
        margin: 0;
        padding: 0
    }
    .footer-links a:hover {
        color: #00a4e4
    }
    .footer-links li,
    ul.rede-social {
        list-style: none;
    }
    .box-it {
        float: left
    }
    .box-it li {
        padding-top: 11px
    }
    .box-it li a {
        font-size: 9pt;
        color: #fff
    }
    .box-it li a:hover {
        color: #82b9e6
    }
    .creditos {
        width: 768px;
        height: 50px;
        text-align: center;
        padding-top: 25px;
        color: #00a4e4;
        font-size: 9pt;
        clear: both
    }
    .box-sz2,
    .box-sz2 img {
        width: 120px;
        text-align: center
    }
    .box-sz2 img {
        margin-top: 0px;
        margin-left: 15px
    }
    .box-sz1 {
        width: 140px;
        padding-left: 24px;
        padding-right: 15px
    }
    .box-sz1 h2 {
        font-family: 'TIMSansWebBold';
        font-size: 14px;
        margin-top: 0px;
        color: #00a4e4;
        text-transform: uppercase;
    }
    .footer-links2 {
        margin-left: 0px;
        margin-top: -7px
    }
    .footer-links2 li a {
        font-size: 15px;
        font-family: 'TIMSansWebBold';
        color: #00a4e4;
        text-decoration: none;
        line-height: 0px;
        margin: 0;
        padding: 0;
        text-transform: uppercase
    }
    .footer-links2 li a:hover {
        color: #fff
    }
    .footer-links2 li {
        list-style: none;
    }
    .footerborder-left {
        box-shadow: -1px 0 0 0 rgb(39, 100, 191);
        border-left: 1px solid #003b7b;
        height: 150px;
        -moz-box-shadow: -1px 0 0 0 rgb(39, 100, 191);
        -webkit-box-shadow: -1px 0 0 0 rgb(39, 100, 191)
    }
    .menu-fixed-bottom-left {
        margin-top: 34px;
    }
}
@media only screen and (min-width: 992px) {
    #menu-nav-it > li > a{
        margin-right: 10px;
        padding-left: 10px;
    }
    .container-2 {
        width: 970px;
        margin: 0 auto
    }

    .rede-social {
        width: 200px;
        float: right;
        display: block;
        font-size: 16pt
    }
    .rede-social li {
        display: inline-block;
        padding: 10px 5px
    }
    .rede-social li a {
        color: #fff
    }
    .main {
        margin-top: 0px
    }
    .footer-tim,
    .creditos {
        width: 1024px
    }
    .footer-tim {
        height: 204px;
        font-size: 10pt;
        padding: 30px;
        margin: 0 auto
    }
    .creditos {
        font-size: 17px;
        height: 66px;
        margin: 0 auto;
        padding-top: 40px
    }

    .bar-primary,
    .bar-secundary {
        padding-right: 30px
    }
    .searchbox {
        width: 280px;
        margin-top: 5px;
        height: 25px
    }
    .searchbox input[type="text"] {
        background-color: #fff;
        border: 0px;
        font-size: 12px;
        padding: 8px;
        width: 260px
    }
    .nav-f {
        width: 637px;
        float: left;
        display: block;
        z-index: 1;
        height: 90px
    }
    .nav-i {
        width: 402px;
        height: 48px;
        margin-top: 9px
    }
    .nav-e {
        width: 350px;
        float: left;
        padding-bottom: 0;
        padding-top: 0;
        height: 44px;
        margin-top: 0
    }
    .box-it li a {
        font-size: 17px;
        padding: 3px
    }
    #footer-tim {
        display: block;
        width: 100%;
        background-color: #075aa5;
        margin-top: 30px;
        color: #00a4e4
    }
    .box-sz1,
    .box-sz2 {
        width: 197px
    }
    .box-sz2 {
        width: 154px;
        padding-top: 0px
    }
    .box-sz1 h2 {
        font-size: 16px;
        text-transform: uppercase;
    }
    /*.box-sz2, .box-sz2 img {width:134px}*/

    .box-sz2 img {
        width: 134px
    }
    .box-sz2 img {
        margin-top: 0px;
        margin-left: 24px
    }
    .footer-links li a {
        color: #fff;
        text-decoration: none;
        line-height: 19px;
        margin: 0;
        padding: 0;
        font-size: 13px
    }
    /*.footerborder-left {height: 180px}*/

    .footer-links2 {
        margin-left: 0px;
        margin-top: -7px
    }
    .footer-links2 li a {
        font-size: 15px;
        font-family: 'TIMSansWebBold';
        color: #00a4e4;
        text-decoration: none;
        line-height: 0px;
        margin: 0;
        padding: 0;
        text-transform: uppercase
    }
    .footer-links2 li a:hover {
        color: #fff
    }
    .footer-links2 li {
        list-style: none;
    }
}

</style>

<div id="tim-container">
	<div class="logo-it">
		<div class="container container-2 bar-primary">
			<a href="http://tim.com.br/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/imagens/logo_header_portal_tim.png" title="Instituto TIM" alt="Instituto TIM" /></a>
		</div>
	</div>

	<div class="menu-it">
		<div class="container container-2 bar-secundary">
			<div class="logo2 menu-fixed-bottom-left menu-fixed-border-left">
				<a href="https://institutotim.org.br/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/imagens/logo_header_institutotim.png" alt="" title="" /></a>
			</div>

            <div class="divider"></div>
            <div class="logo2 logo-project">
				<a href="<?php echo get_option('home'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/imagens/logo_timtec.png" alt="" title="" /></a>
			</div>

			<div class="nav-f">
                <div class="nav-i">
                    <div class="nav-e">
                        <form class="searchbox" method="get" action="/" autocomplete="off">
                            <input name="s" type="text" placeholder="O que você procura?" title="O que você procura?" />
                            <input id="button-submit" type="submit" value=" "/>
                        </form>
                    </div>
                </div>
			     <div class="nav-it">
                    <nav class="navbar">
                        <div class="navbar-header navbar-default">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".menu-nav-it-container" aria-expanded="false">
                                <span class="sr-only">Expandir Navegação</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <?php
                            wp_nav_menu( array(
                                'items_wrap'        => '<ul id="menu-nav-it" class="nav navbar-nav">%3$s</ul>',
                                'menu'              => 'footer-1',
                                'theme_location'    => 'footer-1',
                                'depth'             => 2,
                                'container'         => 'div',
                                'container_class'   => 'menu-nav-it-container collapse navbar-collapse',
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'walker'            =>  new wp_bootstrap_navwalker()
                            ));
                        ?>
                    </nav>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" id="search-row-mobile">
                <form class="searchbox" method="get" action="/" autocomplete="off">
                    <input name="s" type="text" size="15" placeholder="O que você procura?" title="O que você procura?" />
                    <input id="button-submit" type="submit" value=" "/>
                </form>
            </div>
		</div>
	</div>
</div>

<div>
