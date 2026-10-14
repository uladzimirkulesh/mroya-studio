import * as Animate from './animations/index';

/*-------------------------------------------------------
Fire on window load
-------------------------------------------------------*/
window.addEventListener( 'load', () => {
	// Init Animations
	Animate.initMagicCursor();
	Animate.error404Animations();
	Animate.initGallery();
	Animate.pageArchive();
	Animate.pageSingular();
	Animate.projectDescription();
	Animate.sectionAbout();
	Animate.sectionAwards();
	Animate.sectionClients();
	Animate.sectionContact();
	Animate.sectionCover();
	Animate.sectionHero();
	Animate.sectionHero2();
	Animate.sectionKeepReading();
	Animate.sectionMission();
	Animate.sectionServices();
	Animate.sectionRecentProjects();
	Animate.sectionRelatedProjects();
	Animate.sectionTeam();
	Animate.sectionTestimonials();
} );
