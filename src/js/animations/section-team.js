/*-------------------------------------------------------
Section "Team"
-------------------------------------------------------*/
export function sectionTeam() {
	const sections = gsap.utils.toArray( '.section--team' );

	sections.forEach( ( section ) => {
		const sectionHeader = section.querySelector( '.section__header' );
		const teamBlock = section.querySelector( '.team__members' );
		const members = teamBlock?.children;

		// Let's animate
		const tl = gsap.timeline( { delay: 0.3 } );

		// Section header animations
		sectionHeader && tl.call( animateHeader, [ sectionHeader ] );

		// Team animations
		if ( teamBlock && members.length ) {
			tl.call( animateMembers, [ teamBlock, members ], '<0.12' );
		}
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

	// Animate members
	function animateMembers( teamBlock, members ) {
		ScrollTrigger.create( {
			trigger: teamBlock,
			start: ScrollTrigger.defaults().start,
			toggleActions: 'play none none none',
			onEnter: () => {
				gsap.effects.fadeInUp( members );
			},
			once: true,
		} );
	}
}
