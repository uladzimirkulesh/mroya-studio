import * as Animate from './animations/index';

/*-------------------------------------------------------
Fire on window load
-------------------------------------------------------*/
window.addEventListener( 'load', () => {
	// Init Animations
	Animate.initMagicCursor();
	Animate.headerAnimations();
	Animate.footerAnimations();
	Animate.error404Animations();
	Animate.initGallery();
	Animate.pageArchive();
	Animate.pageContact();
	Animate.pageSingular();
	Animate.projectDescription();
	Animate.scrambleLinks();
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
