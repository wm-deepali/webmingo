$(function () {
  if (!$("header").is(".header-fixed")) {
    $(window).on("scroll", function () {
      $(this).scrollTop() > 100
        ? $("header").addClass("header-fixed")
        : $("header").removeClass("header-fixed");
    });

    $(window).scrollTop() > 100
      ? $("header").addClass("header-fixed")
      : $("header").removeClass("header-fixed");
  }

  //

  const formControls = $(".form-control");

  formControls.on("focus input change blur", throttle(handleForm));

  formControls.each(function () {
    handleForm.call(this);
  });

  //

  niceSelect($);

  $("select").niceSelect();

  // Data-animate function call

  handleAnimations();

  //

  adjustWhatsAppUrls();

  $(window).resize(function () {
    adjustWhatsAppUrls();
  });

  //

  startCountAnimation();

  $(window).scroll(function () {
    startCountAnimation();
  });

  //

  $(".tab-nav li").on("click", function () {
    var tab = $(this).data("tab");
    var $target = $('.tab-nav-content .tabs[data-tab="' + tab + '"]');
    $(this).addClass("active").siblings().removeClass("active");
    if ($target.length) {
      $target.addClass("active").siblings(".tabs").removeClass("active");
    } else {
      $(".tab-nav-content .tabs").removeClass("active");
    }
  });

  $(document).on("click", "[data-scrollTo]", function () {
    headerheight =
      parseInt($(":root").css("--headerpadding")) +
      parseInt($(":root").css("--headerfixed"));

    var section = $(this).attr("data-scrollTo");

    if (section) {
      $("html, body")
        .stop()

        .animate(
          {
            scrollTop: $(section).offset().top - headerheight,
          },

          1000,
        );
    }
  });

  $(document).on("click", "[data-model]", function () {
    var model = $(this).attr("data-model");
    var type = $(this).attr("data-type");
    openModel(model, type);
  });

  $(document).on("click", ".overlay, .close", function () {
    closeModel();
  });

  function closeModel() {
    $(".overlay, .model, .ham-pop").removeClass("is-open");
    $("body, html").removeClass("overflow-hidden");

    setTimeout(function () {
      $(".model, .ham-pop").removeClass("is-booking is-enquire");
    }, 500);
  }


  $(function () {
  var stack = ["main"];

  function getPop() {
    return $(".ham-pop");
  }

  function getView(id) {
    return getPop().find('.ham-view[data-ham-view="' + id + '"]');
  }

  function renderHam() {
    var $pop = getPop();
    var current = stack[stack.length - 1];
    var $back = $pop.find("[data-ham-back]");

    $pop.find(".ham-view").each(function () {
      var $v = $(this);
      var id = $v.attr("data-ham-view");

      $v.removeClass("is-active is-behind").attr("aria-hidden", "true");

      if (id === current) {
        $v.addClass("is-active").attr("aria-hidden", "false");
      } else if (stack.indexOf(id) > -1) {
        $v.addClass("is-behind");
      }
    });

    if (stack.length > 1) {
      var parentTitle = getView(stack[stack.length - 2]).attr("data-ham-title") || "Menu";
      $back.find("span").text("Back to " + parentTitle);
      $back.addClass("is-visible");
    } else {
      $back.removeClass("is-visible");
    }
  }

  $(document).on("click", ".ham-pop [data-ham-open]", function (e) {
    e.preventDefault();
    var id = $(this).attr("data-ham-open");
    var $target = getView(id);
    if (!$target.length) return;
    stack.push(id);
    $target.scrollTop(0);
    renderHam();
  });

  $(document).on("click", ".ham-pop [data-ham-back]", function (e) {
    e.preventDefault();
    if (stack.length > 1) {
      stack.pop();
      renderHam();
    }
  });

  var $popEl = getPop();
  if ($popEl.length) {
    new MutationObserver(function () {
      if (!$popEl.hasClass("is-open") && stack.length > 1) {
        setTimeout(function () {
          stack = ["main"];
          renderHam();
        }, 500);
      }
    }).observe($popEl[0], { attributes: true, attributeFilter: ["class"] });
  }

  renderHam();
});

  // ============ SCROLL TO SECTION START ================>>>>

  function scrollToHash(hash) {
    const headerHeight = parseInt($(":root").css("--headerheight")) || 0;
    const $target = $(hash);

    if (!$target.length) return;

    $("html, body")
      .stop()
      .animate(
        {
          scrollTop: $target.offset().top - headerHeight,
        },
        600,
      );
  }

  // On page load
  $(document).ready(function () {
    if (window.location.hash) {
      scrollToHash(window.location.hash);
    }
  });

  // On hash change
  $(window).on("hashchange", function () {
    scrollToHash(window.location.hash);

    if (typeof closeModel === "function") {
      closeModel();
    }
  });

  // For all internal anchor links
  $(document).on("click", 'a[href^="#"]', function (e) {
    const hash = $(this).attr("href");

    if (hash.length > 1 && $(hash).length) {
      e.preventDefault();

      history.pushState(null, null, hash);
      scrollToHash(hash);

      if (typeof closeModel === "function") {
        closeModel();
      }
    }
  });

  // ============ SCROLL TO SECTION END ================>>>>

  // ===========================================================================================================
  $(".hasDropdown").click(function (e) {
    e.stopPropagation(); // Prevents event bubbling

    var slideMenu = $(this).find(".dropdown-menu-ham");
    var plusIcon = $(this).find(".plu-ico");

    // Close other open menus and remove active class
    $(".dropdown-menu-ham").not(slideMenu).slideUp();
    $(".hasDropdown").not(this).removeClass("active");
    $(".plu-ico").not(plusIcon).removeClass("active");

    // Toggle active class for the clicked menu and icon
    $(this).toggleClass("active");
    plusIcon.toggleClass("active");

    slideMenu.stop().slideToggle();
  });
  // ===========================================================================================================

  $(document).ready(function () {
    $(".accordion-wrapper").each(function () {
      const $wrapper = $(this);

      // reset state within this wrapper only
      $wrapper.find(".accordion-item").removeClass("active");
      $wrapper.find(".accordion-content").hide();
      $wrapper.find(".accordion-icon").text("+");

      // always open the first item of THIS wrapper
      const $firstItem = $wrapper.find(".accordion-item").first();
      $firstItem.addClass("active");
      $firstItem.find(".accordion-content").show();
      $firstItem.find(".accordion-icon").text("−");

      // click handler scoped to this wrapper
      $wrapper.on("click", ".accordion-header", function () {
        const $item = $(this).closest(".accordion-item");
        const $content = $(this).siblings(".accordion-content");
        const isActive = $item.hasClass("active");

        // close all items within this wrapper only
        $wrapper.find(".accordion-item").removeClass("active");
        $wrapper.find(".accordion-content").slideUp(300);
        $wrapper.find(".accordion-icon").text("+");

        if (!isActive) {
          $item.addClass("active");
          $content.slideDown(300);
          $item.find(".accordion-icon").text("−");
        }
      });
    });

    // "Expand all" toggle
    $(".expand-toggle input[type='checkbox']").on("change", function () {
      const $wrapper = $(this)
        .closest(".Itinerary, .listing-secI")
        .find(".accordion-wrapper");

      if ($(this).is(":checked")) {
        $wrapper.find(".accordion-item").addClass("active");
        $wrapper.find(".accordion-content").slideDown(300);
        $wrapper.find(".accordion-icon").text("−");
      } else {
        $wrapper.find(".accordion-item").removeClass("active");
        $wrapper.find(".accordion-content").slideUp(300);
        $wrapper.find(".accordion-icon").text("+");

        // keep first item open again
        const $firstItem = $wrapper.find(".accordion-item").first();
        $firstItem.addClass("active");
        $firstItem.find(".accordion-content").show();
        $firstItem.find(".accordion-icon").text("−");
      }
    });
  });

  $("[data-video]").on("click", function (e) {
    e.preventDefault();

    e.stopPropagation();

    $(".video-pop").addClass("is-open");

    var src = $(this).attr("data-video");

    if (src.includes("youtube.com/embed/")) {
      var videoId = src.split("embed/")[1].split("?")[0];

      src += "&autoplay=1&loop=1&playlist=" + videoId;
    }

    $("#iframe1").attr("src", src);

    $("body,html").addClass("overflow-hidden");
  });

  new Swiper(".logoSlider", {
    loop: true,
    spaceBetween: 32,
    slidesPerView: 3,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
    },
    speed: 4000,
    allowTouchMove: false,

    breakpoints: {
      480: { slidesPerView: 3, spaceBetween: 16 },
      640: { slidesPerView: 3, spaceBetween: 20 },
      768: { slidesPerView: 5, spaceBetween: 20 },
      991: { slidesPerView: 6, spaceBetween: 20 },
      1280: { slidesPerView: 8, spaceBetween: 20 },
    },
  });

  const moreBlogsSwiper = new Swiper(".moreBlogsSwiper", {
    slidesPerView: 3,
    spaceBetween: 28,
    speed: 700,
    loop: false,

    navigation: {
      prevEl: ".moreBlogsSwiper-prev",
      nextEl: ".moreBlogsSwiper-next",
    },

    breakpoints: {
      0: {
        slidesPerView: 1.2,
        spaceBetween: 20,
      },

      600: {
        slidesPerView: 2,
        spaceBetween: 24,
      },

      992: {
        slidesPerView: 3,
        spaceBetween: 28,
      },
    },
  });

  new Swiper(".behind-slider", {
    slidesPerView: 2,
    spaceBetween: 20,

    loop: true,

    speed: 700,

    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    },

    pagination: {
      el: ".behind-slider .swiper-pagination",
      type: "progressbar",
    },

    navigation: {
      nextEl: ".behind-slider .behind-next",
      prevEl: ".behind-slider .behind-prev",
    },

    breakpoints: {
      0: {
        slidesPerView: 1,
        spaceBetween: 15,
      },

      768: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
    },
  });

  // Row 1: LEFT
  new Swiper(".logoSlider--ltr", {
    loop: true,
    spaceBetween: 32,
    slidesPerView: 3,

    autoplay: {
      delay: 0,
      disableOnInteraction: false,
    },

    speed: 4000,
    allowTouchMove: false,

    breakpoints: {
      480: { slidesPerView: 3, spaceBetween: 16 },
      640: { slidesPerView: 3, spaceBetween: 20 },
      768: { slidesPerView: 5, spaceBetween: 20 },
      991: { slidesPerView: 6, spaceBetween: 20 },
      1280: { slidesPerView: 8, spaceBetween: 20 },
    },
  });

  // Row 2: RIGHT
  new Swiper(".logoSlider--rtl", {
    loop: true,
    spaceBetween: 32,
    slidesPerView: 3,

    autoplay: {
      delay: 0,
      disableOnInteraction: false,
      reverseDirection: true,
    },

    speed: 4000,
    allowTouchMove: false,

    breakpoints: {
      480: { slidesPerView: 3, spaceBetween: 16 },
      640: { slidesPerView: 3, spaceBetween: 20 },
      768: { slidesPerView: 5, spaceBetween: 20 },
      991: { slidesPerView: 6, spaceBetween: 20 },
      1280: { slidesPerView: 8, spaceBetween: 20 },
    },
  });

  // ========================================
  // Banner Sliders (only runs if this slider exists on the page)
  // ========================================
  if (document.querySelector(".portfolio-swiper")) {
   const portfolioSwiper = new Swiper(".portfolio-swiper", {
  speed: 2000,

  navigation: {
    nextEl: ".btn-next",
    prevEl: ".btn-prev",
  },

  breakpoints: {
    0: {
      slidesPerView: 1.2,
      spaceBetween: 10

    },
    768: {
      slidesPerView: 2,
      spaceBetween: 20

    },
    992: {
      slidesPerView: 3,
      spaceBetween: 20
    },
  },
});
    function updateCount() {
      const total = portfolioSwiper.slides.filter(
        (s) => s.style.display !== "none",
      ).length;
      const current = String(portfolioSwiper.realIndex + 1).padStart(2, "0");
      const currentEl = document.querySelector(".count-current");
      const totalEl = document.querySelector(".count-total");
      if (currentEl) currentEl.textContent = current;
      if (totalEl) totalEl.textContent = String(total).padStart(2, "0");
    }

    $(".tab-nav li").on("click", function () {
      var tab = $(this).data("tab");
      $(this).addClass("active").siblings().removeClass("active");

      portfolioSwiper.slides.forEach((slide) => {
        const categories = slide.dataset.category.split(" ");
        const match = tab === "all" || categories.includes(tab);
        slide.style.display = match ? "" : "none";
      });

      portfolioSwiper.update();
      portfolioSwiper.slideTo(0);
      updateCount();
    });

    updateCount();
  }



  new Swiper(".twoSlider", {
    navigation: {
      nextEl: ".twoSlider-next",
      prevEl: ".twoSlider-prev",
    },
    speed: 1000,
    breakpoints: {
      0: {
        slidesPerView: 1.1,
        spaceBetween: 10,
      },
      640: {
        slidesPerView: 1.2,
        spaceBetween: 10,
      },
      1280: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
    },
  });


  new Swiper(".fourSlider", {
  navigation: {
    nextEl: ".fourSlider-next",
    prevEl: ".fourSlider-prev",
  },
  speed: 1000,
  breakpoints: {
    0: {
      slidesPerView: 1.1,
      spaceBetween: 10,
    },
    540: {
      slidesPerView: 1.8,
      spaceBetween: 14,
    },
    768: {
      slidesPerView: 2.1,
      spaceBetween: 14,
    },
    991: {
      slidesPerView: 2.5,
      spaceBetween: 16,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 16,
    },
    1280: {
      slidesPerView: 4,
      spaceBetween: 18,
    },
  },
});

  new Swiper(".centerSlider", {
    centeredSlides: true,
    centeredSlidesBounds: true,
    slidesOffsetAfter: 120,
    loop: true,
    navigation: {
      nextEl: ".centerSlider-next",
      prevEl: ".centerSlider-prev",
    },

    breakpoints: {
      0: {
        slidesPerView: 1.2,
        spaceBetween: 10,
        speed: 1000,
      },
      520: {
        slidesPerView: 1.2,
        spaceBetween: 10,
        speed: 1000,
      },
      769: {
        slidesPerView: 2.3,
        spaceBetween: 20,
        speed: 1000,
      },
      991: {
        slidesPerView: 2.3,
        spaceBetween: 60,
        speed: 1000,
      },
      1100: {
        slidesPerView: 2.3,
        spaceBetween: 60,
        speed: 1000,
      },
    },
  });

  //---------- Continue Btn Veriofy Btn Toggle ----------//
  //document.querySelector(".Continue")?.addEventListener("click", () => {
  //  document.querySelector(".login-wrap").style.display = "none";
  //  document.querySelector(".otp-field").style.display = "flex";
  //});

  document.querySelector(".bk_btn")?.addEventListener("click", () => {
    document.querySelector(".login-wrap").style.display = "flex";
    document.querySelector(".otp-field").style.display = "none";
  });

  $(".otpInput input")
    .on("input", function () {
      this.value = this.value.replace(/\D/g, "");
      $(this).next("input").focus();
    })
    .on("keydown", function (e) {
      if (e.key === "Backspace" && !this.value) $(this).prev("input").focus();
    });

  $(".otpInput").on("paste", function (e) {
    let p = e.originalEvent.clipboardData.getData("text").replace(/\D/g, "");
    $(this)
      .find("input")
      .val(function (i) {
        return p[i] || "";
      });
    $(this).find("input").eq(Math.min(p.length, 3)).focus();
  });
  //---------- Continue Btn Veriofy Btn Toggle ----------//
});

$(function () {
  Fancybox.bind("[data-fancybox]", {
    autoStart: false,
    contentClick: "iterateZoom",
    Images: {
      Panzoom: {
        maxScale: 3,
      },
    },
    keyboard: true,
    Thumbs: true,
    Toolbar: {
      display: {
        left: ["infobar"],
        middle: ["toggle1to1", "rotateCCW", "rotateCW"],
        right: ["close"],
        bottom: [],
      },
    },
  });
});

document.addEventListener("DOMContentLoaded", function () {
  document
    .querySelectorAll(".file-upload input[type='file']")
    .forEach(function (input) {
      const wrapper = input.closest(".file-upload");
      const label = wrapper.querySelector(".label");
      const defaultText = label.textContent;

      input.addEventListener("change", function () {
        if (this.files.length > 0) {
          label.textContent = this.files[0].name;
          wrapper.classList.add("has-file");
        } else {
          label.textContent = defaultText;
          wrapper.classList.remove("has-file");
        }
      });
    });
});

document.addEventListener("DOMContentLoaded", function () {
  const closeBtn = document.querySelector(".notification .close");
  const notification = document.querySelector(".notification");

  if (!closeBtn || !notification) return;

  closeBtn.addEventListener("click", function () {
    notification.classList.add("hide");
  });
});

// ============================================================
// HOME PAGE — WORD ROTATOR (banner)
// ============================================================
(function () {
  const words = document.querySelectorAll(".home-banner .word-rotator-word");
  if (!words.length) return;

  const reduceMotion = window.matchMedia(
    "(prefers-reduced-motion: reduce)",
  ).matches;
  if (reduceMotion) return;

  let currentIndex = 0;
  const ROTATE_INTERVAL = 2000;
  const TRANSITION_DURATION = 650;

  setInterval(function () {
    const current = words[currentIndex];
    const nextIndex = (currentIndex + 1) % words.length;
    const next = words[nextIndex];

    // outgoing word swipes fully up
    current.classList.remove("is-active");
    current.classList.add("is-prev");

    // incoming word swipes up from below into view
    next.classList.add("is-active");

    // after the swipe finishes, silently reset the outgoing word
    setTimeout(function () {
      current.classList.add("no-transition");
      current.classList.remove("is-prev");
      void current.offsetWidth; // force reflow
      current.classList.remove("no-transition");
    }, TRANSITION_DURATION);

    currentIndex = nextIndex;
  }, ROTATE_INTERVAL);
})();

// ============================================================
// HOME PAGE — INDUSTRIES / SERVICES PINNED SWIPER (secD)
// ============================================================
document.addEventListener("DOMContentLoaded", () => {
  if (typeof gsap === "undefined" || typeof ScrollTrigger === "undefined")
    return;

  const pinWrap = document.querySelector(".secD-pin");
  if (!pinWrap) return;

  gsap.registerPlugin(ScrollTrigger);

  const links = document.querySelectorAll(".secD-links li");
  const fill = document.querySelector(".secD-progress .progress-line span");
  const current = document.querySelector(".progress-current");
  const pad = (n) => String(n + 1).padStart(2, "0");

  let kenBurns = null;

  const animateSlide = (slideEl) => {
    const img = slideEl.querySelector("img");
    const num = slideEl.querySelector(".card-index");
    const targets = slideEl.querySelectorAll(".visual-panel > *");
    const ctaTargets = slideEl.querySelectorAll(".visual-cta-inner > *");

    if (kenBurns) kenBurns.kill();

    // Panel slides (image cards)
    if (targets.length) {
      gsap.set(targets, { y: 20, opacity: 0 });
      gsap.to(targets, {
        y: 0,
        opacity: 1,
        duration: 0.6,
        ease: "power2.out",
        stagger: 0.07,
        delay: 0.15,
      });
    }

    if (num) {
      gsap.set(num, { opacity: 0, x: 12 });
      gsap.to(num, {
        opacity: 1,
        x: 0,
        duration: 0.6,
        ease: "power2.out",
        delay: 0.05,
      });
    }

    if (img) {
      kenBurns = gsap.fromTo(
        img,
        { scale: 1.16 },
        { scale: 1.04, duration: 3.5, ease: "none" },
      );
    }

    // Blank/CTA slide (last card)
    if (ctaTargets.length) {
      gsap.set(ctaTargets, { y: 20, opacity: 0 });
      gsap.to(ctaTargets, {
        y: 0,
        opacity: 1,
        duration: 0.6,
        ease: "power2.out",
        stagger: 0.08,
        delay: 0.15,
      });
    }
  };
const swiper = new Swiper(".secD-swiper", {
 
  speed: 750,
  allowTouchMove: true,

  breakpoints: {
       0: {
      slidesPerView: 1.1,
      spaceBetween: 10,
       direction: "horizontal",
    },
    540: {
      slidesPerView: 1.1,
      spaceBetween: 10,
       direction: "horizontal",
    },
      768: {
      slidesPerView: 1.5,
      spaceBetween: 20,
          direction: "horizontal",
    },
     991: {
      slidesPerView: 2,
      spaceBetween: 20,
          direction: "horizontal",
    },
     1024: {
      slidesPerView: 1,
      spaceBetween: 20,
      direction: "vertical",
    },
    1280: {
      slidesPerView: 1,
      spaceBetween: 20,
      direction: "vertical",
    },
  },

  on: {
    init(sw) {
      animateSlide(sw.slides[sw.activeIndex]);
    },
    slideChangeTransitionEnd(sw) {
      animateSlide(sw.slides[sw.activeIndex]);
    },
  },
});

  const total = swiper.slides.length; // includes the blank CTA slide

  const setActive = (i) => {
    const isCta = i >= links.length; // true only on the last (blank) slide

    links.forEach((li, n) => li.classList.toggle("active", n === i));

    if (fill) {
      fill.style.width = isCta ? "100%" : ((i + 1) / links.length) * 100 + "%";
    }
    if (current) {
      current.textContent = isCta ? pad(links.length - 1) : pad(i);
    }
  };

  // ============================================================
  // GSAP PIN + LINKS: ONLY ABOVE 991px
  // ============================================================
  const mm = gsap.matchMedia();

  mm.add("(min-width: 992px)", () => {
    ScrollTrigger.create({
      trigger: pinWrap,
      start: "top top",
      end: () => "+=" + window.innerHeight * (total - 1) * 0.85,
      pin: true,
      scrub: 0.6,
      anticipatePin: 1,
      onUpdate(self) {
        const idx = Math.min(
          total - 1,
          Math.round(self.progress * (total - 1)),
        );
        if (idx !== swiper.activeIndex) {
          swiper.slideTo(idx);
          setActive(idx);
        }
      },
    });

    const handlers = [];

    links.forEach((li) => {
      const onClick = () => {
        const i = Number(li.dataset.index);
        const trigger = ScrollTrigger.getAll().find(
          (t) => t.trigger === pinWrap,
        );
        if (!trigger) return;
        const targetProgress = i / (total - 1);
        const targetScroll =
          trigger.start + (trigger.end - trigger.start) * targetProgress;
        gsap.to(window, {
          scrollTo: targetScroll,
          duration: 0.9,
          ease: "power2.inOut",
        });
      };
      li.addEventListener("click", onClick);
      handlers.push([li, onClick]);
    });

    // cleanup when the screen goes down to 991px or less
    return () => {
      handlers.forEach(([li, fn]) => li.removeEventListener("click", fn));
    };
  });
});
// ============================================================
// HOME PAGE — MAGNETIC ROW PREVIEW (secF)
// ============================================================
document.addEventListener("DOMContentLoaded", function () {
  const rows = document.querySelectorAll(".secF-row");

  if (!rows.length) return;

  rows.forEach(function (row) {
    const preview = row.querySelector(".row-preview");

    if (!preview) return;

    row.addEventListener("mousemove", function (e) {
      if (window.innerWidth <= 767) return;

      const rect = row.getBoundingClientRect();

      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;

      const moveX = (x / rect.width - 0.5) * 18;
      const moveY = (y / rect.height - 0.5) * 12;

      preview.style.marginLeft = moveX + "px";
      preview.style.marginTop = moveY + "px";
    });

    row.addEventListener("mouseenter", function () {
      if (window.innerWidth <= 767) return;

      preview.style.opacity = "1";
      preview.style.visibility = "visible";
    });

    row.addEventListener("mouseleave", function () {
      if (window.innerWidth <= 767) return;

      preview.style.marginLeft = "0px";
      preview.style.marginTop = "0px";

      preview.style.opacity = "0";
      preview.style.visibility = "hidden";
    });
  });
});

// ============================================================
// HOME PAGE — RESULTS / BEFORE-AFTER SWIPER (secH / compare)
// ============================================================
document.addEventListener("DOMContentLoaded", function () {
  var resultsSwiper = new Swiper(".resultsSwiper", {
    slidesPerView: 1,
    spaceBetween: 0,
    speed: 550,
    autoHeight: true,

    // Disable touch / drag / swipe
    allowTouchMove: false,

    navigation: {
      nextEl: ".resultsSwiper-next",
      prevEl: ".resultsSwiper-prev",
    },

    on: {
      slideChange: function () {
        var current = String(this.activeIndex + 1).padStart(2, "0");

        var currentEl = document.querySelector(".count-current");

        if (currentEl) {
          currentEl.textContent = current;
        }
      },

      init: function () {
        var total = String(this.slides.length).padStart(2, "0");

        var totalEl = document.querySelector(".count-total");

        if (totalEl) {
          totalEl.textContent = total;
        }
      },
    },
  });

  // before/after drag
  document.querySelectorAll("[data-compare]").forEach(function (compare) {
    var handle = compare.querySelector("[data-handle]");
    if (!handle) return;

    var dragging = false;

    function setPosition(clientX) {
      var rect = compare.getBoundingClientRect();
      var pos = ((clientX - rect.left) / rect.width) * 100;
      pos = Math.max(0, Math.min(100, pos));
      compare.style.setProperty("--pos", pos + "%");
    }

    handle.addEventListener("pointerdown", function (e) {
      dragging = true;
      handle.setPointerCapture(e.pointerId);
    });
    window.addEventListener("pointermove", function (e) {
      if (dragging) setPosition(e.clientX);
    });
    window.addEventListener("pointerup", function () {
      dragging = false;
    });

    compare.addEventListener("click", function (e) {
      setPosition(e.clientX);
    });
    compare.addEventListener(
      "touchmove",
      function (e) {
        if (e.touches[0]) setPosition(e.touches[0].clientX);
      },
      { passive: true },
    );
  });
});

// ============================================================
// HOME PAGE — PROCESS STAGE PINNED SWIPER (secG)
// ============================================================
document.addEventListener("DOMContentLoaded", function () {

  var section  = document.querySelector(".home-secG");
  var swiperEl = document.querySelector(".processSwiper");
  var stage    = document.querySelector(".home-secG .process-stage");

  if (!section || !swiperEl || !stage) return;
  if (typeof Swiper === "undefined" || typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") return;

  gsap.registerPlugin(ScrollTrigger);

  var STEP_VH = 0.6;   // scroll distance per slide (fraction of screen height)

  var numItems     = section.querySelectorAll(".num-item");
  var progressFill = section.querySelector("[data-progress-fill]");
  var total        = swiperEl.querySelectorAll(".swiper-slide").length;
  var lastIndex    = -1;
  var trigger      = null;

  if (total < 2) return;

  function getDistance() {
    return (total - 1) * window.innerHeight * STEP_VH;
  }

  // Header height (auto-detected, fallback 100px)
  function getHeaderH() {
    var h = document.querySelector("header, .header, #header");
    if (h) {
      var pos = window.getComputedStyle(h).position;
      if (pos === "fixed" || pos === "sticky") return h.offsetHeight;
    }
    return 100;
  }

  // Stage centered in the free area below the header
  function getPinTop() {
    var headerH = getHeaderH();
    var free    = window.innerHeight - headerH;
    var gap     = Math.max(0, (free - stage.offsetHeight) / 2);
    return Math.round(headerH + gap);
  }

  // ------------------------------------------------------------
  // SWIPER
  // ------------------------------------------------------------
  var processSwiper = new Swiper(swiperEl, {
    direction: "vertical",
    slidesPerView: 1,
    spaceBetween: 0,
    speed: 650,
    mousewheel: false,
    allowTouchMove: false,
    simulateTouch: false,
    resistanceRatio: 0,
    observer: true,
    observeParents: true
  });

  function setActive(index) {
    if (index === lastIndex) return;
    lastIndex = index;

    numItems.forEach(function (item, i) {
      item.classList.toggle("is-active", i === index);
    });

    if (progressFill) {
      progressFill.style.transform = "translateY(" + index * 100 + "%)";
    }

    if (processSwiper.activeIndex !== index) {
      processSwiper.slideTo(index, 650, false);
    }
  }

  numItems.forEach(function (item) {
    item.addEventListener("click", function () {
      var target = parseInt(item.getAttribute("data-num-target"), 10);

      if (trigger) {
        var y = trigger.start + (target / (total - 1)) * (trigger.end - trigger.start);
        window.scrollTo({ top: y, behavior: "smooth" });
      } else {
        processSwiper.slideTo(target, 650);
      }
    });
  });

  var mm = gsap.matchMedia();

  // ------------------------------------------------------------
  // DESKTOP: pin stage, scroll moves slides
  // ------------------------------------------------------------
  mm.add("(min-width: 1025px) and (min-height: 560px)", function () {

    processSwiper.allowTouchMove = false;

    // original bottom padding of the section (from your Sass)
    section.style.paddingBottom = "";
    var basePad = parseFloat(window.getComputedStyle(section).paddingBottom) || 0;

    function applyPad() {
      section.style.paddingBottom = (basePad + getDistance()) + "px";
    }

    applyPad();

    trigger = ScrollTrigger.create({
      trigger: stage,
      start: function () { return "top " + getPinTop() + "px"; },
      end: function () { return "+=" + getDistance(); },
      pin: stage,
      pinSpacing: false,            // no extra spacer padding
      anticipatePin: 1,
      invalidateOnRefresh: true,
      onRefreshInit: function () {
        section.style.paddingBottom = "";   // measure with original padding
      },
      onRefresh: function () {
        applyPad();                         // then add the scroll distance
      },
      onUpdate: function (self) {
        setActive(Math.round(self.progress * (total - 1)));
      },
      onLeave: function ()     { setActive(total - 1); },
      onLeaveBack: function () { setActive(0); }
    });

    setActive(0);

    return function () {
      if (trigger) {
        trigger.kill();
        trigger = null;
      }
      section.style.paddingBottom = "";
    };
  });

  // ------------------------------------------------------------
  // TABLET / MOBILE / SHORT SCREENS: no pin
  // ------------------------------------------------------------
  mm.add("(max-width: 1024px), (max-height: 559px)", function () {

    processSwiper.allowTouchMove = true;
    processSwiper.params.simulateTouch = true;

    function onChange() {
      lastIndex = -1;
      setActive(processSwiper.activeIndex);
    }

    processSwiper.on("slideChange", onChange);
    lastIndex = -1;
    setActive(0);

    return function () {
      processSwiper.off("slideChange", onChange);
      processSwiper.allowTouchMove = false;
    };
  });

  // Refresh after everything (fonts, images) has loaded
  window.addEventListener("load", function () {
    ScrollTrigger.refresh();
  });

  if (document.fonts && document.fonts.ready) {
    document.fonts.ready.then(function () {
      ScrollTrigger.refresh();
    });
  }

});

// ============================================================
// HOME PAGE — TESTIMONIALS SLIDER
// ============================================================
document.addEventListener("DOMContentLoaded", function () {
  new Swiper(".TestimonialSlider", {
    
    loop: true,
    speed: 600,
    navigation: {
      nextEl: ".TestimonialSlider-next",
      prevEl: ".TestimonialSlider-prev",
    },
    breakpoints: {
      0: { slidesPerView: 1.2,spaceBetween: 15, },
      768: { slidesPerView: 2,spaceBetween: 20, },
      1024: { slidesPerView: 3,spaceBetween: 24, },
    },
  });
});


const secABottomSwiper = new Swiper('.secA-bottom-swiper', {
  direction: 'vertical',
  slidesPerView: 1,
  loop: true,
  speed: 800,
  allowTouchMove: false,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false
  }
});

// ============================================================
// E-COMMERCE PANELS SWIPER (secC)
// ============================================================
document.addEventListener("DOMContentLoaded", function () {
  const section = document.querySelector(".secC");
  if (!section || typeof Swiper === "undefined") return;

  const swiperEl = section.querySelector(".secC-swiper");
  if (!swiperEl) return;

  // destroy any previous instance before re-creating
  if (swiperEl.swiper) swiperEl.swiper.destroy(true, true);

  new Swiper(swiperEl, {
     breakpoints: {
      0: { slidesPerView: 1.1,spaceBetween: 10  },
      768: { slidesPerView: 2 , spaceBetween: 20 },
      991: { slidesPerView: 2 , spaceBetween: 20 },
      1024: { slidesPerView: 3 ,spaceBetween: 20},
    },
    
    speed: 2000,
    grabCursor: true,
    watchOverflow: true,
    navigation: {
      prevEl: section.querySelector(".secC-prev"),
      nextEl: section.querySelector(".secC-next"),
    },
    keyboard: { enabled: true },
  });
});



  new Swiper(".thirdSilder", {
    navigation: {
      nextEl: ".thirdSilder-next",
      prevEl: ".thirdSilder-prev",
    },
    loop: true,
    speed: 1000,
    breakpoints: {
      0: {
        slidesPerView: 1.2,
        spaceBetween: 20,
      },
      640: {
        slidesPerView: 1.2,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 2.2,
        spaceBetween: 20,
      },
      991: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      1280: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
    },
  });


  new Swiper(".logosSwiper", {
    navigation: {
      nextEl: ".logosSwiper-next",
      prevEl: ".logosSwiper-prev",
    },
    loop: false,
    speed: 1000,
    breakpoints: {
      0: {
        slidesPerView:2,
        spaceBetween: 20,
      },
      640: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      991: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      1280: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
    },
  });