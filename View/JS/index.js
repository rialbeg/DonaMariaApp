// const scrollWheel = event => {
//     if(event.deltaY < 0){
//         event.target.scrollBy(300, 0)
//       }
//       else{
//         event.target.scrollBy(-300, 0)
//       }
//   }
  
  // document.querySelector("#items")
  //   .addEventListener("wheel", scrollWheel)
  
  // let count = 0
  // setInterval(function(){
  //   count += 400
  //   if(count > 2000) count = 0
  //   document.querySelector("#items").scrollTo(count, 0)
  //   console.log('moveu')
  // }, 1500);

/*Navbar changing color*/
const navbar = document.querySelector("#navbar");
const navimage = document.querySelector("#logo-nome");

window.onscroll = function(){
    let top = window.scrollY;
    
    if(top >= 100)
    {
      navbar.classList.add("nav-active");
      navimage.style.width = "20rem";
    }else
    {
      navbar.classList.remove("nav-active");
      navimage.style.width = "30rem";
      navimage.style.transition = "all 0.2s";
    }
}

/*Smooth Scrolling*/ 

// const links = document.querySelectorAll(".navlist li a");

// for (const link of links) {
//   link.addEventListener("click", clickHandler);
// }

// function clickHandler(e) {
//   e.preventDefault();
//   const href = this.getAttribute("href");
//   const offsetTop = document.querySelector(href).offsetTop;

//   scroll({
//     top: offsetTop,
//     behavior: "smooth"
//   });
// }


/*Active link when scrolling*/
const links = document.querySelectorAll(".navlist li a");
const sections = document.querySelectorAll('section');

function changeLinkState() {
  let index = sections.length;

  while(--index && window.scrollY + 50 < sections[index].offsetTop) {}
  
  links.forEach((link) => link.classList.remove('link-active'));
  links[index].classList.add('link-active');
}

changeLinkState();
window.addEventListener('scroll', changeLinkState);


/*Toggle menu hamburguer*/   
let show = true; 

const menuSection = document.querySelector(".menu-section")
const menuToggle = menuSection.querySelector(".menu-toggle")
const login_link = document.querySelector(".btn-login");
const navlist = document.querySelector(".navlist");
// const navbar = document.querySelector("#navbar"); see line 22
menuToggle.addEventListener("click", () => {

    document.body.style.overflow = show ? "hidden" : "initial"


    menuSection.classList.toggle("on", show)
    show = !show;
})


