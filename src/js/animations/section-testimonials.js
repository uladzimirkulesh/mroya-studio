/*-------------------------------------------------------
Section "Testimonials"
-------------------------------------------------------*/
export function sectionTestimonials() {
	const sections = gsap.utils.toArray( '.section--testimonials' );

	sections.forEach( ( section ) => {
		const sectionTitle = section.querySelector( '.section__header .wp-block-heading' );
		const testimonials = section.querySelector( '.testimonials' );
		const testimonialsItems = testimonials?.children;

		// Let's animate
		const tl = gsap.timeline( {
			scrollTrigger: {
				trigger: sectionTitle,
				start: ScrollTrigger.defaults().start,
				toggleActions: 'play none none none',
				once: true,
			}
		} );

		// Section title animations
		sectionTitle && tl.fadeInUp( sectionTitle );

		// Testimonials items animations
		testimonialsItems?.length && tl.fadeInUp( testimonialsItems, '<0.12' );
	} );
}
