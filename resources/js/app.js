import "owl.carousel";
$(window).on("load", function () {
  $("#slider-quote").owlCarousel({
    autoWidth: true,
    lazyLoad: true,
  });
  $("#featured-product").owlCarousel({
    lazyLoad: true,
    items: 4,
    loop: true,
    margin: 20,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    nav: false,
    dots: true,
  });
  const slideImage = document.querySelectorAll("[data-src]");

  function preloadImage(img) {
    const src = img.getAttribute("data-src");
    if (!src) {
      return;
    }
    img.src = src;
  }

  const imageOptions = {};
  const imgObserver = new IntersectionObserver((entries, imageObserver) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) {
        return;
      } else {
        preloadImage(entry.target);
        imageObserver.unobserve(entry.target);
      }
    });
  }, imageOptions);
  slideImage.forEach((image) => {
    imgObserver.observe(image);
  });
});
