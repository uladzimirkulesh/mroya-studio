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

// src/js/animations/magic-cursor/magic-cursor-events.js
function bindMagicCursorEvents(cursor) {
  document.querySelectorAll("a:not(.comment-reply-link):not(.post-page-numbers)").forEach((el) => {
    if (el.closest(".wp-block-post-featured-image, .wp-block-button:not(.is-style-more-3):not(.is-style-more-4), .wp-block-query-pagination")) return;
    el.addEventListener("mouseenter", () => cursor.expand());
    el.addEventListener("mouseleave", () => cursor.reset());
    el.addEventListener("click", () => cursor.pulse());
  });
  document.querySelectorAll("button, input, textarea, .wp-block-button:not(.is-style-more-3):not(.is-style-more-4) a, .comment-reply-link, .post-page-numbers, .wp-block-query-pagination a").forEach((el) => {
    el.addEventListener("mouseenter", () => cursor.hide());
    el.addEventListener("mouseleave", () => cursor.reset());
  });
  document.querySelectorAll(".wp-block-post-featured-image a").forEach((el) => {
    el.addEventListener("mouseenter", () => {
      cursor.thumbnail();
      cursor.addState("blured");
    });
    el.addEventListener("mouseleave", () => {
      cursor.reset();
      cursor.removeState("blured");
    });
    el.addEventListener("click", () => cursor.pulse(1, 0.8));
  });
}

// src/js/animations/magic-cursor/index.js
function initMagicCursor() {
  const el = document.querySelector(".magic-cursor");
  if (!el) return;
  let mm = gsap.matchMedia();
  mm.add("(min-width: 960px)", () => {
    const cursor = new MagicCursor(el);
    bindMagicCursorEvents(cursor);
  });
}

// src/js/animations/error-404.js
function error404Animations() {
  if (!document.body.classList.contains("error404")) return;
  const target = document.querySelector(".error404 main > .wp-block-group");
  target && gsap.effects.fadeInUp(target, {
    delay: 0.3
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
}
function animatePosts(posts) {
  gsap.effects.fadeInUpBatch(posts);
}
function animatePagination(pagination) {
  ScrollTrigger.create({
    trigger: pagination,
    start: ScrollTrigger.defaults().start,
    toggleActions: "play none none none",
    onEnter: () => {
      gsap.effects.fadeInUp(pagination, { yPercent: 80 });
    },
    once: true
  });
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
}
function animateComments(comments) {
  ScrollTrigger.create({
    trigger: comments,
    start: ScrollTrigger.defaults().start,
    toggleActions: "play none none none",
    onEnter: () => {
      gsap.effects.fadeInUp(comments);
    },
    once: true
  });
}

// src/js/animations.js
window.addEventListener("load", () => {
  initMagicCursor();
  error404Animations();
  pageArchive();
  pageSingular();
});
