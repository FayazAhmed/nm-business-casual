
// =================customizer js file ==================
( function( $ ) {
	/* fuzzy_bit_title */
	wp.customize( 'fuzzy_big_title', function( value ) {
		value.bind( function( to ) {
			
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
	wp.customize( 'fuzzy-set-sub-title', function( value ) {
		value.bind( function( to ) {
			
			if( to != '' ) {
				$( '.sub-title' ).removeClass( 'fuzzy_hidden_if_not_customizer' );
			}
			else {
				$( '.sub-title' ).addClass( 'fuzzy_hidden_if_not_customizer' );
			}
			//console.log($( '#big_title_home' ).html());
			$( '.sub-title' ).html( to );
		} );
	} );
	
	/* fuzzy-email.-on-top-title */
	wp.customize( 'fuzzy_email_adress', function( value ) {
		value.bind( function( to ) {
			
			/*if( to != '' ) {
				$( 'footer #zerif-copyright' ).removeClass( 'zerif_hidden_if_not_customizer' );
			}
			else {
				$( 'footer #zerif-copyright' ).addClass( 'zerif_hidden_if_not_customizer' );
			}*/
			//console.log($( '#big_title_home' ).html());
			$( '#e-mail' ).html( to );
		} );
	} );
})( jQuery );