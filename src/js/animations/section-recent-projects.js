/*-------------------------------------------------------
Section "Recent projects"
-------------------------------------------------------*/
export function sectionRecentProjects() {
	const sections = gsap.utils.toArray( '.section--recent-projects' );

	sections.forEach( ( section ) => {
		const headerTexts = section.querySelectorAll( '.section__header .wp-block-heading, .section__header p' );
		const posts = section.querySelectorAll( '.wp-block-post-template.is-layout-grid .wp-block-post' );
		const noResults = section.querySelector( '.wp-block-query-no-results' );
		const button = section.querySelector( '.section__footer .wp-block-buttons' );

		// Let's animate
		const tl = gsap.timeline( {
			scrollTrigger: {
				trigger: headerTexts,
				start: ScrollTrigger.defaults().start,
				toggleActions: 'play none none none',
				once: true,
			}
		} );

		// Text animations
		headerTexts?.length && tl.fadeInUp( headerTexts, { stagger: 0 } );

		// Posts animations
		posts?.length && tl.call( animatePosts, [ posts ], '<0.12' );

		// No results animations
		noResults && tl.fadeInUp( noResults, '<0.12' );

		// Button animations
		button && tl.fadeInUp( button, '<0.42' );
	} );

	// Animate posts
	function animatePosts( posts ) {
		gsap.effects.fadeInUpBatch( posts );
	}
}
