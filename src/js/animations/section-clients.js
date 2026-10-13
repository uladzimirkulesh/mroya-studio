/*-------------------------------------------------------
Section "Clients"
-------------------------------------------------------*/
export function sectionClients() {
	const sections = gsap.utils.toArray( '.section--clients' );

	sections.forEach( ( section, sectionIndex ) => {
		const heading = section.querySelector( '.section__header .wp-block-heading' );
		const clientsList1 = section.querySelector( '.clients-list--1' );
		const clientsList2 = section.querySelector( '.clients-list--2' );

		// Heading animations
		if ( heading ) {
			ScrollTrigger.create( {
				trigger: heading,
				start: ScrollTrigger.defaults().start,
				toggleActions: 'play none none none',
				onEnter: () => {
					gsap.effects.fadeInUp( heading, {
						yPercent: 100,
					} );
				},
				once: true,
			} );
		}

		// Client list animations
		const initClientListAnimations = () => {
			if ( ! clientsList1 || ! clientsList2 ) return;

			const clients1 = clientsList1.querySelectorAll( '.clients-list__item' );
			const clients2 = [ ...clientsList2.querySelectorAll( '.clients-list__item' ) ].reverse();

			if ( ! clients1.length || ! clients2.length ) return;

			const contentWidth = section.querySelector( '.section__content' ).getBoundingClientRect().width;
			const list1Width = clientsList1.getBoundingClientRect().width;
			const list2Width = clientsList2.getBoundingClientRect().width;

			ScrollTrigger.getById( `clientsList1Scroll-${sectionIndex}` )?.kill();
			ScrollTrigger.getById( `clientsList2Scroll-${sectionIndex}` )?.kill();

			gsap.fromTo(
				clients1,
				{
					xPercent: 25,
					autoAlpha: 0,
				},
				{
					xPercent: 0,
					autoAlpha: 1,
					duration: 0.7,
					stagger: 0.12,
					scrollTrigger: {
						trigger: clientsList1,
						start: 'top 85%',
						toggleActions: 'play none none none',
					},
					onStart: () => {
						gsap.fromTo(
							clientsList1,
							{
								x: 0,
							},
							{
								x: -( list1Width - contentWidth ),
								ease: 'none',
								scrollTrigger: {
									id: `clientsList1Scroll-${ sectionIndex }`,
									trigger: clientsList1,
									start: 'top bottom',
									end: 'bottom top',
									scrub: true,
								},
							}
						);
					},
				}
			);

			gsap.fromTo(
				clients2,
				{
					xPercent: -25,
					autoAlpha: 0,
				},
				{
					xPercent: 0,
					autoAlpha: 1,
					duration: 0.7,
					stagger: 0.12,
					scrollTrigger: {
						trigger: clientsList2,
						start: 'top 85%',
						toggleActions: 'play none none none',
					},
					onStart: () => {
						gsap.fromTo(
							clientsList2,
							{
								x: 0,
							},
							{
								x: list2Width - contentWidth,
								ease: 'none',
								scrollTrigger: {
									id: `clientsList2Scroll-${ sectionIndex }`,
									trigger: clientsList2,
									start: 'top bottom',
									end: 'bottom top',
									scrub: true,
								},
							}
						);
					},
				}
			);
		};
		initClientListAnimations();

		// Resize
		window.addEventListener( 'resize', () => {
			initClientListAnimations();
			ScrollTrigger.refresh();
		} );
	} );
}
