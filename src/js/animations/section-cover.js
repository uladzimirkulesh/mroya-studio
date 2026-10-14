/*-------------------------------------------------------
Section "Cover"
-------------------------------------------------------*/
export function sectionCover() {
	const sections = gsap.utils.toArray( '.section--cover' );

	sections.forEach( ( section ) => {
		const mediaBlock = section.querySelector( '.wp-block-cover' );
		const media = mediaBlock?.querySelectorAll( 'img, video' );

		// Let's animate
		mediaBlock && gsap.effects.fadeIn( mediaBlock, { delay: 0.3 } );
		media && gsap.effects.parallax( media, {
			scaleTo: 1,
			parent: mediaBlock,
		} );
	} );
}
