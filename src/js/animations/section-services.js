/*-------------------------------------------------------
Section "Services"
-------------------------------------------------------*/
export function sectionServices() {
	const sections = gsap.utils.toArray( '.section--services' );

	sections.forEach( ( section ) => {
		const headerTexts = section.querySelectorAll( '.section__header > *' );
		const servicesList = section.querySelector( '.services-list' );

		// Let's animate
		const tl = gsap.timeline( {
			scrollTrigger: {
				trigger: section,
				start: ScrollTrigger.defaults().start,
				toggleActions: 'play none none none',
				once: true,
			}
		} );

		// Text animations
		headerTexts?.length && tl.fadeInUp( headerTexts, { stagger: 0 } );

		// Services list animations
		servicesList && tl.call( animateServicesList, [ servicesList ], '<' );
	} );

	// Animate services list
	function animateServicesList( servicesList ) {
		const items = servicesList.querySelectorAll( '.services-list__item' );

		// Let's animate
		const tl = gsap.timeline();

		// Items animations
		items?.length && items.forEach( ( item ) => {
			tl.call( animateItem, [ item ], '<0.48' );
		} );
	}

	// Animate item
	function animateItem( item ) {
		const separator = item.querySelector( '.item__separator' );
		const itemNumber = item.querySelector( '.item__number' );
		const itemTitle = item.querySelector( '.item__title' );
		const itemDescription = item.querySelector( '.item__description' );
		const itemTags = item.querySelector( '.item__tags' );

		// Let's animate
		const tl = gsap.timeline( {
			scrollTrigger: {
				trigger: item,
				start: ScrollTrigger.defaults().start,
				toggleActions: 'play none none none',
				once: true,
			}
		} );

		itemTitle && tl.set( itemTitle, { autoAlpha: 1 } );
		itemDescription && tl.set( itemDescription, { autoAlpha: 1 } );

		// Separators animations
		separator && tl.fromTo( separator, {
			width: 0,
		}, {
			width: '100%',
			duration: gsap.defaults().duration,
			stagger: gsap.defaults().stagger,
		} );

		// Number animations
		itemNumber && tl.fadeInUp( itemNumber, '<0.12' );

		// Title animations
		itemTitle && tl.splitTextLinesMask( itemTitle, '<' );

		// Description animations
		itemDescription && tl.splitTextLinesMask( itemDescription, '<0.24' );

		// Tags animations
		itemTags && tl.fadeInUp( itemTags, '>-0.72' );
	}
}
