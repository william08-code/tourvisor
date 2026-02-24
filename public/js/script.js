window.addEventListener("scroll", () => {
  const header = document.querySelector(".header");
  if (window.scrollY > 20) {
    header.style.boxShadow = "0 2px 5px rgba(0,0,0,0.1)";
  } else {
    header.style.boxShadow = "none";
  }
});
