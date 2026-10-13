import * as Animate from './animations/index';

/*-------------------------------------------------------
Fire on window load
-------------------------------------------------------*/
window.addEventListener( 'load', () => {
	// Init Animations
	Animate.initMagicCursor();
	Animate.error404Animations();
	Animate.pageArchive();
	Animate.pageSingular();
	Animate.sectionAbout();
	Animate.sectionAwards();
	Animate.sectionClients();
	Animate.sectionContact();
	Animate.sectionHero();
	Animate.sectionHero2();
	Animate.sectionKeepReading();
	Animate.sectionMission();
	Animate.sectionServices();
	Animate.sectionTeam();
	Animate.sectionTestimonials();
} );
