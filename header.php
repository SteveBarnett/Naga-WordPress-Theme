<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if (IE 8)&!(IEMobile)]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if (gte IE 8|gt IEMobile 7)]> <html class="no-js" lang="en"><![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'toolbox' ), max( $paged, $page ) );

	?></title>

<meta name="description" content="Naga IT Services">
<meta name="author" content="">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- For iPhone 4 -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo( 'stylesheet_directory' ); ?>/img/h/apple-touch-icon.png">
<!-- For iPad 1-->
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo( 'stylesheet_directory' ); ?>/img/m/apple-touch-icon.png">
<!-- For iPhone 3G, iPod Touch and Android -->
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo( 'stylesheet_directory' ); ?>/img/l/apple-touch-icon-precomposed.png"> <?php // 57x57 ?>
<!-- For Nokia -->
<link rel="shortcut icon" href="<?php bloginfo( 'stylesheet_directory' ); ?>/img/l/apple-touch-icon.png">
<!-- For everything else -->
<link rel="shortcut icon" href="<?php bloginfo( 'stylesheet_directory' ); ?>/img/favicon.ico"> <?php // 16x16 ?>

<?php /*
<link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/style.css?v=4.2" />
*/ ?>

<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/basic.css" />

<link rel="stylesheet" media="only screen and (min-width: 48em)" href="<?php bloginfo( 'stylesheet_directory' ); ?>/layout.css" />
<!--[if (lt IE 9) & (!IEMobile) ]>
<link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/layout.css" />
<![endif]-->




<?php /*
<!--[if ! lte IE 6]>
<link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/style.css?v=2" />
<![endif]-->

<!--[if lte IE 6]>
<link rel="stylesheet" href="http://universal-ie6-css.googlecode.com/files/ie6.1.1.css" media="screen, projection">
<![endif]-->
*/ ?>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="author" href="https://plus.google.com/u/0/117361059687801331615"/>


<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/respond.min.js"></script>

<?php //if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/modernizr-1.6.min.js"></script>

<script type="text/javascript" src="http://use.typekit.com/gmm5agt.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24142825-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header role="banner">
			<hgroup>
				<?php if(is_home()) { echo '<h1>'; } else { echo '<h2>'; } ?>
					<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">Naga</a>
				<?php if(is_home()) { echo '</h1>'; } else { echo '</h2>'; } ?>
			</hgroup>
	</header>

	<nav role="navigation">
			<h6>Main Navigation</h6>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
	</nav>