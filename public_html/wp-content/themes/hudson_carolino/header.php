<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portfólio_Hudson_Carolino
 */
global $configuracao;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

	<!-- META -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="twitter:image" content="http://hudsoncarolino.com.br/wp-content/uploads/2017/09/compartilhar2.jpg" />
	<meta property="og:image" content="http://hudsoncarolino.com.br/wp-content/uploads/2017/09/compartilhar2.jpg" />
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/faveHudson.ico" type="image/x-icon"/>
	<?php wp_head(); ?>
<meta name="google-site-verification" content="hxqakX3CyW4Fhu-w2tQlS8SGDtD5coxftLVw8e6dfgc" />

<!-- end olark code -->
</head>
	<body <?php body_class(); ?>>	


<!-- begin olark code -->
<script type="text/javascript" async>
;(function(o,l,a,r,k,y){if(o.olark)return;
r="script";y=l.createElement(r);r=l.getElementsByTagName(r)[0];
y.async=1;y.src="//"+a;r.parentNode.insertBefore(y,r);
y=o.olark=function(){k.s.push(arguments);k.t.push(+new Date)};
y.extend=function(i,j){y("extend",i,j)};
y.identify=function(i){y("identify",k.i=i)};
y.configure=function(i,j){y("configure",i,j);k.c[i]=j};
k=y._={s:[],t:[+new Date],c:{},l:a};
})(window,document,"static.olark.com/jsclient/loader.js");
/* Add configuration calls below this comment */
olark.identify('6229-288-10-9895');</script>

		<!-- Global Site Tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-106534562-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments)};
			gtag('js', new Date());

			gtag('config', 'UA-106534562-1');
		</script>
		<!-- LOADER -->
		<div class="areaLoader">
			<div class="loader">
				<span class="icon-palupa"></span>
				<div class="slidingVertical">
					<?php 
						$frases = $configuracao['opt_letras_load'];
						foreach ($frases  as $frases ):
						$frases = $frases;
					?>
					<p><?php echo $frases ?></p>
					<?php endforeach ?>
				</div>
			</div>
		</div>

		<!-- TOPO -->
		<header class="topo">
			
			<button id="menuOpen">
				<span></span>
				<span></span>
				<span></span>
			</button>

			<div class="logo">
				<a href="<?php echo home_url('/'); ?>">
					<img src="<?php bloginfo('template_directory'); ?>/img/logo2.svg" alt="<?php echo get_bloginfo() ?>">
				</a>
			</div>

			<nav>
				<button id="menuClose">
					<i class="fa fa-times" aria-hidden="true"></i>
				</button>
				<div class="menu">
					<?php 
						$menu = array(
							'theme_location'  => '',
							'menu'            => 'Menu Principal',
							'container'       => false,
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => '',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 2,
							'walker'          => ''
							);
						wp_nav_menu( $menu );
					?>
				</div>
			</nav>

			
		</header>