'use strict';

( function ( $ ) {
	let doc = $( document );

	doc.ready( function () {
		doc.on( 'click', '#fspInstallBtn', function () {
			let email = $( '#fspEmail' ).val().trim();
			let password = $( '#fspPassword' ).val().trim();
			let passwordRepeat = $( '#fspPasswordRepeat' ).val().trim();
			let marketingStatistics = $( '#fspMarketingStatistics' ).val();

			FSPoster.ajax( 'activate_app', { 'statistic': marketingStatistics, email, password, passwordRepeat }, function ( res ) {
				FSPoster.toast( res[ 'msg' ], 'success' );
				FSPoster.loading( true );

				window.location.reload();
			} );
		} );
	} );
} )( jQuery );
