// src/js/animations/magic-cursor/class-magic-cursor.js
var MagicCursor = class {
  constructor(rootEl) {
    this.root = rootEl;
    gsap.set(this.root, { xPercent: -50, yPercent: -50 });
    this.xTo = gsap.quickTo(this.root, "x", { duration: 0.25, ease: "power2.out" });
    this.yTo = gsap.quickTo(this.root, "y", { duration: 0.25, ease: "power2.out" });
    this.enableMouseTracking();
  }
  /*-------------------------------------------------------
  Core movement
  -------------------------------------------------------*/
  enableMouseTracking() {
    window.addEventListener("mousemove", (e) => {
      this.xTo(e.clientX);
      this.yTo(e.clientY);
      setTimeout(() => {
        this.root.classList.add("is-active");
      }, 250);
    });
  }
  /*-------------------------------------------------------
  Inner labels
  -------------------------------------------------------*/
  setLabel(content = null) {
    this.root.querySelector(".magic-cursor__label")?.remove();
    if (!content) return;
    const inner = document.createElement("div");
    inner.className = "magic-cursor__label";
    inner.textContent = content;
    this.root.appendChild(inner);
  }
  /*-------------------------------------------------------
  Animations (pulse, expand, etc.)
  -------------------------------------------------------*/
  expand(from = 0.1, to = 0.8) {
    gsap.fromTo(this.root, {
      scale: from
    }, {
      scale: to,
      autoAlpha: 0.07,
      duration: 0.25,
      ease: gsap.defaults().ease
    });
  }
  pulse(from = 0.8, to = 0.6) {
    gsap.fromTo(this.root, {
      scale: from
    }, {
      scale: to,
      duration: 0.05,
      yoyo: true,
      repeat: 1,
      ease: "none"
    });
  }
  hide(from = 0.1, to = 0.3) {
    gsap.fromTo(this.root, {
      scale: from
    }, {
      scale: to,
      autoAlpha: 0,
      duration: 0.25,
      ease: gsap.defaults().ease
    });
  }
  thumbnail(from = 0.1, to = 1) {
    this.setLabel(wp.i18n.__("[ Open ]", "mroya"));
    gsap.fromTo(this.root, {
      scale: from
    }, {
      scale: to,
      backgroundColor: "rgba(0, 0, 0, 0.3)",
      duration: 0.25,
      ease: gsap.defaults().ease
    });
  }
  reset() {
    this.setLabel();
    gsap.to(this.root, {
      scale: 0.1,
      backgroundColor: "var(--wp--custom--color--cursor)",
      autoAlpha: 1,
      duration: 0.25,
      ease: gsap.defaults().ease
    });
  }
  /*-------------------------------------------------------
  State helpers
  -------------------------------------------------------*/
  addState(state) {
    this.root.classList.add(`state--${state}`);
  }
  removeState(state) {
    this.root.classList.remove(`state--${state}`);
  }
};

// src/js/animations/magic-cursor/index.js
function initMagicCursor() {
  const el = document.querySelector(".magic-cursor");
  if (!el) return;
  let mm = gsap.matchMedia();
  mm.add("(min-width: 960px)", () => {
    const cursor = new MagicCursor(el);
    bindMagicCursorEvents(cursor);
  });
  function bindMagicCursorEvents(cursor) {
    document.querySelectorAll("a:not(.comment-reply-link):not(.post-page-numbers)").forEach((el2) => {
      if (el2.closest(".wp-block-post-featured-image, .wp-block-button:not(.is-style-more-3):not(.is-style-more-4), .wp-block-query-pagination")) return;
      el2.addEventListener("mouseenter", () => cursor.expand());
      el2.addEventListener("mouseleave", () => cursor.reset());
      el2.addEventListener("click", () => cursor.pulse());
    });
    document.querySelectorAll("button, input, textarea, .wp-block-button:not(.is-style-more-3):not(.is-style-more-4) a, .comment-reply-link, .post-page-numbers, .wp-block-query-pagination a").forEach((el2) => {
      el2.addEventListener("mouseenter", () => cursor.hide());
      el2.addEventListener("mouseleave", () => cursor.reset());
    });
    document.querySelectorAll(".wp-block-post-featured-image a").forEach((el2) => {
      el2.addEventListener("mouseenter", () => {
        cursor.thumbnail();
        cursor.addState("blured");
      });
      el2.addEventListener("mouseleave", () => {
        cursor.reset();
        cursor.removeState("blured");
      });
      el2.addEventListener("click", () => cursor.pulse(1, 0.8));
    });
  }
}

// src/js/animations/error-404.js
function error404Animations() {
  if (!document.body.classList.contains("error404")) return;
  const target = document.querySelector(".error404 main > .wp-block-group");
  target && gsap.effects.fadeInUp(target, {
    delay: 0.3
  });
}

// src/js/animations/gallery.js
function initGallery() {
  const galleries = gsap.utils.toArray(".gallery");
  galleries.forEach((gallery) => {
    const elements = gallery.querySelectorAll(".wp-block-image img");
    elements.forEach((el, i) => {
      gsap.to(
        el,
        {
          autoAlpha: 1,
          duration: gsap.defaults().duration,
          delay: i * gsap.defaults().stagger,
          ease: "power2.inOut",
          scrollTrigger: {
            trigger: el,
            start: ScrollTrigger.defaults().start,
            toggleActions: "play none none none"
          }
        }
      );
    });
  });
}

// src/js/animations/page-archive.js
function pageArchive() {
  if (!document.body.classList.contains("blog") && !document.body.classList.contains("archive") && !document.body.classList.contains("search")) return;
  const pageHeader = document.querySelector(".page-header");
  const pageHeaderTitle = pageHeader?.querySelector(".page-header__title");
  const pageHeaderDescription = pageHeader?.querySelector(".page-header__description");
  const pageHeaderSearch = pageHeader?.querySelector(".page-header__search");
  const posts = gsap.utils.toArray(".wp-block-post-template.is-layout-grid .wp-block-post");
  const pagination = document.querySelector(".wp-block-query-pagination");
  const noResults = document.querySelector(".wp-block-query-no-results");
  const tl = gsap.timeline({ delay: 0.3 });
  pageHeaderTitle && tl.set(pageHeaderTitle, { autoAlpha: 1 });
  pageHeaderDescription && tl.set(pageHeaderDescription, { autoAlpha: 1 });
  tl.addLabel("start");
  pageHeaderTitle && tl.splitTextLinesMask(pageHeaderTitle);
  pageHeaderDescription && tl.splitTextLinesMask(pageHeaderDescription, "<0.42");
  pageHeaderSearch && tl.fadeInUp(pageHeaderSearch, "<0.42");
  if (posts?.length) {
    tl.call(() => {
      const event = new CustomEvent("archivePostsAnimation", {
        cancelable: true,
        detail: {
          posts
        }
      });
      const prevented = !document.dispatchEvent(event);
      if (!prevented) {
        animatePosts(posts);
      }
    }, [], "start+=0.24");
  }
  pagination && tl.call(animatePagination, [pagination]);
  noResults && tl.fadeInUp(noResults);
  function animatePosts(posts2) {
    gsap.effects.fadeInUpBatch(posts2);
  }
  function animatePagination(pagination2) {
    ScrollTrigger.create({
      trigger: pagination2,
      start: ScrollTrigger.defaults().start,
      toggleActions: "play none none none",
      onEnter: () => {
        gsap.effects.fadeInUp(pagination2, { yPercent: 80 });
      },
      once: true
    });
  }
}

// src/js/animations/page-singular.js
function pageSingular() {
  if (!document.body.classList.contains("wp-singular")) return;
  const entry = document.querySelector("#entry");
  const entryElements = entry?.querySelectorAll(".wp-block-post-title, .entry-meta, .wp-block-post-featured-image, .entry-content, .entry-footer");
  const featuredImg = entry?.querySelector(".wp-block-post-featured-image");
  const img = featuredImg?.querySelector("img");
  const comments = document.querySelector(".wp-block-comments");
  img && gsap.effects.parallax(img, {
    parent: featuredImg
  });
  const tl = gsap.timeline({ delay: 0.3 });
  entryElements?.length && tl.fadeInUp(entryElements);
  comments && tl.call(animateComments, [comments], "<0.7");
  function animateComments(comments2) {
    ScrollTrigger.create({
      trigger: comments2,
      start: ScrollTrigger.defaults().start,
      toggleActions: "play none none none",
      onEnter: () => {
        gsap.effects.fadeInUp(comments2);
      },
      once: true
    });
  }
}

// src/js/animations/project-description.js
function projectDescription() {
  const descriptions = gsap.utils.toArray(".project-description");
  descriptions.forEach((description) => {
    const title = description.querySelector(".project-description__header .wp-block-heading");
    const content = description.querySelectorAll(".project-description__content > *");
    const tl = gsap.timeline({
      scrollTrigger: {
        trigger: description,
        start: ScrollTrigger.defaults().start,
        toggleActions: "play none none none",
        once: true
      }
    });
    title && tl.fadeInUp(title);
    content && tl.fadeInUp(content, "<0.12");
  });
}

// src/js/animations/section-about.js
function sectionAbout() {
  const sections = gsap.utils.toArray(".section--about");
  sections.forEach((section) => {
    const sectionTitle = section.querySelector(".section__header .wp-block-heading");
    const sectionText = section.querySelector(".section__text");
    const skillsBlock = section.querySelector(".block--skills");
    sectionText && gsap.effects.splitTextWords(sectionText);
    const tl = gsap.timeline({
      scrollTrigger: {
        trigger: sectionTitle,
        start: ScrollTrigger.defaults().start,
        toggleActions: "play none none none",
        once: true
      }
    });
    sectionTitle && tl.fadeInUp(sectionTitle);
    sectionText && tl.fadeInUp(sectionText, "<0.12");
    skillsBlock && tl.call(animateSkillsBlock, [skillsBlock], "<0.12");
  });
  function animateSkillsBlock(skillsBlock) {
    const skillsTitle = skillsBlock.querySelector(".wp-block-heading");
    const skillsItems = skillsBlock.querySelectorAll(".skills-list__item");
    const skillsSeparators = skillsBlock.querySelectorAll(".skills-list__separator");
    const tl = gsap.timeline({
      scrollTrigger: {
        trigger: skillsBlock,
        start: ScrollTrigger.defaults().start,
        toggleActions: "play none none none",
        once: true
      }
    });
    skillsTitle && tl.fromTo(skillsTitle, {
      x: "-3rem",
      autoAlpha: 0
    }, {
      x: 0,
      autoAlpha: 1,
      duration: gsap.defaults().duration
    });
    skillsItems?.length && tl.fromTo(skillsItems, {
      x: "-3rem",
      autoAlpha: 0
    }, {
      x: 0,
      autoAlpha: 1,
      duration: gsap.defaults().duration,
      stagger: gsap.defaults().stagger
    }, "<0.12");
    skillsSeparators?.length && tl.fromTo(skillsSeparators, {
      width: 0
    }, {
      width: "100%",
      duration: gsap.defaults().duration,
      stagger: gsap.defaults().stagger
    }, ">-0.7");
  }
}

// src/js/animations/section-awards.js
function sectionAwards() {
  const sections = gsap.utils.toArray(".section--awards");
  sections.forEach((section) => {
    const sectionTitle = section.querySelector(".section__header .wp-block-heading");
    const awardsBlock = section.querySelector(".block--awards");
    const awards = awardsBlock?.children;
    const sectionText = section.querySelector(".section__footer .section__text");
    const tl = gsap.timeline({
      scrollTrigger: {
        trigger: sectionTitle,
        start: ScrollTrigger.defaults().start,
        toggleActions: "play none none none",
        once: true
      }
    });
    sectionTitle && tl.fadeInUp(sectionTitle);
    awards?.length && tl.fadeInUp(awards, "<0.12");
    sectionText && tl.fadeInUp(sectionText, ">-0.58");
  });
}

// src/js/animations/section-clients.js
function sectionClients() {
  const sections = gsap.utils.toArray(".section--clients");
  sections.forEach((section, sectionIndex) => {
    const heading = section.querySelector(".section__header .wp-block-heading");
    const clientsList1 = section.querySelector(".clients-list--1");
    const clientsList2 = section.querySelector(".clients-list--2");
    if (heading) {
      ScrollTrigger.create({
        trigger: heading,
        start: ScrollTrigger.defaults().start,
        toggleActions: "play none none none",
        onEnter: () => {
          gsap.effects.fadeInUp(heading, {
            yPercent: 100
          });
        },
        once: true
      });
    }
    const initClientListAnimations = () => {
      if (!clientsList1 || !clientsList2) return;
      const clients1 = clientsList1.querySelectorAll(".clients-list__item");
      const clients2 = [...clientsList2.querySelectorAll(".clients-list__item")].reverse();
      if (!clients1.length || !clients2.length) return;
      const contentWidth = section.querySelector(".section__content").getBoundingClientRect().width;
      const list1Width = clientsList1.getBoundingClientRect().width;
      const list2Width = clientsList2.getBoundingClientRect().width;
      ScrollTrigger.getById(`clientsList1Scroll-${sectionIndex}`)?.kill();
      ScrollTrigger.getById(`clientsList2Scroll-${sectionIndex}`)?.kill();
      gsap.fromTo(
        clients1,
        {
          xPercent: 25,
          autoAlpha: 0
        },
        {
          xPercent: 0,
          autoAlpha: 1,
          duration: 0.7,
          stagger: 0.12,
          scrollTrigger: {
            trigger: clientsList1,
            start: "top 85%",
            toggleActions: "play none none none"
          },
          onStart: () => {
            gsap.fromTo(
              clientsList1,
              {
                x: 0
              },
              {
                x: -(list1Width - contentWidth),
                ease: "none",
                scrollTrigger: {
                  id: `clientsList1Scroll-${sectionIndex}`,
                  trigger: clientsList1,
                  start: "top bottom",
                  end: "bottom top",
                  scrub: true
                }
              }
            );
          }
        }
      );
      gsap.fromTo(
        clients2,
        {
          xPercent: -25,
          autoAlpha: 0
        },
        {
          xPercent: 0,
          autoAlpha: 1,
          duration: 0.7,
          stagger: 0.12,
          scrollTrigger: {
            trigger: clientsList2,
            start: "top 85%",
            toggleActions: "play none none none"
          },
          onStart: () => {
            gsap.fromTo(
              clientsList2,
              {
                x: 0
              },
              {
                x: list2Width - contentWidth,
                ease: "none",
                scrollTrigger: {
                  id: `clientsList2Scroll-${sectionIndex}`,
                  trigger: clientsList2,
                  start: "top bottom",
                  end: "bottom top",
                  scrub: true
                }
              }
            );
          }
        }
      );
    };
    initClientListAnimations();
    window.addEventListener("resize", () => {
      initClientListAnimations();
      ScrollTrigger.refresh();
    });
  });
}

// src/js/animations/section-contact.js
function sectionContact() {
  const sections = gsap.utils.toArray(".section--contact");
  sections.forEach((section) => {
    const textPrimary = section.querySelector(".text--primary");
    const textSecondary = section.querySelector(".text--secondary");
    const button = section.querySelector(".wp-block-buttons");
    const tl = gsap.timeline({
      scrollTrigger: {
        trigger: textPrimary,
        start: ScrollTrigger.defaults().start,
        toggleActions: "play none none none",
        once: true
      }
    });
    textPrimary && tl.set(textPrimary, { autoAlpha: 1 });
    textSecondary && tl.set(textSecondary, { autoAlpha: 1 });
    textPrimary && tl.splitTextLinesMask(textPrimary);
    textSecondary && tl.splitTextLinesMask(textSecondary, "<0.42");
    button && tl.fadeInUp(button, "<0.12");
  });
}

// src/js/animations/section-cover.js
function sectionCover() {
  const sections = gsap.utils.toArray(".section--cover");
  sections.forEach((section) => {
    const mediaBlock = section.querySelector(".wp-block-cover");
    const media = mediaBlock?.querySelectorAll("img, video");
    mediaBlock && gsap.effects.fadeIn(mediaBlock, { delay: 0.3 });
    media && gsap.effects.parallax(media, {
      scaleTo: 1,
      parent: mediaBlock
    });
  });
}

// src/js/animations/section-hero.js
function sectionHero() {
  const sections = gsap.utils.toArray(".section--hero");
  sections.forEach((section) => {
    const blockTitle = section.querySelector(".section__block .wp-block-heading");
    const blockText = section.querySelector(".section__block p");
    const footerElements = section.querySelectorAll(".section__footer .wp-block-buttons, .section__footer p");
    const tl = gsap.timeline({ delay: 0.3 });
    blockTitle && tl.set(blockTitle, { autoAlpha: 1 });
    blockText && tl.set(blockText, { autoAlpha: 1 });
    blockTitle && tl.splitTextLinesMask(blockTitle);
    blockText && tl.splitTextLinesMask(blockText, "<0.42");
    footerElements && tl.fadeInUp(footerElements, { stagger: 0 }, "<0.12");
  });
}

// src/js/animations/section-hero-2.js
function sectionHero2() {
  const sections = gsap.utils.toArray(".section--hero-2");
  sections.forEach((section) => {
    const blockTitle = section.querySelector(".section__block .wp-block-heading");
    const blockText = section.querySelector(".section__block p");
    const footerElements = section.querySelectorAll(".section__footer .wp-block-buttons, .section__footer p");
    const tl = gsap.timeline({ delay: 0.3 });
    blockTitle && tl.set(blockTitle, { autoAlpha: 1 });
    blockText && tl.set(blockText, { autoAlpha: 1 });
    blockTitle && tl.splitTextLinesMask(blockTitle);
    blockText && tl.splitTextLinesMask(blockText, "<0.42");
    footerElements && tl.fadeInUp(footerElements, { stagger: 0 }, "<0.12");
  });
}

// src/js/animations/section-keep-reading.js
function sectionKeepReading() {
  const sections = gsap.utils.toArray(".section--keep-reading");
  sections.forEach((section) => {
    const sectionHeader = section.querySelector(".section__header");
    const posts = section.querySelectorAll(".wp-block-query .wp-block-post");
    const tl = gsap.timeline({ delay: 0.3 });
    sectionHeader && tl.call(animateHeader, [sectionHeader]);
    posts?.length && tl.call(animatePosts, [posts], "<0.12");
  });
  function animateHeader(sectionHeader) {
    ScrollTrigger.create({
      trigger: sectionHeader,
      start: ScrollTrigger.defaults().start,
      toggleActions: "play none none none",
      onEnter: () => {
        gsap.effects.fadeInUp(sectionHeader);
      },
      once: true
    });
  }
  function animatePosts(posts) {
    ScrollTrigger.create({
      trigger: posts,
      start: ScrollTrigger.defaults().start,
      toggleActions: "play none none none",
      onEnter: () => {
        gsap.effects.fadeInUp(posts);
      },
      once: true
    });
  }
}

// src/js/animations/section-mission.js
function sectionMission() {
  const sections = gsap.utils.toArray(".section--mission");
  sections.forEach((section) => {
    const heading = section.querySelector(".section__header .has-span-indent");
    const headingIndent = heading?.querySelector(".indent");
    const headingText = heading?.querySelector(".text");
    const list1 = section.querySelector(".section__content .list--first");
    const list2 = section.querySelector(".section__content .list--second");
    headingText && gsap.effects.splitTextChars(headingText);
    const tl = gsap.timeline({
      scrollTrigger: {
        trigger: heading,
        start: ScrollTrigger.defaults().start,
        toggleActions: "play none none none",
        once: true
      }
    });
    heading && tl.fadeInUp(heading);
    headingIndent && tl.scrambleText(headingIndent, "<");
    list1 && tl.call(animateList1, [list1], "<");
    list2 && tl.call(animateList2, [list2], "<0.12");
  });
  function animateList1(list1) {
    gsap.effects.fadeInUp(list1, { clearProps: false });
    gsap.effects.parallax(list1, {
      yFrom: 0,
      yTo: -20,
      scaleFrom: 1,
      scaleTo: 1
    });
  }
  function animateList2(list2) {
    gsap.effects.fadeInUp(list2, { clearProps: false });
    gsap.effects.parallax(list2, {
      yFrom: 0,
      yTo: 20,
      scaleFrom: 1,
      scaleTo: 1
    });
  }
}

// src/js/animations/section-services.js
function sectionServices() {
  const sections = gsap.utils.toArray(".section--services");
  sections.forEach((section) => {
    const headerTexts = section.querySelectorAll(".section__header > *");
    const servicesList = section.querySelector(".services-list");
    const tl = gsap.timeline({
      scrollTrigger: {
        trigger: section,
        start: ScrollTrigger.defaults().start,
        toggleActions: "play none none none",
        once: true
      }
    });
    headerTexts?.length && tl.fadeInUp(headerTexts, { stagger: 0 });
    servicesList && tl.call(animateServicesList, [servicesList], "<");
  });
  function animateServicesList(servicesList) {
    const items = servicesList.querySelectorAll(".services-list__item");
    const tl = gsap.timeline();
    items?.length && items.forEach((item) => {
      tl.call(animateItem, [item], "<0.48");
    });
  }
  function animateItem(item) {
    const separator = item.querySelector(".item__separator");
    const itemNumber = item.querySelector(".item__number");
    const itemTitle = item.querySelector(".item__title");
    const itemDescription = item.querySelector(".item__description");
    const itemTags = item.querySelector(".item__tags");
    const tl = gsap.timeline({
      scrollTrigger: {
        trigger: item,
        start: ScrollTrigger.defaults().start,
        toggleActions: "play none none none",
        once: true
      }
    });
    itemTitle && tl.set(itemTitle, { autoAlpha: 1 });
    itemDescription && tl.set(itemDescription, { autoAlpha: 1 });
    separator && tl.fromTo(separator, {
      width: 0
    }, {
      width: "100%",
      duration: gsap.defaults().duration,
      stagger: gsap.defaults().stagger
    });
    itemNumber && tl.fadeInUp(itemNumber, "<0.12");
    itemTitle && tl.splitTextLinesMask(itemTitle, "<");
    itemDescription && tl.splitTextLinesMask(itemDescription, "<0.24");
    itemTags && tl.fadeInUp(itemTags, ">-0.72");
  }
}

// src/js/animations/section-recent-projects.js
function sectionRecentProjects() {
  const sections = gsap.utils.toArray(".section--recent-projects");
  sections.forEach((section) => {
    const headerTexts = section.querySelectorAll(".section__header .wp-block-heading, .section__header p");
    const posts = section.querySelectorAll(".wp-block-post-template.is-layout-grid .wp-block-post");
    const noResults = section.querySelector(".wp-block-query-no-results");
    const button = section.querySelector(".section__footer .wp-block-buttons");
    const tl = gsap.timeline({
      scrollTrigger: {
        trigger: headerTexts,
        start: ScrollTrigger.defaults().start,
        toggleActions: "play none none none",
        once: true
      }
    });
    headerTexts?.length && tl.fadeInUp(headerTexts, { stagger: 0 });
    posts?.length && tl.call(animatePosts, [posts], "<0.12");
    noResults && tl.fadeInUp(noResults, "<0.12");
    button && tl.fadeInUp(button, "<0.42");
  });
  function animatePosts(posts) {
    gsap.effects.fadeInUpBatch(posts);
  }
}

// src/js/animations/section-related-projects.js
function sectionRelatedProjects() {
  const sections = gsap.utils.toArray(".section--related-projects");
  sections.forEach((section) => {
    const sectionHeader = section?.querySelector(".section__header");
    const projects = section?.querySelectorAll(".wp-block-query .wp-block-post");
    const tl = gsap.timeline({
      scrollTrigger: {
        trigger: section,
        start: ScrollTrigger.defaults().start,
        toggleActions: "play none none none",
        once: true
      }
    });
    sectionHeader && tl.fadeInUp(sectionHeader);
    projects?.length && tl.fadeInUp(projects, "<0.12");
  });
}

// src/js/animations/section-team.js
function sectionTeam() {
  const sections = gsap.utils.toArray(".section--team");
  sections.forEach((section) => {
    const sectionHeader = section.querySelector(".section__header");
    const teamBlock = section.querySelector(".team__members");
    const members = teamBlock?.children;
    const tl = gsap.timeline({ delay: 0.3 });
    sectionHeader && tl.call(animateHeader, [sectionHeader]);
    if (teamBlock && members.length) {
      tl.call(animateMembers, [teamBlock, members], "<0.12");
    }
  });
  function animateHeader(sectionHeader) {
    ScrollTrigger.create({
      trigger: sectionHeader,
      start: ScrollTrigger.defaults().start,
      toggleActions: "play none none none",
      onEnter: () => {
        gsap.effects.fadeInUp(sectionHeader);
      },
      once: true
    });
  }
  function animateMembers(teamBlock, members) {
    ScrollTrigger.create({
      trigger: teamBlock,
      start: ScrollTrigger.defaults().start,
      toggleActions: "play none none none",
      onEnter: () => {
        gsap.effects.fadeInUp(members);
      },
      once: true
    });
  }
}

// src/js/animations/section-testimonials.js
function sectionTestimonials() {
  const sections = gsap.utils.toArray(".section--testimonials");
  sections.forEach((section) => {
    const sectionTitle = section.querySelector(".section__header .wp-block-heading");
    const testimonials = section.querySelector(".testimonials");
    const testimonialsItems = testimonials?.children;
    const tl = gsap.timeline({
      scrollTrigger: {
        trigger: sectionTitle,
        start: ScrollTrigger.defaults().start,
        toggleActions: "play none none none",
        once: true
      }
    });
    sectionTitle && tl.fadeInUp(sectionTitle);
    testimonialsItems?.length && tl.fadeInUp(testimonialsItems, "<0.12");
  });
}

// src/js/animations.js
window.addEventListener("load", () => {
  initMagicCursor();
  error404Animations();
  initGallery();
  pageArchive();
  pageSingular();
  projectDescription();
  sectionAbout();
  sectionAwards();
  sectionClients();
  sectionContact();
  sectionCover();
  sectionHero();
  sectionHero2();
  sectionKeepReading();
  sectionMission();
  sectionServices();
  sectionRecentProjects();
  sectionRelatedProjects();
  sectionTeam();
  sectionTestimonials();
});
