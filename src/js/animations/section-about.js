/*-------------------------------------------------------
Section "About"
-------------------------------------------------------*/
export function sectionAbout() {
	const sections = gsap.utils.toArray( '.section--about' );

	sections.forEach( ( section ) => {
		const sectionTitle = section.querySelector( '.section__header .wp-block-heading' );
		const sectionText = section.querySelector( '.section__text' );
		const skillsBlock = section.querySelector( '.block--skills' );

		// Let's animate
		sectionText && gsap.effects.splitTextWords( sectionText );

		const tl = gsap.timeline( {
			scrollTrigger: {
				trigger: sectionTitle,
				start: ScrollTrigger.defaults().start,
				toggleActions: 'play none none none',
				once: true,
			}
		} );

		// Text animations
		sectionTitle && tl.fadeInUp( sectionTitle );
		sectionText && tl.fadeInUp( sectionText, '<0.12' );

		// Skills block animations
		skillsBlock && tl.call( animateSkillsBlock, [ skillsBlock ], '<0.12' );
	} );

	// Animate skills block
	function animateSkillsBlock( skillsBlock ) {
		const skillsTitle = skillsBlock.querySelector( '.wp-block-heading' );
		const skillsItems = skillsBlock.querySelectorAll( '.skills-list__item' );
		const skillsSeparators = skillsBlock.querySelectorAll( '.skills-list__separator' );

		// Let's animate
		const tl = gsap.timeline( {
			scrollTrigger: {
				trigger: skillsBlock,
				start: ScrollTrigger.defaults().start,
				toggleActions: 'play none none none',
				once: true,
			}
		} );

		// Title animations
		skillsTitle && tl.fromTo( skillsTitle, {
			x: '-3rem',
			autoAlpha: 0,
		}, {
			x: 0,
			autoAlpha: 1,
			duration: gsap.defaults().duration,
		} );

		// Items animations
		skillsItems?.length && tl.fromTo( skillsItems, {
			x: '-3rem',
			autoAlpha: 0,
		}, {
			x: 0,
			autoAlpha: 1,
			duration: gsap.defaults().duration,
			stagger: gsap.defaults().stagger,
		}, '<0.12' );

		// Separators animations
		skillsSeparators?.length && tl.fromTo( skillsSeparators, {
			width: 0,
		}, {
			width: '100%',
			duration: gsap.defaults().duration,
			stagger: gsap.defaults().stagger,
		}, '>-0.7' );
	}
}
