// MAP 2027 · Contacto: el formulario «CONTACTO MAP» (WPForms 18966) con los nombres de la página nueva,
// y la lista de espera de El Pañol (correos guardados en WordPress + aviso por correo).
// WPCode → PHP Snippet → Run Everywhere.

// 1) WPForms 18966: etiquetas, botón y mensaje obligatorio (en la página y en el correo de aviso).
$map_ct_campos = function ( $form_data ) {
	if ( empty( $form_data['id'] ) || 18966 !== (int) $form_data['id'] ) {
		return $form_data;
	}
	$nombres = array( 1 => 'Nombre', 2 => 'Correo electrónico', 4 => 'Asunto', 3 => 'Comentario o mensaje' );
	foreach ( $nombres as $id => $label ) {
		if ( isset( $form_data['fields'][ $id ] ) ) {
			$form_data['fields'][ $id ]['label'] = $label;
		}
	}
	if ( isset( $form_data['fields'][3] ) ) {
		$form_data['fields'][3]['required'] = '1';
	}
	$form_data['settings']['submit_text']            = 'Transmitir';
	$form_data['settings']['submit_text_processing'] = 'Transmitiendo…';
	return $form_data;
};
add_filter( 'wpforms_frontend_form_data', $map_ct_campos );
add_filter( 'wpforms_process_before_form_data', $map_ct_campos );

// 2) Lista de espera de El Pañol: POST /wp-json/map/v1/lista  { correo, web (trampa, va vacío) }
add_action( 'rest_api_init', function () {
	register_rest_route( 'map/v1', '/lista', array(
		'methods'             => 'POST',
		'permission_callback' => '__return_true',
		'callback'            => function ( WP_REST_Request $r ) {
			if ( '' !== trim( (string) $r->get_param( 'web' ) ) ) {
				return array( 'ok' => true ); // robot: se le dice que sí y no se guarda nada
			}
			$correo = sanitize_email( (string) $r->get_param( 'correo' ) );
			if ( ! is_email( $correo ) ) {
				return new WP_Error( 'correo', 'Revisá el correo.', array( 'status' => 400 ) );
			}
			$ip    = isset( $_SERVER['REMOTE_ADDR'] ) ? md5( (string) $_SERVER['REMOTE_ADDR'] ) : 'x';
			$veces = (int) get_transient( 'map_lista_' . $ip );
			if ( $veces >= 5 ) {
				return new WP_Error( 'espera', 'Demasiados intentos. Probá más tarde.', array( 'status' => 429 ) );
			}
			set_transient( 'map_lista_' . $ip, $veces + 1, HOUR_IN_SECONDS );
			$lista = (array) get_option( 'map_lista_panol', array() );
			$clave = strtolower( $correo );
			$nuevo = ! isset( $lista[ $clave ] );
			if ( $nuevo ) {
				$lista[ $clave ] = current_time( 'mysql' );
				update_option( 'map_lista_panol', $lista, false );
				wp_mail(
					get_option( 'admin_email' ),
					'MAP · El Pañol: nuevo correo en la lista de espera',
					"Se apuntó a la lista de El Pañol:\n\n" . $correo . "\n\nVan " . count( $lista ) . " correos en la lista.\n\nLista completa en el escritorio de WordPress: Herramientas → Lista de El Pañol."
				);
			}
			return array( 'ok' => true, 'nuevo' => $nuevo );
		},
	) );
} );

// 3) Para ver la lista: Herramientas → Lista de El Pañol (solo administradores).
add_action( 'admin_menu', function () {
	add_management_page( 'Lista de El Pañol', 'Lista de El Pañol', 'manage_options', 'map-lista-panol', function () {
		$lista = (array) get_option( 'map_lista_panol', array() );
		arsort( $lista );
		echo '<div class="wrap"><h1>Lista de espera · El Pañol</h1><p>' . count( $lista ) . ' correos. Para copiarlos todos, seleccioná el cuadro de abajo.</p>';
		echo '<textarea readonly rows="8" style="width:100%;max-width:640px">' . esc_textarea( implode( ', ', array_keys( $lista ) ) ) . '</textarea>';
		echo '<table class="widefat striped" style="max-width:640px;margin-top:16px"><thead><tr><th>Correo</th><th>Fecha</th></tr></thead><tbody>';
		foreach ( $lista as $c => $f ) {
			echo '<tr><td>' . esc_html( $c ) . '</td><td>' . esc_html( $f ) . '</td></tr>';
		}
		echo '</tbody></table></div>';
	} );
} );
