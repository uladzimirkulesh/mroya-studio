/*-------------------------------------------------------
Singular page animations
-------------------------------------------------------*/
export function pageSingular() {
	if ( ! document.body.classList.contains( 'wp-singular' ) ) return;

	const entry = document.querySelector( '#entry' );
	const entryElements = entry?.querySelectorAll( '.wp-block-post-title, .entry-meta, .wp-block-post-featured-image, .entry-content, .entry-footer' );
	const featuredImg = entry?.querySelector( '.wp-block-post-featured-image' );
	const img = featuredImg?.querySelector( 'img' );
	const comments = document.querySelector( '.wp-block-comments' );

	// Featured image animations
	img && gsap.effects.parallax( img, {
		parent: featuredImg,
	} );

	// Let's animate
	const tl = gsap.timeline( { delay: 0.3 } );

	// Entry elements animations
	entryElements?.length && tl.fadeInUp( entryElements );

	// Comments animations
	comments && tl.call( animateComments, [ comments ], '<0.7' );
}

// Animate posts
function animateComments( comments ) {
	ScrollTrigger.create( {
		trigger: comments,
		start: ScrollTrigger.defaults().start,
		toggleActions: 'play none none none',
		onEnter: () => {
			gsap.effects.fadeInUp( comments );
		},
		once: true,
	} );
}
