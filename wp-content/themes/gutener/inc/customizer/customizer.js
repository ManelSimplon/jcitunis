/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	wp.customize( 'logo_width', function( value ) {
		value.bind( function( to ) {
			$( '.site-header .site-branding > a' ).css( "max-width", to + 'px' );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.inner-header-content h2' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.inner-header-content h2' ).css( {
					'color': to
				} );
			}
		} );
	} );

	// Header image padding top & bottom
	wp.customize( 'header_image_height', function( value ) {
	    value.bind( function( to ) {
	        $(".header-image-wrap").css( "height", to + 'px' );
	    } );
	} );

	wp.customize( 'header_image_padding_bottom', function( value ) {
	    value.bind( function( to ) {
	        $( ".site-header-primary .main-header" ).css( "padding-bottom", to + 'px' );
	    } );
	} );

	// Header button border radius
	wp.customize( 'header_button_border_radius', function( value ) {
	    value.bind( function( to ) {
	        $( ".site-header .header-btn a" ).css( "borderRadius", to + 'px' );
	    } );
	} );

	// Notification button border radius
	wp.customize( 'notification_bar_button_border_radius', function( value ) {
	    value.bind( function( to ) {
	        $( ".notification-bar .button-container a" ).css( "borderRadius", to + 'px' );
	    } );
	} );

	// Blog Post button border radius
	wp.customize( 'post_button_border_radius', function( value ) {
	    value.bind( function( to ) {
	        $( '.post .button-container a' ).css( "borderRadius", to + 'px' );
	    } );
	} );

	// Post slider button border radius
	wp.customize( 'slider_button_border_radius', function( value ) {
	    value.bind( function( to ) {
	        $( ".section-banner .slide-inner .banner-content .button-container a" ).css( "borderRadius", to + 'px' );
	    } );
	} );

	// Banner button border radius
	wp.customize( 'banner_button_border_radius', function( value ) {
	    value.bind( function( to ) {
	        $( ".section-banner .banner-content .button-container a" ).css( "borderRadius", to + 'px' );
	    } );
	} );

	// footer social icon size
	wp.customize( 'social_icons_size', function( value ) {
	    value.bind( function( to ) {
	        $( ".site-footer .social-profile ul li a" ).css( "font-size", to + 'px' );
	    } );
	} );

	// Main slider / image height
	wp.customize( 'main_slider_height', function( value ) {
	    value.bind( function( to ) {
	        $( ".banner-img" ).css( "height", to + 'px' );
	    } );
	} );

	// Highlight Posts height
	wp.customize( 'highlight_posts_height', function( value ) {
	    value.bind( function( to ) {
	        $( ".highlight-posts-content-wrap .highlight-posts-image" ).css( "height", to + 'px' );
	    } );
	} );

} )( jQuery );