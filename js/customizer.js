
// =================customizer js file ==================
( function( $ ) {
	/* fuzzy_bit_title */
	wp.customize( 'fuzzy_big_title', function( value ) {
		value.bind( function( to ) {
			
			/*if( to != '' ) {
				$( 'footer #zerif-copyright' ).removeClass( 'zerif_hidden_if_not_customizer' );
			}
			else {
				$( 'footer #zerif-copyright' ).addClass( 'zerif_hidden_if_not_customizer' );
			}*/
			//console.log($( '#big_title_home' ).html());
			$( '#big_title_home' ).html( to );
		} );
	} );

})( jQuery );