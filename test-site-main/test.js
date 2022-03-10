const bi = document.querySelector('#design');
const ci = document.querySelector('#marketing');

const windowWidthImg = window.innerWidth /5;
const windowHeightImg = window.innerHeight / 5;

bi.addEventListener('mousemove', e => {
  const mouseX = e.clientX / windowWidthImg;
  const mouseY = e.clientY / windowHeightImg;

  const mouseXimg = e.clientX / windowWidthImg;
  const mouseYimg = e.clientY / windowHeightImg;


  const bg = document.querySelector('#background-image');
  // const lg = document.querySelector('.perspective');

  bg.style.transform = `translate3d(-${mouseX}%, -${mouseY}%, 0)`;
  bi.style.transform = `translate3d(-${mouseX}%, -${mouseY}%, 0)`;
  ci.style.transform = `translate3d(-${mouseX}%, -${mouseY}%, 0)`;
  // lg.style.transform = `translate3d(-${mouseX}%, -${mouseY}%, 0)`;
  
});
ci.addEventListener('mousemove', e => {
    const mouseX = e.clientX / windowWidthImg;
    const mouseY = e.clientY / windowHeightImg;
  
    const bg = document.querySelector('#background-image');
    // const lg = document.querySelector('.perspective');
    bg.style.transform = `translate3d(-${mouseX}%, -${mouseY}%, 0)`;
    ci.style.transform = `translate3d(-${mouseX}%, -${mouseY}%, 0)`;
    bi.style.transform = `translate3d(-${mouseX}%, -${mouseY}%, 0)`;
    // lg.style.transform = `translate3d(-${mouseX}%, -${mouseY}%, 0)`;

  });

//   const toggle = document.querySelector(".toggle");
// const menu = document.querySelector(".menu");
// const items = document.querySelectorAll(".item");

// /* Toggle mobile menu */
// function toggleMenu() {
//   if (menu.classList.contains("active")) {
//     menu.classList.remove("active");
//     toggle.querySelector("a").innerHTML = "<i class='fas fa-bars'></i>";
//   } else {
//     menu.classList.add("active");
//     toggle.querySelector("a").innerHTML = "<i class='fas fa-times'></i>";
//   }
// }

// /* Activate Submenu */
// function toggleItem() {
//   if (this.classList.contains("submenu-active")) {
//     this.classList.remove("submenu-active");
//   } else if (menu.querySelector(".submenu-active")) {
//     menu.querySelector(".submenu-active").classList.remove("submenu-active");
//     this.classList.add("submenu-active");
//   } else {
//     this.classList.add("submenu-active");
//   }
// }


