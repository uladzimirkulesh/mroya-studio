/*-------------------------------------------------------
Page "Contact"
-------------------------------------------------------*/
export function pageContact() {
	const pages = gsap.utils.toArray( '.page--contact' );

	pages.forEach( ( page ) => {
		const pageHeader = page.querySelector( '.page__header' );
		const pageHeaderTitle = pageHeader?.querySelector( '.wp-block-heading' );
		const columns = page.querySelectorAll( '.column--left, .column--right' );

		// Let's animate
		const tl = gsap.timeline( { delay: 0.3 } );

		pageHeaderTitle && tl.set( pageHeaderTitle, { autoAlpha: 1 } );

		// Page header animations
		pageHeaderTitle && tl.splitTextLinesMask( pageHeaderTitle );

		// Columns animations
		columns?.length && tl.fadeInUp( columns, '<0.42' );
	} );
}
