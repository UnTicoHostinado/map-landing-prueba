// MAP 2027 · Instalador (carta y archivo). Activar, usar y volver a desactivar.
// /?map_carta=<commit>   → carta de navegación en uploads/2026/carta/
// /?map_archivo=<commit> → plantilla de entrada: uploads/2026/archivo/ + plantillas del tema hijo
// (el commit de GitHub evita la caché; sin commit usa «main»). Solo con usuario administrador.
$map_instalar = function () {
	$paquete = ! empty( $_GET['map_archivo'] ) ? 'archivo' : ( ! empty( $_GET['map_carta'] ) ? 'carta' : '' );
	if ( ! $paquete || ! current_user_can( 'manage_options' ) ) {
		return;
	}
	require_once ABSPATH . 'wp-admin/includes/file.php';
	$v   = (string) $_GET[ 'map_' . $paquete ];
	$ref = preg_match( '/^[0-9a-f]{7,40}$/', $v ) ? $v : 'main';
	$tmp = download_url( 'https://raw.githubusercontent.com/unticohostinado/map-landing-prueba/' . $ref . '/montaje/' . $paquete . '-2027.zip', 300 );
	if ( is_wp_error( $tmp ) ) {
		wp_die( 'No se pudo descargar el paquete: ' . esc_html( $tmp->get_error_message() ) );
	}
	WP_Filesystem();
	global $wp_filesystem;
	$base = wp_upload_dir()['basedir'] . '/2026/';
	wp_mkdir_p( $base );
	if ( 'carta' === $paquete ) {
		$r = unzip_file( $tmp, $base );
		@unlink( $tmp );
		if ( is_wp_error( $r ) ) {
			wp_die( 'No se pudo descomprimir: ' . esc_html( $r->get_error_message() ) );
		}
		$n = 0;
		foreach ( new RecursiveIteratorIterator( new RecursiveDirectoryIterator( $base . 'carta', FilesystemIterator::SKIP_DOTS ) ) as $f ) {
			$n++;
		}
		wp_die( '<h1>Carta instalada</h1><p>' . $n . ' archivos en uploads/2026/carta/.</p><p>Ya puede desactivar este snippet.</p>' );
	}
	$dir = trailingslashit( get_temp_dir() ) . 'map-archivo-' . time() . '/';
	$r   = unzip_file( $tmp, $dir );
	@unlink( $tmp );
	if ( is_wp_error( $r ) ) {
		wp_die( 'No se pudo descomprimir: ' . esc_html( $r->get_error_message() ) );
	}
	wp_mkdir_p( $base . 'archivo' );
	copy_dir( $dir . 'archivo', $base . 'archivo' );
	$tema   = trailingslashit( get_stylesheet_directory() );
	$hechos = array();
	foreach ( (array) glob( $dir . 'tema/*.php' ) as $f ) {
		$n = basename( $f );
		if ( file_exists( $tema . $n ) && ! file_exists( $tema . $n . '.antes-2027' ) ) {
			copy( $tema . $n, $tema . $n . '.antes-2027' );
		}
		copy( $f, $tema . $n );
		$hechos[] = $n;
	}
	$wp_filesystem->delete( $dir, true );
	delete_transient( 'map_ar_populares' );
	wp_die( '<h1>Archivo instalado</h1><p>Estilos y scripts en uploads/2026/archivo/.</p><p>Plantillas del tema: ' . esc_html( implode( ', ', $hechos ) ) . ' (copia del anterior: .antes-2027).</p><p>Ya puede desactivar este snippet.</p>' );
};
if ( did_action( 'wp_loaded' ) ) {
	$map_instalar();
} else {
	add_action( 'wp_loaded', $map_instalar );
}
