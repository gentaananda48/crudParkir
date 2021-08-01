(function ($) {
  "use strict";

  

  /*----------------------------------
  # header sticky 
  -----------------------------------*/

  var activeSticky = $("#active-sticky"),
    winDow = $(window);
  winDow.on("scroll", function () {
    var scroll = $(window).scrollTop(),
      isSticky = activeSticky;
    if (scroll < 1) {
      isSticky.removeClass("is-sticky");
    } else {
      isSticky.addClass("is-sticky");
    }
  });

  /*----------------------------------
  # Off Canvas Menu
  -----------------------------------*/

  var $offcanvasNav = $("#offcanvasNav a");
  $offcanvasNav.on("click", function () {
    var link = $(this);
    var closestUl = link.closest("ul");
    var activeLinks = closestUl.find(".active");
    var closestLi = link.closest("li");
    var linkStatus = closestLi.hasClass("active");
    var count = 0;

    closestUl.find("ul").slideUp(function () {
      if (++count == closestUl.find("ul").length)
        activeLinks.removeClass("active");
    });

    if (!linkStatus) {
      closestLi.children("ul").slideDown();
      closestLi.addClass("active");
    }
  });

  /*-----------------------------------
  # brand-carousel
  ------------------------------ */

  var brandCarousel = new Swiper(".brand-carousel .swiper-container", {
    loop: true,
    speed: 800,
    autoplay: {
      delay: 2000,
    },
    slidesPerView: 4,
    spaceBetween: 0,
    pagination: false,
    navigation: false,
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 2,
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 2,
      },
      // when window width is >= 640px
      768: {
        slidesPerView: 3,
      },

      // when window width is >= 640px
      992: {
        slidesPerView: 4,
      },
    },
  });

  /*-----------------------------------
  # brand-carousel
  ------------------------------ */

  var testimonialCarousel = new Swiper(
    ".testimonial-carousel .swiper-container",
    {
      loop: false,
      speed: 1000,
      slidesPerView: 1,
      spaceBetween: 0,
      pagination: false,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    }
  );

  /*-----------------------------------
  # window load function
  ------------------------------ */
  var winDow = $(window);
  winDow.on("load", function () {
    /* Isotope Settings */
    var masonryGrid = $("#grid");
    var teamMasonryGrid = $("#tam-grid");

    // masonry grid
    if (masonryGrid.length) {
      masonryGrid.isotope({
        itemSelector: ".grid-item",
        // layout mode options
        layoutMode: "masonry",
      });
    }
    if (teamMasonryGrid.length) {
      teamMasonryGrid.isotope({
        itemSelector: ".team-grid-item",
        // layout mode options
        layoutMode: "masonry",
      });
    }
  });

  /*--------------------
  # counter active
  ---------------------*/

  $(".counter").counterUp({
    delay: 10,
    time: 1000,
  });

  /*----------------------------
  # Mail Chip Ajax active
  ------------------------------*/
  var mCForm = $("#mc-form");
  mCForm.ajaxChimp({
    callback: mailchimpCallback,
    //Replace this with your own mailchimp post URL. Don't remove the "". Just paste the url inside "".
    url:
      "http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&id=05d85f18ef",
  });
  function mailchimpCallback(resp) {
    if (resp.result === "success") {
      alert(resp.msg);
    } else if (resp.result === "error") {
      alert(resp.msg);
    }
    return false;
  }

  /*------------------------------------
  # Contact Form Validation Settings
  --------------------------------------*/
  var contactForm = $("#contactForm");
  if ($("#contactForm").length) {
    contactForm.validate({
      onfocusout: false,
      onkeyup: false,
      rules: {
        name: "required",
        number: "required",
        email: {
          required: true,
          email: true,
        },
      },
      errorPlacement: function (error, element) {
        error.insertBefore(element);
      },
      messages: {
        name: "Enter your name?",
        number: "Enter your number?",
        email: {
          required: "Enter your email?",
          email: "Please, enter a valid email",
        },
      },

      highlight: function (element) {
        $(element).text("").addClass("error");
      },

      success: function (element) {
        element.text("").addClass("valid");
      },
    });
  }

  /*----------------------------
  # Contact Form Script
  -------------------------------*/

  if ($("#formSubmit").length) {
    var formSubmit = $("#formSubmit");
    CTForm.submit(function () {
      // submit the form
      if ($(this).valid()) {
        formSubmit.button("loading");
        var action = $(this).attr("action");
        $.ajax({
          url: action,
          type: "POST",
          data: {
            contactname: $("#name").val(),
            contactnumber: $("#number").val(),
            contactemail: $("#email").val(),
            contactmessage: $("#massage").val(),
          },
          success: function () {
            formSubmit.button("reset");
            formSubmit.button("complete");
          },
          error: function () {
            formSubmit.button("reset");
            formSubmit.button("error");
          },
        });
        // return false to prevent normal browser submit and page navigation
      } else {
        formSubmit.button("reset");
      }
      return false;
    });
  }

  /*----------------------------
  # parallax - start
  -------------------------------*/

  $(".scene").each(function () {
    new Parallax($(this)[0], {
      relativeInput: true,
    });
  });

  /*----------------------------
  #  Copy Right Year Update
  -------------------------------*/

  $("#currentYear").text(new Date().getFullYear());
  /*----------------------------
  #  scrollUp
  -------------------------------*/
  $.scrollUp({
    scrollName: "scrollUp",
    // Element ID
    scrollDistance: 400,
    // Distance from top/bottom before showing element (px)
    scrollFrom: "top",
    // 'top' or 'bottom'
    scrollSpeed: 200,
    // Speed back to top (ms)
    easingType: "linear",
    // Scroll to top easing (see http://easings.net/)
    animation: "fade",
    // Fade, slide, none
    animationSpeed: 300,
    // Animation speed (ms)
    scrollTrigger: false,
    // Set a custom triggering element. Can be an HTML string or jQuery object
    scrollTarget: false,
    // Set a custom target element for scrolling to. Can be element or number
    scrollText: '<i class="icofont-long-arrow-up"></i>',
    // Text for element, can contain HTML
    scrollTitle: false,
    // Set a custom <a> title if required.
    scrollImg: false,
    // Set true to use image
    activeOverlay: false,
    // Set CSS color to display scrollUp active point, e.g '#00FFFF'
    zIndex: 214, // Z-Index for the overlay
  });
})(jQuery);
