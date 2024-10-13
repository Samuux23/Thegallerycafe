// smooth scrolling effect in home page
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();

    const targetElement = document.querySelector(this.getAttribute("href"));
    if (targetElement) {
      window.scroll({
        top: targetElement.offsetTop,
        behavior: "smooth",
      });
    }
  });
});
document.addEventListener("DOMContentLoaded", function () {
  const homeLink = document.querySelector('a[href="#top"]');

  homeLink.addEventListener("click", function (event) {
    event.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });
});

// testimonial slide changing effect
document.addEventListener("DOMContentLoaded", function () {
  const slides = document.querySelectorAll(".testimonial");
  let currentIndex = 0;

  function showNextTestimonial() {
    slides[currentIndex].classList.remove("active");
    currentIndex = (currentIndex + 1) % slides.length;
    slides[currentIndex].classList.add("active");
    document.querySelector(
      ".testimonial-slide"
    ).style.transform = `translateX(-${currentIndex * 100}%)`;
  }

  setInterval(showNextTestimonial, 6000);

  // Initialize the first slide
  slides[currentIndex].classList.add("active");
});
