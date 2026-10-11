/*-------------------------------------------------------
Magic Cursor
-------------------------------------------------------*/
export class MagicCursor {
	constructor( rootEl ) {
		this.root = rootEl;

		gsap.set( this.root, { xPercent: -50, yPercent: -50 } );

		this.xTo = gsap.quickTo( this.root, 'x', { duration: 0.25, ease: 'power2.out' } );
		this.yTo = gsap.quickTo( this.root, 'y', { duration: 0.25, ease: 'power2.out' } );

		this.enableMouseTracking();
	}

	/*-------------------------------------------------------
	Core movement
	-------------------------------------------------------*/
	enableMouseTracking() {
		window.addEventListener( 'mousemove', ( e ) => {
			this.xTo( e.clientX );
			this.yTo( e.clientY );

			setTimeout( () => {
				this.root.classList.add( 'is-active' );
			}, 250 );
		} );
	}

	/*-------------------------------------------------------
	Inner labels
	-------------------------------------------------------*/
	setLabel( content = null ) {
		this.root.querySelector( '.magic-cursor__label' )?.remove();
		if ( ! content ) return;

		const inner = document.createElement( 'div' );
		inner.className = 'magic-cursor__label';
		inner.textContent = content;
		this.root.appendChild( inner );
	}

	/*-------------------------------------------------------
	Animations (pulse, expand, etc.)
	-------------------------------------------------------*/
	expand( from = 0.1, to = 0.8 ) {
		gsap.fromTo( this.root, {
			scale: from,
		}, {
			scale: to,
			autoAlpha: 0.07,
			duration: 0.25,
			ease: gsap.defaults().ease,
		} );
	}

	pulse( from = 0.8, to = 0.6 ) {
		gsap.fromTo( this.root, {
			scale: from,
		}, {
			scale: to,
			duration: 0.05,
			yoyo: true,
			repeat: 1,
			ease: 'none',
		} );
	}

	hide( from = 0.1, to = 0.3 ) {
		gsap.fromTo( this.root, {
			scale: from,
		}, {
			scale: to,
			autoAlpha: 0,
			duration: 0.25,
			ease: gsap.defaults().ease,
		} );
	}

	thumbnail( from = 0.1, to = 1 ) {
		this.setLabel( wp.i18n.__( '[ Open ]', 'mroya' ) );

		gsap.fromTo( this.root, {
			scale: from,
		}, {
			scale: to,
			backgroundColor: 'rgba(0, 0, 0, 0.3)',
			duration: 0.25,
			ease: gsap.defaults().ease,
		} );
	}

	reset() {
		this.setLabel();

		gsap.to( this.root, {
			scale: 0.1,
			backgroundColor: 'var(--wp--custom--color--cursor)',
			autoAlpha: 1,
			duration: 0.25,
			ease: gsap.defaults().ease,
		} );
	}

	/*-------------------------------------------------------
	State helpers
	-------------------------------------------------------*/
	addState( state ) {
		this.root.classList.add( `state--${ state }` );
	}

	removeState( state ) {
		this.root.classList.remove( `state--${ state }` );
	}
}
