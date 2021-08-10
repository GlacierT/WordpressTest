<?php

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<style>
		ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
		background-color: #333;
		}

		li {
		float: left;
		}

		li a {
		display: block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
		}

		li a:hover {
		background-color: #111;
		}
	</style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'loft-blog' ); ?></a>

	<header id="masthead" class="site-header">
		<ul>
			<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Первая страница</a></li>
			<li><a href="/painting">Посты</a></li>
		</ul>
	</header><!-- #masthead -->
