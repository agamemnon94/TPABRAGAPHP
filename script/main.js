let header = document.querySelector(".header_container");
let lastScrollTop = 0;
let h1Disapear = document.querySelector('.h1_Welcome');
let h2Nyc = document.querySelector('.h2_nyc');

window.addEventListener('scroll', () => {
  console.log(scrollY);
  let scrollTop = window.pageYOffset || this.document.scrollTop;
  if (scrollTop > lastScrollTop) {
    header.classList.add('hidden_header');
  } else {
    header.classList.remove('hidden_header');
  }
  lastScrollTop = scrollTop;
  if (window.scrollY > 90) {
    h1Disapear.classList.add('disapear');
  } if (window.scrollY < 45) {
    h1Disapear.classList.remove('disapear');
    h2Nyc.classList.remove('apear');
  } if (window.scrollY > 550) {
    h2Nyc.classList.add('apear');
  }
})
