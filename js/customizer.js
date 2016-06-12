
// =================customizer js file ==================
( function( $ ) {
	/* fuzzy_bit_title */
	wp.customize( 'fuzzy_big_title', function( value ) {
		value.bind( function( to ) {
			console.log(to);
			if( to != '' ) {
				$( '#big_title_home' ).removeClass( 'fuzzy_hidden_if_not_customizer' );
			}
			else {
				$( '#big_title_home' ).addClass( 'fuzzy_hidden_if_not_customizer' );
			}
			//console.log($( '#big_title_home' ).html());
			$( '#big_title_home' ).html( to );

		} );
	} );

	/* fuzzy-phoneNo.-on-top-title */
	wp.customize( 'fuzzy_set_sub_title', function( value ) {
		value.bind( function( to ) {
			
			console.log(to);
			if( to != '' ) {
				$( '.sub-title' ).removeClass( 'fuzzy_hidden_if_not_customizer' );
			}
			else {
				$( '.sub-title' ).addClass( 'fuzzy_hidden_if_not_customizer' );
			}
			//console.log($( '#big_title_home' ).html());
			$( '#sub_title' ).html( to );
		} );
	} );
	
	/* fuzzy-email.-on-top-title */
	wp.customize( 'fuzzy_email_adress', function( value ) {
		value.bind( function( to ) {
			
			if( to != '' ) {
				$( '#e-mail' ).removeClass( 'fuzzy_hidden_if_not_customizer' );
			}
			else {
				$( '#e-mail' ).addClass( 'fuzzy_hidden_if_not_customizer' );
			}
			$( '#e-mail' ).html( to );
		} );
	} );
	/* fuzzy-email.-on-top-title */
	wp.customize( 'fuzzy_welcom_to', function( value ) {
		value.bind( function( to ) {
			
			if( to != '' ) {
				$( '#brand-name' ).removeClass( 'fuzzy_hidden_if_not_customizer' );
			}
			else {
				$( '#brand-name' ).addClass( 'fuzzy_hidden_if_not_customizer' );
			}
			
			$( '#brand-name' ).html( to );
		} );
	} );
	// fuzzy slider image (1)
	wp.customize( 'fuzzy_slider_img_1', function( value ) {
		value.bind( function( to ) {
			if( to != '' ) {
				$( '.item #slider_1' ).removeClass( 'fuzzy_hidden_if_not_customizer' );
			}
			else {
				$( '.item #slider_1' ).addClass( 'fuzzy_if_not_customizer' );
			}
			$( '.item #slider_1' ).attr( 'src', to );
		} );
	} );
	// fuzzy slider image (2)
	wp.customize( 'fuzzy_slider_img_2', function( value ) {
		value.bind( function( to ) {
			if( to != '' ) {
				$( '.item #slider_2' ).removeClass( 'fuzzy_hidden_if_not_customizer' );
			}
			else {
				$( '.item #slider_2' ).addClass( 'fuzzy_hidden_if_not_customizer' );
			}
			$( '.item #slider_2' ).attr( 'src', to );
		} );
	} );
	// fuzzy slider image (3)
	wp.customize( 'fuzzy_slider_img_3', function( value ) {
		value.bind( function( to ) {
			if( to != '' ) {
				$( '.item #slider_3' ).removeClass( 'fuzzy_hidden_if_not_customizer' );
			}
			else {
				$( '.item #slider_3' ).addClass( 'fuzzy_hidden_if_not_customizer' );
			}
			$( '.item #slider_3' ).attr( 'src', to );
		} );
	} );
})( jQuery );