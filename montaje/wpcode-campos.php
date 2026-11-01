// MAP 2027 · Campos editables de las páginas especiales (ACF).
// Las plantillas del tema leen estos campos con map_ar_campo(); si un campo queda vacío, sale el texto de siempre.
// WPCode → PHP Snippet → Run Everywhere.

add_action( 'acf/init', function () {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	$texto = function ( $nombre, $etiqueta, $ayuda = '' ) {
		return array( 'key' => 'field_map_' . $nombre, 'name' => $nombre, 'label' => $etiqueta, 'type' => 'text', 'instructions' => $ayuda );
	};
	$parrafo = function ( $nombre, $etiqueta, $ayuda = '', $filas = 4 ) {
		return array( 'key' => 'field_map_' . $nombre, 'name' => $nombre, 'label' => $etiqueta, 'type' => 'textarea', 'rows' => $filas, 'new_lines' => '', 'instructions' => $ayuda );
	};
	$editor = function ( $nombre, $etiqueta, $ayuda = '' ) {
		return array( 'key' => 'field_map_' . $nombre, 'name' => $nombre, 'label' => $etiqueta, 'type' => 'wysiwyg', 'tabs' => 'visual', 'toolbar' => 'basic', 'media_upload' => 0, 'instructions' => $ayuda );
	};
	$imagen = function ( $nombre, $etiqueta, $ayuda = '' ) {
		return array( 'key' => 'field_map_' . $nombre, 'name' => $nombre, 'label' => $etiqueta, 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium', 'library' => 'all', 'instructions' => $ayuda );
	};
	$vacio = 'Si lo dejás vacío, sale el texto original.';

	// Sobre el director (página 498).
	acf_add_local_field_group( array(
		'key'            => 'group_map_sobre_el_director',
		'title'          => 'MAP 2027 · Textos de «Sobre el director»',
		'fields'         => array(
			$imagen( 'sd_foto', 'Foto de cabecera', 'Vertical (más alta que ancha). Si no elegís ninguna, sale la foto actual de Olman Torres. Escribí el texto alternativo en la biblioteca de medios.' ),
			$texto( 'sd_pie_foto', 'Pie de foto', $vacio ),
			$texto( 'sd_kicker', 'Línea sobre el nombre', $vacio ),
			$parrafo( 'sd_epigrafe', 'Epígrafe (la cita junto a la foto)', $vacio, 4 ),
			$editor( 'sd_biografia', 'Biografía', 'Un párrafo por bloque; los enlaces se ponen con el botón de enlace. ' . $vacio ),
			$parrafo( 'sd_sin_mordaza', 'Declaración editorial «Sin mordaza.»', $vacio, 5 ),
			$parrafo( 'sd_archivo_intro', 'Archivo audiovisual · introducción', $vacio, 4 ),
			$texto( 'sd_credo_1_titulo', 'Credo 1 · después de «Creemos»', 'Ejemplo: en la palabra.' ),
			$parrafo( 'sd_credo_1_texto', 'Credo 1 · texto', $vacio, 3 ),
			$texto( 'sd_credo_2_titulo', 'Credo 2 · después de «Creemos»', 'Ejemplo: en la calle.' ),
			$parrafo( 'sd_credo_2_texto', 'Credo 2 · texto', $vacio, 3 ),
			$parrafo( 'sd_frase', 'Frase de cierre', 'La primera parte de la frase grande del final. ' . $vacio, 3 ),
			$texto( 'sd_frase_remate', 'Frase de cierre · remate destacado', 'La parte final, que sale en rojo.' ),
		),
		'location'       => array( array( array( 'param' => 'page', 'operator' => '==', 'value' => '498' ) ) ),
		'position'       => 'acf_after_title',
		'style'          => 'default',
		'hide_on_screen' => array( 'the_content' ),
		'show_in_rest'   => 1,
	) );
} );
