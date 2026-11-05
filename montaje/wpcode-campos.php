// MAP 2027 · Campos editables de las páginas especiales (ACF).
// Generado por archivo/campos.py. Las plantillas del tema leen estos campos con map_ar_campo(); si un campo queda vacío, sale el texto de siempre.
// WPCode → PHP Snippet → Run Everywhere (ubicación «everywhere»).

$map_campos_acf = function () {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	// Sobre el director (página 498).
	acf_add_local_field_group( array(
		'key'            => 'group_map_director',
		'title'          => 'MAP 2027 · Textos de «Sobre el director»',
		'fields'         => array(
			array( 'key' => 'field_map_sd_foto', 'name' => 'sd_foto', 'label' => 'Foto de cabecera', 'instructions' => 'Vertical (más alta que ancha). Si no elegís ninguna, sale la foto actual de Olman Torres. Escribí el texto alternativo en la biblioteca de medios.', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium', 'library' => 'all' ),
			array( 'key' => 'field_map_sd_pie_foto', 'name' => 'sd_pie_foto', 'label' => 'Pie de foto', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_sd_kicker', 'name' => 'sd_kicker', 'label' => 'Línea sobre el nombre', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_sd_epigrafe', 'name' => 'sd_epigrafe', 'label' => 'Epígrafe (la cita junto a la foto)', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_sd_biografia', 'name' => 'sd_biografia', 'label' => 'Biografía', 'instructions' => 'Un párrafo por bloque; los enlaces se ponen con el botón de enlace. Si lo dejás vacío, sale el texto original.', 'type' => 'wysiwyg', 'tabs' => 'visual', 'toolbar' => 'basic', 'media_upload' => 0 ),
			array( 'key' => 'field_map_sd_sin_mordaza', 'name' => 'sd_sin_mordaza', 'label' => 'Declaración editorial «Sin mordaza.»', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_sd_archivo_intro', 'name' => 'sd_archivo_intro', 'label' => 'Archivo audiovisual · introducción', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_sd_credo_1_titulo', 'name' => 'sd_credo_1_titulo', 'label' => 'Credo 1 · después de «Creemos»', 'instructions' => 'Ejemplo: en la palabra.', 'type' => 'text' ),
			array( 'key' => 'field_map_sd_credo_1_texto', 'name' => 'sd_credo_1_texto', 'label' => 'Credo 1 · texto', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_sd_credo_2_titulo', 'name' => 'sd_credo_2_titulo', 'label' => 'Credo 2 · después de «Creemos»', 'instructions' => 'Ejemplo: en la calle.', 'type' => 'text' ),
			array( 'key' => 'field_map_sd_credo_2_texto', 'name' => 'sd_credo_2_texto', 'label' => 'Credo 2 · texto', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_sd_frase', 'name' => 'sd_frase', 'label' => 'Frase de cierre', 'instructions' => 'La primera parte de la frase grande del final. Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_sd_frase_remate', 'name' => 'sd_frase_remate', 'label' => 'Frase de cierre · remate destacado', 'instructions' => 'La parte final, que sale en rojo.', 'type' => 'text' ),
		),
		'location'       => array( array( array( 'param' => 'page', 'operator' => '==', 'value' => '498' ) ) ),
		'position'       => 'acf_after_title',
		'style'          => 'default',
		'hide_on_screen' => array( 'the_content' ),
		'show_in_rest'   => 1,
	) );

	// Contacto (página 24).
	acf_add_local_field_group( array(
		'key'            => 'group_map_contacto',
		'title'          => 'MAP 2027 · Textos de «Contacto»',
		'fields'         => array(
			array( 'key' => 'field_map_ct_kicker', 'name' => 'ct_kicker', 'label' => 'Línea sobre el título', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_ct_titulo', 'name' => 'ct_titulo', 'label' => 'Título · primera línea', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_ct_titulo_2', 'name' => 'ct_titulo_2', 'label' => 'Título · segunda línea (en rojo)', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_ct_sub', 'name' => 'ct_sub', 'label' => 'Bajada de la cabecera', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_ct_ventanillas_titulo', 'name' => 'ct_ventanillas_titulo', 'label' => 'Ventanillas · título', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_ct_ventanillas_nota', 'name' => 'ct_ventanillas_nota', 'label' => 'Ventanillas · nota al lado del título', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_ct_v1_texto', 'name' => 'ct_v1_texto', 'label' => 'Ventanilla 01 «Frecuencia abierta» · descripción', 'instructions' => 'El nombre de cada ventanilla queda fijo: es el asunto con que te llega el correo.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_ct_v2_texto', 'name' => 'ct_v2_texto', 'label' => 'Ventanilla 02 «El Pañol» · descripción', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_ct_v3_texto', 'name' => 'ct_v3_texto', 'label' => 'Ventanilla 03 «El Astillero» · descripción', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_ct_form_titulo', 'name' => 'ct_form_titulo', 'label' => 'Formulario · título', 'instructions' => 'El mensaje de «Señal recibida» se cambia en WPForms → CONTACTO MAP → Ajustes → Confirmaciones.', 'type' => 'text' ),
			array( 'key' => 'field_map_ct_panol_kicker', 'name' => 'ct_panol_kicker', 'label' => 'El Pañol · línea sobre el título', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_ct_panol_intro', 'name' => 'ct_panol_intro', 'label' => 'El Pañol · introducción', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_ct_pieza_1_nombre', 'name' => 'ct_pieza_1_nombre', 'label' => 'Pieza 1 · nombre', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_ct_pieza_1_texto', 'name' => 'ct_pieza_1_texto', 'label' => 'Pieza 1 · descripción', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_ct_pieza_1_estado', 'name' => 'ct_pieza_1_estado', 'label' => 'Pieza 1 · estado', 'instructions' => 'Ejemplo: En el taller · Disponible · Agotada.', 'type' => 'text' ),
			array( 'key' => 'field_map_ct_pieza_2_nombre', 'name' => 'ct_pieza_2_nombre', 'label' => 'Pieza 2 · nombre', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_ct_pieza_2_texto', 'name' => 'ct_pieza_2_texto', 'label' => 'Pieza 2 · descripción', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_ct_pieza_2_estado', 'name' => 'ct_pieza_2_estado', 'label' => 'Pieza 2 · estado', 'instructions' => 'Ejemplo: En el taller · Disponible · Agotada.', 'type' => 'text' ),
			array( 'key' => 'field_map_ct_pieza_3_nombre', 'name' => 'ct_pieza_3_nombre', 'label' => 'Pieza 3 · nombre', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_ct_pieza_3_texto', 'name' => 'ct_pieza_3_texto', 'label' => 'Pieza 3 · descripción', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_ct_pieza_3_estado', 'name' => 'ct_pieza_3_estado', 'label' => 'Pieza 3 · estado', 'instructions' => 'Ejemplo: En el taller · Disponible · Agotada.', 'type' => 'text' ),
			array( 'key' => 'field_map_ct_pieza_4_nombre', 'name' => 'ct_pieza_4_nombre', 'label' => 'Pieza 4 · nombre', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_ct_pieza_4_texto', 'name' => 'ct_pieza_4_texto', 'label' => 'Pieza 4 · descripción', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_ct_pieza_4_estado', 'name' => 'ct_pieza_4_estado', 'label' => 'Pieza 4 · estado', 'instructions' => 'Ejemplo: En el taller · Disponible · Agotada.', 'type' => 'text' ),
			array( 'key' => 'field_map_ct_astillero_kicker', 'name' => 'ct_astillero_kicker', 'label' => 'El Astillero · línea sobre el título', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_ct_astillero_intro', 'name' => 'ct_astillero_intro', 'label' => 'El Astillero · introducción', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_ct_patrocinio_sello', 'name' => 'ct_patrocinio_sello', 'label' => 'Patrocinio · sello', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_ct_patrocinio_texto', 'name' => 'ct_patrocinio_texto', 'label' => 'Patrocinio · texto', 'instructions' => 'Admite <b>negrita</b>. Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 3, 'new_lines' => '' ),
			array( 'key' => 'field_map_ct_apoyo_kicker', 'name' => 'ct_apoyo_kicker', 'label' => 'Apoyo · línea sobre el título', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_ct_apoyo_titulo', 'name' => 'ct_apoyo_titulo', 'label' => 'Apoyo · título', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_ct_apoyo_texto', 'name' => 'ct_apoyo_texto', 'label' => 'Apoyo · texto', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
		),
		'location'       => array( array( array( 'param' => 'page', 'operator' => '==', 'value' => '24' ) ) ),
		'position'       => 'acf_after_title',
		'style'          => 'default',
		'hide_on_screen' => array( 'the_content' ),
		'show_in_rest'   => 1,
	) );

	// Podcast (página 2368).
	acf_add_local_field_group( array(
		'key'            => 'group_map_podcast',
		'title'          => 'MAP 2027 · Textos de «Podcast»',
		'fields'         => array(
			array( 'key' => 'field_map_pc_kicker', 'name' => 'pc_kicker', 'label' => 'Línea sobre el título', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_pc_intro', 'name' => 'pc_intro', 'label' => 'Introducción', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_pc_dato_episodios', 'name' => 'pc_dato_episodios', 'label' => 'Dato · cantidad de episodios', 'instructions' => 'Ejemplo: 200+', 'type' => 'text' ),
			array( 'key' => 'field_map_pc_pie_foto', 'name' => 'pc_pie_foto', 'label' => 'Pie de la foto de cabecera', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_pc_origen_rotulo', 'name' => 'pc_origen_rotulo', 'label' => 'Donde empezó todo · rótulo', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_pc_origen_nombre', 'name' => 'pc_origen_nombre', 'label' => 'Donde empezó todo · nombre', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_pc_origen_datos', 'name' => 'pc_origen_datos', 'label' => 'Donde empezó todo · datos', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_pc_origen_col_1', 'name' => 'pc_origen_col_1', 'label' => 'Donde empezó todo · columna 1', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'wysiwyg', 'tabs' => 'visual', 'toolbar' => 'basic', 'media_upload' => 0 ),
			array( 'key' => 'field_map_pc_origen_col_2', 'name' => 'pc_origen_col_2', 'label' => 'Donde empezó todo · columna 2', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'wysiwyg', 'tabs' => 'visual', 'toolbar' => 'basic', 'media_upload' => 0 ),
			array( 'key' => 'field_map_pc_origen_col_3', 'name' => 'pc_origen_col_3', 'label' => 'Donde empezó todo · columna 3', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'wysiwyg', 'tabs' => 'visual', 'toolbar' => 'basic', 'media_upload' => 0 ),
			array( 'key' => 'field_map_pc_universo_titulo', 'name' => 'pc_universo_titulo', 'label' => 'El universo · título', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_pc_universo_texto', 'name' => 'pc_universo_texto', 'label' => 'El universo · texto', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_pc_bastardos_subtitulo', 'name' => 'pc_bastardos_subtitulo', 'label' => 'Serie 01 «Los Bastardos de Poveda» · subtítulo', 'instructions' => 'Sale también en el sintonizador de arriba. Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_pc_bastardos_texto', 'name' => 'pc_bastardos_texto', 'label' => 'Serie 01 «Los Bastardos de Poveda» · texto', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'wysiwyg', 'tabs' => 'visual', 'toolbar' => 'basic', 'media_upload' => 0 ),
			array( 'key' => 'field_map_pc_bastardos_destacado_rotulo', 'name' => 'pc_bastardos_destacado_rotulo', 'label' => 'Serie 01 · episodio destacado · rótulo', 'instructions' => 'Ejemplo: Episodio destacado · #10', 'type' => 'text' ),
			array( 'key' => 'field_map_pc_bastardos_destacado_nombre', 'name' => 'pc_bastardos_destacado_nombre', 'label' => 'Serie 01 · episodio destacado · nombre', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_pc_bastardos_destacado_texto', 'name' => 'pc_bastardos_destacado_texto', 'label' => 'Serie 01 · episodio destacado · texto', 'instructions' => 'El botón para escuchar queda fijo. Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_pc_relatos_subtitulo', 'name' => 'pc_relatos_subtitulo', 'label' => 'Serie 02 «Relatos Cortos» · subtítulo', 'instructions' => 'Sale también en el sintonizador de arriba. Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_pc_relatos_texto', 'name' => 'pc_relatos_texto', 'label' => 'Serie 02 «Relatos Cortos» · texto', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'wysiwyg', 'tabs' => 'visual', 'toolbar' => 'basic', 'media_upload' => 0 ),
			array( 'key' => 'field_map_pc_relatos_destacado_rotulo', 'name' => 'pc_relatos_destacado_rotulo', 'label' => 'Serie 02 · episodio destacado · rótulo', 'instructions' => 'Ejemplo: Episodio destacado · #10', 'type' => 'text' ),
			array( 'key' => 'field_map_pc_relatos_destacado_nombre', 'name' => 'pc_relatos_destacado_nombre', 'label' => 'Serie 02 · episodio destacado · nombre', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_pc_relatos_destacado_texto', 'name' => 'pc_relatos_destacado_texto', 'label' => 'Serie 02 · episodio destacado · texto', 'instructions' => 'El botón para escuchar queda fijo. Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_pc_rpgp_subtitulo', 'name' => 'pc_rpgp_subtitulo', 'label' => 'Serie 03 «RPGP» · subtítulo', 'instructions' => 'Sale también en el sintonizador de arriba. Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_pc_rpgp_texto', 'name' => 'pc_rpgp_texto', 'label' => 'Serie 03 «RPGP» · texto', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'wysiwyg', 'tabs' => 'visual', 'toolbar' => 'basic', 'media_upload' => 0 ),
			array( 'key' => 'field_map_pc_rpgp_destacado_rotulo', 'name' => 'pc_rpgp_destacado_rotulo', 'label' => 'Serie 03 · episodio destacado · rótulo', 'instructions' => 'Ejemplo: Episodio destacado · #10', 'type' => 'text' ),
			array( 'key' => 'field_map_pc_rpgp_destacado_nombre', 'name' => 'pc_rpgp_destacado_nombre', 'label' => 'Serie 03 · episodio destacado · nombre', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_pc_rpgp_destacado_texto', 'name' => 'pc_rpgp_destacado_texto', 'label' => 'Serie 03 · episodio destacado · texto', 'instructions' => 'El botón para escuchar queda fijo. Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_pc_cierre_frase', 'name' => 'pc_cierre_frase', 'label' => 'Cierre · frase', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_pc_cierre_remate', 'name' => 'pc_cierre_remate', 'label' => 'Cierre · remate (en rojo)', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_pc_cierre_texto', 'name' => 'pc_cierre_texto', 'label' => 'Cierre · texto', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
		),
		'location'       => array( array( array( 'param' => 'page', 'operator' => '==', 'value' => '2368' ) ) ),
		'position'       => 'acf_after_title',
		'style'          => 'default',
		'hide_on_screen' => array( 'the_content' ),
		'show_in_rest'   => 1,
	) );

	// Serie MAP (página 2600).
	acf_add_local_field_group( array(
		'key'            => 'group_map_seriemap',
		'title'          => 'MAP 2027 · Textos de «Serie MAP»',
		'fields'         => array(
			array( 'key' => 'field_map_sm_kicker', 'name' => 'sm_kicker', 'label' => 'Línea sobre el título', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_sm_intro', 'name' => 'sm_intro', 'label' => 'Introducción', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_sm_dato_t1', 'name' => 'sm_dato_t1', 'label' => 'Dato · temporada 1', 'instructions' => 'Ejemplo: 7 ep.', 'type' => 'text' ),
			array( 'key' => 'field_map_sm_dato_t2', 'name' => 'sm_dato_t2', 'label' => 'Dato · temporada 2', 'instructions' => 'Ejemplo: 8 ep.', 'type' => 'text' ),
			array( 'key' => 'field_map_sm_pie_foto', 'name' => 'sm_pie_foto', 'label' => 'Pie de la foto de cabecera', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 3, 'new_lines' => '' ),
			array( 'key' => 'field_map_sm_que_es', 'name' => 'sm_que_es', 'label' => '¿Qué es MAP? · texto', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'wysiwyg', 'tabs' => 'visual', 'toolbar' => 'basic', 'media_upload' => 0 ),
			array( 'key' => 'field_map_sm_sala_intro', 'name' => 'sm_sala_intro', 'label' => 'Temporada 1 · introducción de la sala', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_sm_t2_titulo', 'name' => 'sm_t2_titulo', 'label' => 'Temporada 2 · título', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_sm_t2_texto', 'name' => 'sm_t2_texto', 'label' => 'Temporada 2 · texto', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'wysiwyg', 'tabs' => 'visual', 'toolbar' => 'basic', 'media_upload' => 0 ),
			array( 'key' => 'field_map_sm_arco', 'name' => 'sm_arco', 'label' => 'Temporada 2 · el arco de la escaleta', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_sm_acto_1', 'name' => 'sm_acto_1', 'label' => 'Escaleta · nombre del acto I', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_sm_acto_2', 'name' => 'sm_acto_2', 'label' => 'Escaleta · nombre del acto II', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_sm_acto_3', 'name' => 'sm_acto_3', 'label' => 'Escaleta · nombre del acto III', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_sm_acto_4', 'name' => 'sm_acto_4', 'label' => 'Escaleta · nombre del acto IV', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_sm_esc_01_titulo', 'name' => 'sm_esc_01_titulo', 'label' => 'Temporada 2 · episodio 01 · título', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_sm_esc_01_pregunta', 'name' => 'sm_esc_01_pregunta', 'label' => 'Temporada 2 · episodio 01 · pregunta', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_sm_esc_02_titulo', 'name' => 'sm_esc_02_titulo', 'label' => 'Temporada 2 · episodio 02 · título', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_sm_esc_02_pregunta', 'name' => 'sm_esc_02_pregunta', 'label' => 'Temporada 2 · episodio 02 · pregunta', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_sm_esc_03_titulo', 'name' => 'sm_esc_03_titulo', 'label' => 'Temporada 2 · episodio 03 · título', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_sm_esc_03_pregunta', 'name' => 'sm_esc_03_pregunta', 'label' => 'Temporada 2 · episodio 03 · pregunta', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_sm_esc_04_titulo', 'name' => 'sm_esc_04_titulo', 'label' => 'Temporada 2 · episodio 04 · título', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_sm_esc_04_pregunta', 'name' => 'sm_esc_04_pregunta', 'label' => 'Temporada 2 · episodio 04 · pregunta', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_sm_esc_05_titulo', 'name' => 'sm_esc_05_titulo', 'label' => 'Temporada 2 · episodio 05 · título', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_sm_esc_05_pregunta', 'name' => 'sm_esc_05_pregunta', 'label' => 'Temporada 2 · episodio 05 · pregunta', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_sm_esc_06_titulo', 'name' => 'sm_esc_06_titulo', 'label' => 'Temporada 2 · episodio 06 · título', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_sm_esc_06_pregunta', 'name' => 'sm_esc_06_pregunta', 'label' => 'Temporada 2 · episodio 06 · pregunta', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_sm_esc_07_titulo', 'name' => 'sm_esc_07_titulo', 'label' => 'Temporada 2 · episodio 07 · título', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_sm_esc_07_pregunta', 'name' => 'sm_esc_07_pregunta', 'label' => 'Temporada 2 · episodio 07 · pregunta', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_sm_esc_08_titulo', 'name' => 'sm_esc_08_titulo', 'label' => 'Temporada 2 · episodio 08 · título', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_sm_esc_08_pregunta', 'name' => 'sm_esc_08_pregunta', 'label' => 'Temporada 2 · episodio 08 · pregunta', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_sm_pr_01_titulo', 'name' => 'sm_pr_01_titulo', 'label' => 'Principio 01 · título', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_sm_pr_01_texto', 'name' => 'sm_pr_01_texto', 'label' => 'Principio 01 · texto', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_sm_pr_02_titulo', 'name' => 'sm_pr_02_titulo', 'label' => 'Principio 02 · título', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_sm_pr_02_texto', 'name' => 'sm_pr_02_texto', 'label' => 'Principio 02 · texto', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_sm_pr_03_titulo', 'name' => 'sm_pr_03_titulo', 'label' => 'Principio 03 · título', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_sm_pr_03_texto', 'name' => 'sm_pr_03_texto', 'label' => 'Principio 03 · texto', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_sm_pr_04_titulo', 'name' => 'sm_pr_04_titulo', 'label' => 'Principio 04 · título', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_sm_pr_04_texto', 'name' => 'sm_pr_04_texto', 'label' => 'Principio 04 · texto', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_sm_pr_05_titulo', 'name' => 'sm_pr_05_titulo', 'label' => 'Principio 05 · título', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_sm_pr_05_texto', 'name' => 'sm_pr_05_texto', 'label' => 'Principio 05 · texto', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_sm_pr_06_titulo', 'name' => 'sm_pr_06_titulo', 'label' => 'Principio 06 · título', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_sm_pr_06_texto', 'name' => 'sm_pr_06_texto', 'label' => 'Principio 06 · texto', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_sm_pr_07_titulo', 'name' => 'sm_pr_07_titulo', 'label' => 'Principio 07 · título', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_sm_pr_07_texto', 'name' => 'sm_pr_07_texto', 'label' => 'Principio 07 · texto', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_sm_pr_08_titulo', 'name' => 'sm_pr_08_titulo', 'label' => 'Principio 08 · título', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_sm_pr_08_texto', 'name' => 'sm_pr_08_texto', 'label' => 'Principio 08 · texto', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_sm_frase', 'name' => 'sm_frase', 'label' => 'Cierre · frase', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_sm_frase_remate', 'name' => 'sm_frase_remate', 'label' => 'Cierre · remate (en rojo)', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_sm_cierre_rotulo', 'name' => 'sm_cierre_rotulo', 'label' => 'Cierre · rótulo sobre los botones', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
		),
		'location'       => array( array( array( 'param' => 'page', 'operator' => '==', 'value' => '2600' ) ) ),
		'position'       => 'acf_after_title',
		'style'          => 'default',
		'hide_on_screen' => array( 'the_content' ),
		'show_in_rest'   => 1,
	) );

	// Crónicas del Refugio (página 14451).
	acf_add_local_field_group( array(
		'key'            => 'group_map_cronicas',
		'title'          => 'MAP 2027 · Textos de «Crónicas del Refugio»',
		'fields'         => array(
			array( 'key' => 'field_map_lb_ficha_cantidad', 'name' => 'lb_ficha_cantidad', 'label' => 'Ficha · cantidad de crónicas', 'instructions' => 'Ejemplo: 17 crónicas', 'type' => 'text' ),
			array( 'key' => 'field_map_lb_ficha_estado', 'name' => 'lb_ficha_estado', 'label' => 'Ficha · estado', 'instructions' => 'Ejemplo: En curso · En revisión · Publicado', 'type' => 'text' ),
			array( 'key' => 'field_map_lb_sub', 'name' => 'lb_sub', 'label' => 'Subtítulo', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_lb_desc', 'name' => 'lb_desc', 'label' => 'Descripción de la cabecera', 'instructions' => 'Admite <b>negrita</b> y <em>cursiva</em>. Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 3, 'new_lines' => '' ),
			array( 'key' => 'field_map_lb_sobre_nota', 'name' => 'lb_sobre_nota', 'label' => 'Sobre el libro · nota al lado del título', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_lb_sobre', 'name' => 'lb_sobre', 'label' => 'Sobre el libro · texto', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'wysiwyg', 'tabs' => 'visual', 'toolbar' => 'basic', 'media_upload' => 0 ),
			array( 'key' => 'field_map_lb_indice_nota', 'name' => 'lb_indice_nota', 'label' => 'Índice · nota al lado del título', 'instructions' => 'La lista de crónicas queda fija. Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_lb_aviso_titulo', 'name' => 'lb_aviso_titulo', 'label' => 'Índice · aviso (en negrita)', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_lb_aviso', 'name' => 'lb_aviso', 'label' => 'Índice · aviso (texto)', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_lb_t1_nombre', 'name' => 'lb_t1_nombre', 'label' => 'Territorio 1 · nombre', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_lb_t1_desc', 'name' => 'lb_t1_desc', 'label' => 'Territorio 1 · descripción', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_lb_t2_nombre', 'name' => 'lb_t2_nombre', 'label' => 'Territorio 2 · nombre', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_lb_t2_desc', 'name' => 'lb_t2_desc', 'label' => 'Territorio 2 · descripción', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_lb_t3_nombre', 'name' => 'lb_t3_nombre', 'label' => 'Territorio 3 · nombre', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_lb_t3_desc', 'name' => 'lb_t3_desc', 'label' => 'Territorio 3 · descripción', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_lb_portada', 'name' => 'lb_portada', 'label' => 'Por qué esta imagen de portada · texto', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'wysiwyg', 'tabs' => 'visual', 'toolbar' => 'basic', 'media_upload' => 0 ),
			array( 'key' => 'field_map_lb_cita', 'name' => 'lb_cita', 'label' => 'Una lectura · cita', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_lb_cita_autor', 'name' => 'lb_cita_autor', 'label' => 'Una lectura · autor', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_lb_cita_fuente', 'name' => 'lb_cita_fuente', 'label' => 'Una lectura · fuente', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_lb_frase', 'name' => 'lb_frase', 'label' => 'Cierre · frase', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_lb_frase_remate', 'name' => 'lb_frase_remate', 'label' => 'Cierre · remate (en rojo)', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
		),
		'location'       => array( array( array( 'param' => 'page', 'operator' => '==', 'value' => '14451' ) ) ),
		'position'       => 'acf_after_title',
		'style'          => 'default',
		'hide_on_screen' => array( 'the_content' ),
		'show_in_rest'   => 1,
	) );

	// Gracias (página 10670).
	acf_add_local_field_group( array(
		'key'            => 'group_map_gracias',
		'title'          => 'MAP 2027 · Textos de «Gracias»',
		'fields'         => array(
			array( 'key' => 'field_map_gr_kicker', 'name' => 'gr_kicker', 'label' => 'Línea sobre el título', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_gr_titulo', 'name' => 'gr_titulo', 'label' => 'Título', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_gr_bajada', 'name' => 'gr_bajada', 'label' => 'Bajada', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_gr_escuchar', 'name' => 'gr_escuchar', 'label' => 'Por dónde arrancar · Escuchar · texto', 'instructions' => 'El episodio queda fijo. Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_gr_leer_1', 'name' => 'gr_leer_1', 'label' => 'Por dónde arrancar · Leer · texto del primer artículo', 'instructions' => 'El título lo pone el artículo. Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 2, 'new_lines' => '' ),
			array( 'key' => 'field_map_gr_leer_2', 'name' => 'gr_leer_2', 'label' => 'Por dónde arrancar · Leer · texto del segundo artículo', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 2, 'new_lines' => '' ),
			array( 'key' => 'field_map_gr_ver', 'name' => 'gr_ver', 'label' => 'Por dónde arrancar · Ver · texto', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_gr_medias', 'name' => 'gr_medias', 'label' => 'Medias Nasional · texto', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'wysiwyg', 'tabs' => 'visual', 'toolbar' => 'basic', 'media_upload' => 0 ),
			array( 'key' => 'field_map_gr_medias_nota', 'name' => 'gr_medias_nota', 'label' => 'Medias Nasional · nota del video', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_gr_camisa_foto', 'name' => 'gr_camisa_foto', 'label' => 'La Camisa Negra · foto', 'instructions' => 'Horizontal (más ancha que alta), de al menos 1200 px de ancho. Si no elegís ninguna, sale la miniatura del video de YouTube.', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium', 'library' => 'all' ),
			array( 'key' => 'field_map_gr_camisa', 'name' => 'gr_camisa', 'label' => 'La Camisa Negra · texto', 'instructions' => 'Los puntos de la lista se hacen con el botón de lista. Si lo dejás vacío, sale el texto original.', 'type' => 'wysiwyg', 'tabs' => 'visual', 'toolbar' => 'basic', 'media_upload' => 0 ),
			array( 'key' => 'field_map_gr_apoyo_panol', 'name' => 'gr_apoyo_panol', 'label' => 'Mantener la señal · El Pañol', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_gr_apoyo_kofi', 'name' => 'gr_apoyo_kofi', 'label' => 'Mantener la señal · Ko-fi', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_gr_apoyo_spotify', 'name' => 'gr_apoyo_spotify', 'label' => 'Mantener la señal · Spotify', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_gr_apoyo_compartir', 'name' => 'gr_apoyo_compartir', 'label' => 'Mantener la señal · Compartir', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
		),
		'location'       => array( array( array( 'param' => 'page', 'operator' => '==', 'value' => '10670' ) ) ),
		'position'       => 'acf_after_title',
		'style'          => 'default',
		'hide_on_screen' => array( 'the_content' ),
		'show_in_rest'   => 1,
	) );

	// Frecuencia confirmada (página 22828).
	acf_add_local_field_group( array(
		'key'            => 'group_map_frecuencia',
		'title'          => 'MAP 2027 · Textos de «Frecuencia confirmada»',
		'fields'         => array(
			array( 'key' => 'field_map_fc_kicker', 'name' => 'fc_kicker', 'label' => 'Línea sobre el título', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_fc_titulo', 'name' => 'fc_titulo', 'label' => 'Título', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_fc_bajada', 'name' => 'fc_bajada', 'label' => 'Bajada', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_fc_puertas_titulo', 'name' => 'fc_puertas_titulo', 'label' => 'Tres puertas · título', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_fc_escuchar', 'name' => 'fc_escuchar', 'label' => 'Escuchar · texto', 'instructions' => 'El episodio queda fijo. Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_fc_leer', 'name' => 'fc_leer', 'label' => 'Leer · texto', 'instructions' => 'El título lo pone el artículo. Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_fc_ver', 'name' => 'fc_ver', 'label' => 'Ver · texto', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_fc_cierre', 'name' => 'fc_cierre', 'label' => 'Cierre · texto', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_fc_firma', 'name' => 'fc_firma', 'label' => 'Cierre · firma', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
		),
		'location'       => array( array( array( 'param' => 'page', 'operator' => '==', 'value' => '22828' ) ) ),
		'position'       => 'acf_after_title',
		'style'          => 'default',
		'hide_on_screen' => array( 'the_content' ),
		'show_in_rest'   => 1,
	) );

	// Cantinas legendarias (página 2).
	acf_add_local_field_group( array(
		'key'            => 'group_map_cantinas',
		'title'          => 'MAP 2027 · Textos de «Cantinas legendarias»',
		'fields'         => array(
			array( 'key' => 'field_map_cn_kicker', 'name' => 'cn_kicker', 'label' => 'Línea sobre el título', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_cn_titulo', 'name' => 'cn_titulo', 'label' => 'Título', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'text' ),
			array( 'key' => 'field_map_cn_bajada', 'name' => 'cn_bajada', 'label' => 'Bajada', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
			array( 'key' => 'field_map_cn_notam', 'name' => 'cn_notam', 'label' => 'NOTAM (sale al alejar el mapa)', 'instructions' => 'Si lo dejás vacío, sale el texto original.', 'type' => 'textarea', 'rows' => 4, 'new_lines' => '' ),
		),
		'location'       => array( array( array( 'param' => 'page', 'operator' => '==', 'value' => '2' ) ) ),
		'position'       => 'acf_after_title',
		'style'          => 'default',
		'hide_on_screen' => array( 'the_content' ),
		'show_in_rest'   => 1,
	) );

	// Cantinas legendarias: estado de cada punto en el mapa (tipo de contenido «cantina»).
	acf_add_local_field_group( array(
		'key'            => 'group_map_cantina_estado',
		'title'          => 'MAP 2027 · Estado en el mapa',
		'fields'         => array(
			array( 'key' => 'field_map_cn_aliado', 'name' => 'punto_aliado', 'label' => 'Punto aliado', 'type' => 'true_false', 'ui' => 1, 'ui_on_text' => 'Sí', 'ui_off_text' => 'No', 'instructions' => 'No es cantina, pero aquí también se toma birra. Sale como rombo verde.' ),
			array( 'key' => 'field_map_cn_cerro', 'name' => 'cerro', 'label' => 'Cerró · fuera del aire', 'type' => 'true_false', 'ui' => 1, 'ui_on_text' => 'Sí', 'ui_off_text' => 'No', 'instructions' => 'Ya no opera. Queda en el mapa como memoria, en gris y sin botones de cómo llegar.' ),
			array( 'key' => 'field_map_cn_senal', 'name' => 'senal_activa', 'label' => 'Señal activa (sonar)', 'type' => 'true_false', 'ui' => 1, 'ui_on_text' => 'Sí', 'ui_off_text' => 'No', 'instructions' => 'El punto destella en el mapa, como un sonar.' ),
		),
		'location'       => array( array( array( 'param' => 'post_type', 'operator' => '==', 'value' => 'cantina' ) ) ),
		'position'       => 'side',
		'style'          => 'default',
		'show_in_rest'   => 1,
	) );
};
// WPCode puede correr el snippet después de acf/init: en ese caso se registran de una vez.
if ( did_action( 'acf/init' ) ) {
	$map_campos_acf();
} else {
	add_action( 'acf/init', $map_campos_acf );
}

// Páginas con campos (498 Sobre el director, 24 Contacto, 2368 Podcast, 2600 Serie MAP, 14451 Crónicas del Refugio, 10670 Gracias, 22828 Frecuencia confirmada, 2 Cantinas legendarias): se editan en la pantalla clásica, sin el editor de bloques ni el contenido viejo de Elementor.
$map_con_campos = array( 498, 24, 2368, 2600, 14451, 10670, 22828, 2 );
add_filter( 'use_block_editor_for_post', function ( $usar, $post ) use ( $map_con_campos ) {
	return ( $post && in_array( (int) $post->ID, $map_con_campos, true ) ) ? false : $usar;
}, 20, 2 );

// En esas páginas se esconden los botones de Elementor: la página la arma la plantilla del tema.
add_action( 'admin_head-post.php', function () use ( $map_con_campos ) {
	global $post;
	if ( $post && in_array( (int) $post->ID, $map_con_campos, true ) ) {
		echo '<style>#elementor-switch-mode,#elementor-editor,#elementor-switch-mode-button{display:none!important}</style>';
		echo '<script>document.addEventListener("DOMContentLoaded",function(){var a=document.querySelector(".wrap h1, .wrap .wp-heading-inline");if(a){var p=document.createElement("p");p.style.cssText="margin:8px 0 0;padding:10px 12px;background:#fff8e5;border-left:4px solid #dba617;max-width:760px";p.textContent="Los textos de esta página se cambian en las cajas «MAP 2027 · Textos», más abajo. Cambiá lo que necesités y dale Actualizar. Si dejás una caja vacía, sale el texto original.";a.parentNode.insertBefore(p,a.nextSibling.nextSibling||null);}});</script>';
	}
} );

// Las cantinas viven solo en el mapa de /cantinas/: fuera del mapa del sitio de Rank Math (cada /cantina/<nombre>/ redirige a su ficha).
add_filter( 'rank_math/sitemap/exclude_post_type', function ( $excluir, $tipo ) {
	return 'cantina' === $tipo ? true : $excluir;
}, 10, 2 );
