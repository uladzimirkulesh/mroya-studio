/*-------------------------------------------------------
Section "Mission"
-------------------------------------------------------*/
export function sectionMission() {
	const sections = gsap.utils.toArray( '.section--mission' );

	sections.forEach( ( section ) => {
		const heading = section.querySelector( '.section__header .has-span-indent' );
		const headingIndent = heading?.querySelector( '.indent' );
		const headingText = heading?.querySelector( '.text' );
		const list1 = section.querySelector( '.section__content .list--first' );
		const list2 = section.querySelector( '.section__content .list--second' );

		// Let's animate
		headingText && gsap.effects.splitTextChars( headingText );

		const tl = gsap.timeline( {
			scrollTrigger: {
				trigger: heading,
				start: ScrollTrigger.defaults().start,
				toggleActions: 'play none none none',
				once: true,
			}
		} );

		// Heading animations
		heading && tl.fadeInUp( heading );
		headingIndent && tl.scrambleText( headingIndent, '<' )

		// Lists animations
		list1 && tl.call( animateList1, [ list1 ], '<' );
		list2 && tl.call( animateList2, [ list2 ], '<0.12' );
	} );

	// Animate list 1 block
	function animateList1( list1 ) {
		gsap.effects.fadeInUp( list1, { clearProps: false } );

		// Let's animate
		gsap.effects.parallax( list1, {
			yFrom: 0,
			yTo: -20,
			scaleFrom: 1,
			scaleTo: 1,
		} );
	}

	// Animate list 2 block
	function animateList2( list2 ) {
		gsap.effects.fadeInUp( list2, { clearProps: false } );

		// Let's animate
		gsap.effects.parallax( list2, {
			yFrom: 0,
			yTo: 20,
			scaleFrom: 1,
			scaleTo: 1,
		} );
	}
}
