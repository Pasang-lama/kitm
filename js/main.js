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
});

function showSideMenu(sideNavTarget) {
  $(sideNavTarget).addClass("open");
  $("body").addClass("fixed-background");
}

function hideSideMenu(sideNavTarget) {
  $(sideNavTarget).removeClass("open");
  $("body").removeClass("fixed-background");
}

const $sideNavMenu = $("#myside-nav");
$(document).mouseup((e) => {
    if (
        !$sideNavMenu.is(e.target) &&
        $sideNavMenu.has(e.target).length === 0 
    ) {
        $sideNavMenu.removeClass("open");
        $("body").removeClass("fixed-background");
    }
});