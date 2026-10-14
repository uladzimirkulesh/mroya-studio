/*-------------------------------------------------------
Section "Related projects"
-------------------------------------------------------*/
export function sectionRelatedProjects() {
	const sections = gsap.utils.toArray( '.section--related-projects' );

	sections.forEach( ( section ) => {
		const sectionHeader = section?.querySelector( '.section__header' );
		const projects = section?.querySelectorAll( '.wp-block-query .wp-block-post' );

		// Let's animate
		const tl = gsap.timeline( {
			scrollTrigger: {
				trigger: section,
				start: ScrollTrigger.defaults().start,
				toggleActions: 'play none none none',
				once: true,
			}
		} );

		// Section header animations
		sectionHeader && tl.fadeInUp( sectionHeader );

		// Projects animations
		projects?.length && tl.fadeInUp( projects, '<0.12' );
	} );
}
