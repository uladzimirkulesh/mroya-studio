/*-------------------------------------------------------
Gallery animations
-------------------------------------------------------*/
export function initGallery() {
	const galleries = gsap.utils.toArray( '.gallery' );

	galleries.forEach( ( gallery ) => {
		const elements = gallery.querySelectorAll( '.wp-block-image img' );

		elements.forEach( ( el, i ) => {
			gsap.to(
				el,
				{
					autoAlpha: 1,
					duration: gsap.defaults().duration,
					delay: i * gsap.defaults().stagger,
					ease: 'power2.inOut',
					scrollTrigger: {
						trigger: el,
						start: ScrollTrigger.defaults().start,
						toggleActions: 'play none none none',
					},
				}
			);
		} );
	} );
}
