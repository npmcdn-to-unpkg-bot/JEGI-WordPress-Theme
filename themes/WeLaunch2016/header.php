<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Name
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<script type="text/javascript">
    (function() {
        var path = '//easy.myfonts.net/v2/js?sid=227095(font-family=Nexa+Regular)&sid=227099(font-family=Nexa+Bold)&sid=227102(font-family=Nexa+Light)&key=CJHWCmZyKC',
            protocol = ('https:' == document.location.protocol ? 'https:' : 'http:'),
            trial = document.createElement('script');
        trial.type = 'text/javascript';
        trial.async = true;
        trial.src = protocol + path;
        var head = document.getElementsByTagName("head")[0];
        head.appendChild(trial);
    })();
</script>

</head>

<body <?php body_class(); ?>>
<header>
	<nav class="navbar navbar-default" role="navigation">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo content_url(); ?>/uploads/2016/03/we-launch-logox2-1.png" class="img-responsive"></a>
	    </div>
	    <?php
	        wp_nav_menu( array(
	            'menu'              => 'primary',
	            'theme_location'    => 'primary',
	            'depth'             => 2,
	            'container'         => 'div',
	            'container_class'   => 'collapse navbar-collapse',
	    'container_id'      => 'bs-example-navbar-collapse-1',
	            'menu_class'        => 'nav navbar-nav navbar-right',
	            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
	            'walker'            => new wp_bootstrap_navwalker())
	        );
	    ?>
	    </div>
	</nav>
</header>
