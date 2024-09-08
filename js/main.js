$(document).ready(function () {
  $(".openbtn").click(function (e) {
    var sideNavTarget = $(this).data("side-nav-target");
    e.preventDefault();
    if (typeof sideNavTarget !== "undefined" && sideNavTarget) {
      showSideMenu(sideNavTarget);
    }
  });

  $(".closebtn").click(function (e) {
    e.preventDefault();
    console.log(sideNavTarget);
    var sideNavTarget = $(this).data("side-nav-target");
    if (typeof sideNavTarget !== "undefined" && sideNavTarget) {
      hideSideMenu(sideNavTarget);
    }
  });

  if ($(".banner-slider").length > 0) {
    $(".banner-slider").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      fade: true,
      cssEase: "linear",
      arrows: false,
      autoplay: true,
      autoplaySpeed: 2000,
      dots: false,
      loop: true,
    });
  }

  if ($(".facility-slider").length > 0) {
    $(".facility-slider").slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 2000,
      dots: true,
      margin: 80,
    });
  }

  if ($(".our-approachers-slider").length > 0) {
    $(".our-approachers-slider").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 2000,
      dots: true,
      margin: 80,
    });
  }

  if ($(".popup-youtube").length > 0) {
    $(".popup-youtube").magnificPopup({
      disableOn: 700,
      type: "iframe",
      mainClass: "mfp-fade",
      removalDelay: 160,
      preloader: false,
      fixedContentPos: false,
    });
  }
  // horizontal  timeline
  $("#horizontalTimeline").horizontalTimeline({
    dateDisplay: "dayMonth",
    useNavBtns: true,
    useScrollBtns: false,
    prev_iconClass: "fa-angle-left",
    next_iconClass: "fa-angle-right",
  });

});

function showSideMenu(sideNavTarget) {
  $(sideNavTarget).addClass("open");
  $("body").addClass("fixed-background");
}

function hideSideMenu(sideNavTarget) {
  $(sideNavTarget).removeClass("open");
  $("body").removeClass("fixed-background");
}


$(window).on('load', function() {
  $('#popupModal').modal('show');
});

$(document).on('keydown', function(event) {
  if (event.key == "Escape") {
      $('#popupModal').modal('hide');
  }
});

$("#popupModalCloseBtn").on('click', function() {
  $('#popupModal').modal('hide');
})

$('#popupModal').on('show.bs.modal', function() {
  $('body').addClass('popupModal-padding-overlap');
});

$('#popupModal').on('shown.bs.modal', function() {
  $('body').removeAttr("style");
  var modalObj = $(this).find('.modal-content');
  $(modalObj).height('auto');
  if ($(modalObj).height() > ($(window).height() * 0.9)) {
      $(modalObj).height($(window).height() * 0.9);
  }
});

var callback = function() {
  jQuery('#popupModal').each(function(idx, item) {
      var modalObj = $(item).find('.modal-content');
      $(modalObj).height('auto');
      if ($(modalObj).height() > ($(window).height() * 0.9)) {
          $(modalObj).height($(window).height() * 0.9);
      }
  });
};

$(window).resize(callback);



document.addEventListener("DOMContentLoaded", function () {
  var calendarEl = document.getElementById("calendar");
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: "dayGridMonth",
    timeZone: "UTC",
    events: [
      {
        title: 'BioChemistry Lecture',
        start: '2023-09-21',
      },
      {
        title: 'Constitution Day',
        start: '2023-09-21',
      },
      {
        title: 'Dasain and Tihar Vaccation ',
        start: '2023-10-15',
        end: '2023-11-25',
      }
    ],
    
  });
  calendar.render();
});
