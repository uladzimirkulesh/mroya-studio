import { MagicCursor } from './class-magic-cursor';
import { bindMagicCursorEvents } from './magic-cursor-events';

/*-------------------------------------------------------
Init Magic Cursor
-------------------------------------------------------*/
export function initMagicCursor() {
	const el = document.querySelector( '.magic-cursor' );
	if ( ! el ) return;

	let mm = gsap.matchMedia();

	mm.add( '(min-width: 960px)', () => {
		const cursor = new MagicCursor( el );
		bindMagicCursorEvents( cursor );
	} );
}
