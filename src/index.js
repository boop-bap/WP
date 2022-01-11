// Fix the slide show


let slideIndex = 1;
showSlides(slideIndex);

const left = document.querySelector('.chevron-left')
const right =document.querySelector('.chevron-right')

function plusSlides(n) {
  showSlides((slideIndex += n));
}


function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  let i;
  const slides = document.querySelectorAll(".mySlides");
  const dots = document.querySelectorAll(".dot");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}


left.addEventListener('click', showSlides(-1))
right.addEventListener('click', showSlides(-1))



// Drop down

const dropBtn =document.querySelector(".dropbtn")

const box = document.querySelector(".dropdown-content")

const dropDown=()=>{
  console.log(23)
 if (box.classList.contains("show")){
  box.classList.remove("show")
 } else {
  box.classList.add("show")
 }
}


dropBtn.addEventListener('click',dropDown)




const container =box.parentElement.parentElement.parentElement.parentElement

const clickOutside=(e)=>{
  if(e.target.classList.contains('dropbtn')){
    
  } else {
    box.classList.remove("show")
  }
  
}

container.addEventListener('click',clickOutside)



