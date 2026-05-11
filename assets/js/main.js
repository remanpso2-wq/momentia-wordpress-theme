document.addEventListener("DOMContentLoaded", () => {
  const loader = document.querySelector(".site-loader");

  if (loader) {
    const hideLoader = () => {
      loader.classList.add("is-hidden");
    };

    window.addEventListener("load", () => {
      setTimeout(hideLoader, 1700);
    });

    setTimeout(hideLoader, 3200);
  }

  document.body.classList.add("is-loaded");

  const targets = document.querySelectorAll(
    [
      ".front-concept",
      ".front-link-card",
      ".front-news-card",
      ".front-contact__box",
      ".about-section",
      ".value-card",
      ".activity-category-card",
      ".activity-card",
      ".activity-news-link__box",
      ".contact-card",
      ".contact-info__box",
      ".flow-item",
      ".contact-notice__box",
      ".news-item",
      ".single-news__content",
      ".member-coming__box",
      ".member-plan-card"
    ].join(",")
  );

  targets.forEach((target) => {
    target.classList.add("js-reveal");
  });

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("is-visible");
          observer.unobserve(entry.target);
        }
      });
    },
    {
      threshold: 0.12,
      rootMargin: "0px 0px -80px 0px"
    }
  );

  targets.forEach((target) => observer.observe(target));

  const menuToggle = document.querySelector(".menu-toggle");
  const siteNav = document.querySelector("#site-nav");

  if (menuToggle && siteNav) {
    menuToggle.addEventListener("click", () => {
      const isOpen = menuToggle.classList.toggle("is-open");

      siteNav.classList.toggle("is-open", isOpen);
      document.body.classList.toggle("is-menu-open", isOpen);
      menuToggle.setAttribute("aria-expanded", String(isOpen));
      menuToggle.setAttribute(
        "aria-label",
        isOpen ? "メニューを閉じる" : "メニューを開く"
      );
    });
  }
});