/*-------------------------------------------------------
Project description
-------------------------------------------------------*/
export function projectDescription() {
	const descriptions = gsap.utils.toArray( '.project-description' );

	descriptions.forEach( ( description ) => {
		const title = description.querySelector( '.project-description__header .wp-block-heading' );
		const content = description.querySelectorAll( '.project-description__content > *' );

		// Let's animate
		const tl = gsap.timeline( {
			scrollTrigger: {
				trigger: description,
				start: ScrollTrigger.defaults().start,
				toggleActions: 'play none none none',
				once: true,
			}
		} );

		// Elements animations
		title && tl.fadeInUp( title );
		content && tl.fadeInUp( content, '<0.12' );
	} );
}
