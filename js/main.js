jQuery(document).ready(function () {
  jQuery(".dropdown > a").click(function () {
    window.location = jQuery(this).attr("href");
  });
});

//Show more sidebar button
function loadMore() {
  const loadmore = document.querySelector("#loadmore");
  let currentItems = 4;
  loadmore.addEventListener("click", (e) => {
    const elementList = [
      ...document.querySelectorAll(".topics-list .cat-item"),
    ];
    for (let i = currentItems; i < currentItems + 4; i++) {
      if (elementList[i]) {
        elementList[i].style.display = "flex";
      }
    }
    currentItems += 4;

    // Load more button will be hidden after list fully loaded
    if (currentItems >= elementList.length) {
      event.target.style.display = "none";
      document.getElementById("loadmore").classList.toggle("d-block");
    }
  });
}

//Menu scrolling classjQuery
jQuery(document).ready(function () {
  jQuery(".navbar-main")[
    jQuery(window).scrollTop() >= 60 ? "addClass" : "removeClass"
  ]("fixed-top");

  jQuery(window).scroll(function (e) {
    jQuery(".navbar-main")[
      jQuery(window).scrollTop() >= 60 ? "addClass" : "removeClass"
    ]("fixed-top");
  });
});

//Bootstrap caroulsel
jQuery(document).ready(function () {
  if (jQuery(".carousel")) {
    // Carousel
    jQuery(".carousel").carousel({
      interval: false,
      pause: true,
    });

    jQuery(".carousel .carousel-inner").swipe({
      swipeLeft: function (event, direction, distance, duration, fingerCount) {
        this.parent().carousel("next");
      },
      swipeRight: function () {
        this.parent().carousel("prev");
      },
      threshold: 0,
      tap: function (event, target) {
        window.location = $(this).find(".carousel-item.active a").attr("href");
      },
      excludedElements: "label, button, input, select, textarea, .noSwipe",
    });

    jQuery(".carousel .carousel-inner").on("dragstart", "a", function () {
      return false;
    });
  }
});

//Top button
jQuery(document).ready(function () {
  var offset = 220;
  var duration = 500;
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > offset) {
      jQuery(".top").fadeIn(duration);
    } else {
      jQuery(".top").fadeOut(duration);
    }
  });
  jQuery(".top").click(function (event) {
    event.preventDefault();
    jQuery("html, body").animate({ scrollTop: 0 }, duration);
    return false;
  });
});

jQuery(document).ready(function () {
  var tooltipTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="tooltip"]')
  );
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
  });
});

//Typing effect home
function typingEffect() {
  var typed = new Typed("#typed", {
    stringsElement: "#typed-strings",
    typeSpeed: 60,
    startDelay: 0,
    backSpeed: 40,
    backDelay: 500,
    loopCount: 0,
    loop: 1,
  });
}
