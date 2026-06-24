<?php
/**
 * Theme setup and assets.
 *
 * @package TerritoriosDaAgua
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Registers theme features.
 */
function tda_setup(): void {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'custom-logo', array(
		'height'      => 180,
		'width'       => 620,
		'flex-height' => true,
		'flex-width'  => true,
	) );

	add_editor_style( array( 'assets/css/front.css', 'assets/css/editor.css' ) );
}
add_action( 'after_setup_theme', 'tda_setup' );

/**
 * Enqueues front-end styles.
 */
function tda_enqueue_assets(): void {
	$theme   = wp_get_theme();
	$version = $theme->get( 'Version' );

	wp_enqueue_style(
		'tda-front',
		get_theme_file_uri( 'assets/css/front.css' ),
		array(),
		$version
	);
}
add_action( 'wp_enqueue_scripts', 'tda_enqueue_assets' );

/**
 * Adds a pattern category for the theme sections.
 */
function tda_register_pattern_categories(): void {
	register_block_pattern_category(
		'territorios-da-agua',
		array( 'label' => __( 'Territorios da Agua', 'territorios-da-agua' ) )
	);
}
add_action( 'init', 'tda_register_pattern_categories' );

/**
 * Installs the official logo as the default Site Logo when the theme is activated.
 */
function tda_register_default_site_logo(): void {
	if ( get_theme_mod( 'custom_logo' ) ) {
		return;
	}

	$logo_path = get_theme_file_path( 'assets/images/logo/territorios-da-agua-logo.png' );
	if ( ! file_exists( $logo_path ) ) {
		return;
	}

	$existing_id = (int) get_option( 'tda_default_logo_attachment_id' );
	if ( $existing_id && get_post( $existing_id ) ) {
		set_theme_mod( 'custom_logo', $existing_id );
		return;
	}

	$upload = wp_upload_bits( basename( $logo_path ), null, file_get_contents( $logo_path ) );
	if ( ! empty( $upload['error'] ) || empty( $upload['file'] ) ) {
		return;
	}

	$filetype = wp_check_filetype( $upload['file'] );
	$attach_id = wp_insert_attachment(
		array(
			'post_mime_type' => $filetype['type'],
			'post_title'     => 'Logo Territórios da Água',
			'post_content'   => '',
			'post_status'    => 'inherit',
		),
		$upload['file']
	);

	if ( is_wp_error( $attach_id ) || ! $attach_id ) {
		return;
	}

	require_once ABSPATH . 'wp-admin/includes/image.php';

	$metadata = wp_generate_attachment_metadata( $attach_id, $upload['file'] );
	wp_update_attachment_metadata( $attach_id, $metadata );
	update_post_meta( $attach_id, '_wp_attachment_image_alt', 'Territórios da Água' );
	update_option( 'tda_default_logo_attachment_id', $attach_id );
	set_theme_mod( 'custom_logo', $attach_id );
}
add_action( 'after_switch_theme', 'tda_register_default_site_logo' );

/**
 * Renders one theme pattern file so it can seed editable page content.
 *
 * @param string $slug Pattern file slug without extension.
 * @return string
 */
function tda_render_pattern_content( string $slug ): string {
	$file = get_theme_file_path( 'patterns/' . $slug . '.php' );
	if ( ! file_exists( $file ) ) {
		return '';
	}

	ob_start();
	include $file;
	return trim( (string) ob_get_clean() );
}

/**
 * Creates the one-page content as editable Gutenberg blocks on first activation.
 */
function tda_seed_front_page(): void {
	if ( get_option( 'tda_front_page_seeded' ) ) {
		return;
	}

	$existing_page = get_page_by_path( 'territorios-da-agua', OBJECT, 'page' );
	if ( $existing_page instanceof WP_Post ) {
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $existing_page->ID );
		update_option( 'tda_front_page_seeded', $existing_page->ID );
		return;
	}

	$pattern_slugs = array(
		'hero',
		'introducao',
		'sobre-projeto',
		'contextualizacao',
		'programa-apps',
		'avaliacao-apps',
		'tipologias-apps',
		'mapa-interativo',
		'projeto-parelheiros',
		'eventos',
		'biblioteca',
		'quem-somos',
	);

	$content = implode(
		"\n\n",
		array_filter(
			array_map( 'tda_render_pattern_content', $pattern_slugs )
		)
	);

	if ( '' === $content ) {
		return;
	}

	$page_id = wp_insert_post(
		array(
			'post_title'   => 'Territórios da Água',
			'post_name'    => 'territorios-da-agua',
			'post_type'    => 'page',
			'post_status'  => 'publish',
			'post_content' => $content,
		),
		true
	);

	if ( is_wp_error( $page_id ) || ! $page_id ) {
		return;
	}

	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', (int) $page_id );
	update_option( 'tda_front_page_seeded', (int) $page_id );
}
add_action( 'after_switch_theme', 'tda_seed_front_page' );
