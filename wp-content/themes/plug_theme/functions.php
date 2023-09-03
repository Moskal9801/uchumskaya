<?php
	add_action( 'wp_enqueue_scripts', function () {
		wp_enqueue_style( 'main-style', get_stylesheet_uri(), [], filemtime( get_stylesheet_directory() . '/style.css' ) );
		wp_enqueue_script( 'main-script', get_template_directory_uri() . '/main.js', [ 'jquery' ], filemtime( get_stylesheet_directory() . '/main.js' ) );
	} );

	add_action( 'wp_head', function () {
		echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
	} );

	add_theme_support( 'post-thumbnails' );

	add_action( 'admin_head', function () {
		wp_enqueue_script( 'cat-script', get_template_directory_uri() . '/cat.js' );
	} );

	add_filter( 'login_headerurl', function () {
		return 'https://01cat.ru';
	} );

	add_action( 'login_header', function () { ?>
        <style>
			#login h1 a {
				background: url("logo.png") center top no-repeat !important;
				width:      111px !important;
				height:     180px !important;
			}
        </style>
	<?php } );
	add_filter( 'admin_footer_text', function () {
		return '<b>Сделано:</b>
			<a href="https://01cat.ru/" target="_blank">Двоичный кот</a>
			<br>
			<b>Техническая поддержка:</b> тел. <a href="tel:+79145416354">+7 (914) 541-63-54</a>, email: <a href="mailto:hello@01cat.ru">hello@01cat.ru</a>';
	} );

	if ( function_exists( 'acf_add_options_page' ) ) {
		acf_add_options_page( [
			'page_title' => 'Контактные данные',
			'menu_title' => 'Контактные данные',
			'menu_slug'  => 'theme-general-settings',
			'capability' => 'edit_posts',
			'redirect'   => false
		] );
	}

	function clearPhone( $phone ) {
		$to_replace = [ ' ', '-', '(', ')', '+' ];

		return str_replace( $to_replace, '', $phone );
	}