
// Slide show



const slideShowFunction=()=>{
  !(function(d){
    // Variables to target our base class,  get carousel items, count how many carousel items there are, set the slide to 0 (which is the number that tells us the frame we're on), and set motion to true which disables interactivity.
    let itemClassName = "carousel__photo";
        items = d.getElementsByClassName(itemClassName),
        totalItems = items.length,
        slide = 0,
        moving = true; 
  
    // To initialise the carousel we'll want to update the DOM with our own classes
    function setInitialClasses() {
  
      // Target the last, initial, and next items and give them the relevant class.
      // This assumes there are three or more items.
      items[totalItems - 1].classList.add("prev");
      items[0].classList.add("active");
      items[1].classList.add("next");
    }
  
    // Set click events to navigation buttons
  
    function setEventListeners() {
      const next = d.getElementsByClassName('carousel__button--next')[0],
          prev = d.getElementsByClassName('carousel__button--prev')[0];
  
      next.addEventListener('click', moveNext);
      prev.addEventListener('click', movePrev);
    }
  
    // Disable interaction by setting 'moving' to true for the same duration as our transition (0.5s = 500ms)
    function disableInteraction() {
      moving = true;
  
      setTimeout(function(){
        moving = false
      }, 500);
    }
  
    function moveCarouselTo(slide) {
  
      // Check if carousel is moving, if not, allow interaction
      if(!moving) {
  
        // temporarily disable interactivity
        disableInteraction();
  
        // Preemptively set variables for the current next and previous slide, as well as the potential next or previous slide.
        let newPrevious = slide - 1,
            newNext = slide + 1,
            oldPrevious = slide - 2,
            oldNext = slide + 2;
  
        // Test if carousel has more than three items
        if ((totalItems - 1) > 2) {
  
          // Checks if the new potential slide is out of bounds and sets slide numbers
          if (newPrevious <= 0) {
            oldPrevious = (totalItems - 1);
          } else if (newNext >= (totalItems - 1)){
            oldNext = 0;
          }
  
          // Check if current slide is at the beginning or end and sets slide numbers
          if (slide === 0) {
            newPrevious = (totalItems - 1);
            oldPrevious = (totalItems - 2);
            oldNext = (slide + 1);
          } else if (slide === (totalItems -1)) {
            newPrevious = (slide - 1);
            newNext = 0;
            oldNext = 1;
          }
  
          // Now we've worked out where we are and where we're going, by adding and removing classes, we'll be triggering the carousel's transitions.
  
          // Based on the current slide, reset to default classes.
          items[oldPrevious].className = itemClassName;
          items[oldNext].className = itemClassName;
  
          // Add the new classes
          items[newPrevious].className = itemClassName + " prev";
          items[slide].className = itemClassName + " active";
          items[newNext].className = itemClassName + " next";
        }
      }
    }
  
    // Next navigation handler
    function moveNext() {
  
      // Check if moving
      if (!moving) {
  
        // If it's the last slide, reset to 0, else +1
        if (slide === (totalItems - 1)) {
          slide = 0;
        } else {
          slide++;
        }
  
        // Move carousel to updated slide
        moveCarouselTo(slide);
      }
    }
  
    // Previous navigation handler
    function movePrev() {
  
      // Check if moving
      if (!moving) {
  
        // If it's the first slide, set as the last slide, else -1
        if (slide === 0) {
          slide = (totalItems - 1);
        } else {
          slide--;
        }
  
        // Move carousel to updated slide
        moveCarouselTo(slide);
      }
    }
  
    // Initialise carousel
    function initCarousel() {
      setInitialClasses();
      setEventListeners();
  
      // Set moving to false now that the carousel is ready
      moving = false;
    }
  
    // make it rain
    initCarousel();
  
  }(document));
}



const rollSlides=()=>{
  const reviews = document.querySelector('.reviews')
if (reviews!=undefined){
  slideShowFunction()
} else {
  console.log(23)
}
}

rollSlides()








// Drop down

const dropBtn =document.querySelector(".dropbtn")
const dropBtnMobile =document.querySelector(".dropbtn-mobile")


const box = document.querySelector(".dropdown-content")
const boxMobile = document.querySelector(".dropdown-content-mobile")



const dropDown=()=>{
 if (box.classList.contains("show")){
  box.classList.remove("show")
 } else {
  box.classList.add("show")
 }
}


//mobile drop down
const dropDownMobile=()=>{
  console.log(123)
 if (boxMobile.classList.contains("show")){
  boxMobile.classList.remove("show")
 } else {
  boxMobile.classList.add("show")
 }
}


dropBtn.addEventListener('click',dropDown)
dropBtnMobile.addEventListener('click',dropDownMobile)





const container =box.parentElement.parentElement.parentElement.parentElement

const clickOutside=(e)=>{
  if(e.target.classList.contains('dropbtn')){
    
  } else {
    box.classList.remove("show")
  }
  
}

container.addEventListener('click',clickOutside)



// hamburger

const hambugerIcon = document.querySelector('.hamburger')
const mobileMenu = document.querySelector('.mobile-ul') 

const toggleHamburger=(e)=>{

  if (mobileMenu.classList.contains('hide')){
    mobileMenu.classList.remove('hide')
  } else {
    mobileMenu.classList.add('hide')
  }
}


hambugerIcon.addEventListener('click', toggleHamburger)




const wrapper = document.getElementById('hamburger-wrapper')

wrapper.addEventListener("click", () => {
  wrapper.classList.toggle("open")
})

//COPY NUMBER INTO CLIPBOARD

function copy() {
  /* Get the text field */
  var copyNumber = document.getElementById("copynumber");

  /* Select the text field */
  copyNumber.select();
  copyNumber.setSelectionRange(0, 99999); /* For mobile devices */

   /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyNumber.value);

  /* Alert the copied text */
  alert("Copied the text: " + copyNumber.value);
}


