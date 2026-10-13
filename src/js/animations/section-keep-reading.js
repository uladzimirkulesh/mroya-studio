/*-------------------------------------------------------
Section "Keep Reading"
-------------------------------------------------------*/
export function sectionKeepReading() {
	const sections = gsap.utils.toArray( '.section--keep-reading' );

	sections.forEach( ( section ) => {
		const sectionHeader = section.querySelector( '.section__header' );
		const posts = section.querySelectorAll( '.wp-block-query .wp-block-post' );

		// Let's animate
		const tl = gsap.timeline( { delay: 0.3 } );

		// Section header animations
		sectionHeader && tl.call( animateHeader, [ sectionHeader ] );

		// Posts animations
		posts?.length && tl.call( animatePosts, [ posts ], '<0.12' );
	} );

	// Animate header
	function animateHeader( sectionHeader ) {
		ScrollTrigger.create( {
			trigger: sectionHeader,
			start: ScrollTrigger.defaults().start,
			toggleActions: 'play none none none',
			onEnter: () => {
				gsap.effects.fadeInUp( sectionHeader );
			},
			once: true,
		} );
	}

	// Animate posts
	function animatePosts( posts ) {
		ScrollTrigger.create( {
			trigger: posts,
			start: ScrollTrigger.defaults().start,
			toggleActions: 'play none none none',
			onEnter: () => {
				gsap.effects.fadeInUp( posts );
			},
			once: true,
		} );
	}
}
