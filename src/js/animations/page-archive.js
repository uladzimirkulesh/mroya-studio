/*-------------------------------------------------------
Archive page animations
-------------------------------------------------------*/
export function pageArchive() {
	if (
		! document.body.classList.contains( 'blog' ) &&
		! document.body.classList.contains( 'archive' ) &&
		! document.body.classList.contains( 'search' )
	) return;

	const pageHeader = document.querySelector( '.page-header' );
	const pageHeaderTitle = pageHeader?.querySelector( '.page-header__title' );
	const pageHeaderDescription = pageHeader?.querySelector( '.page-header__description' );
	const pageHeaderSearch = pageHeader?.querySelector( '.page-header__search' );
	const posts = gsap.utils.toArray( '.wp-block-post-template.is-layout-grid .wp-block-post' );
	const pagination = document.querySelector( '.wp-block-query-pagination' );
	const noResults = document.querySelector( '.wp-block-query-no-results' );

	// Let's animate
	const tl = gsap.timeline( { delay: 0.3 } );

	pageHeaderTitle && tl.set( pageHeaderTitle, { autoAlpha: 1 } );
	pageHeaderDescription && tl.set( pageHeaderDescription, { autoAlpha: 1 } );

	// Label "start"
	tl.addLabel( 'start' );

	// Page header animations
	pageHeaderTitle && tl.splitTextLinesMask( pageHeaderTitle );
	pageHeaderDescription && tl.splitTextLinesMask( pageHeaderDescription, '<0.42' );
	pageHeaderSearch && tl.fadeInUp( pageHeaderSearch, '<0.42' );

	// Posts animations
	if ( posts?.length ) {
		tl.call( () => {
			const event = new CustomEvent( 'archivePostsAnimation', {
				cancelable: true,
				detail: {
					posts,
				},
			} );
			const prevented = ! document.dispatchEvent( event );

			// Default animation
			if ( ! prevented ) {
				animatePosts( posts );
			}
		}, [], 'start+=0.24' );
	}

	// Pagination animations
	pagination && tl.call( animatePagination, [ pagination ] );

	// No results animations
	noResults && tl.fadeInUp( noResults );
}

// Animate posts
function animatePosts( posts ) {
	gsap.effects.fadeInUpBatch( posts );
}

// Animate pagination
function animatePagination( pagination ) {
	ScrollTrigger.create( {
		trigger: pagination,
		start: ScrollTrigger.defaults().start,
		toggleActions: 'play none none none',
		onEnter: () => {
			gsap.effects.fadeInUp( pagination, { yPercent: 80 } );
		},
		once: true,
	} );
}
