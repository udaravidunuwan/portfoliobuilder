
/* DARK LIGHT THEME */
const themeButton = document.getElementById('theme-button')
const darkTheme = 'dark-theme'
const iconTheme = 'uil-sun'

// Previously selected topic (if user selected)
const selectedTheme = localStorage.getItem('selected-theme')
const selectedIcon = localStorage.getItem('selected-icon')

// We obtain the current theme that the interface has by validating the dark-theme class
const getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'dark' : 'light'
const getCurrentIcon = () => themeButton.classList.contains(iconTheme) ? 'uil-moon' : 'uil-sun'

// We validate if the user previously chose a topic
if (selectedTheme) {
  // If the validation is fulfilled, we ask what the issue was to know if we activated or deactivated the dark
  document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme)
  themeButton.classList[selectedIcon === 'uil-moon' ? 'add' : 'remove'](iconTheme)
}

// Activate / deactivate the theme manually with the button
themeButton.addEventListener('click', () => {
    // Add or remove the dark / icon theme
    document.body.classList.toggle(darkTheme)
    themeButton.classList.toggle(iconTheme)
    // We save the theme and the current icon that the user chose
    localStorage.setItem('selected-theme', getCurrentTheme())
    localStorage.setItem('selected-icon', getCurrentIcon())
})


/* MENU SHOW Y HIDDEN */
const navMenu = document.getElementById('nav-menu'),
        navToggle = document.getElementById('nav-toggle'),
        navClose = document.getElementById('nav-close')

/* MENU SHOW */
/* Validate if constant exist */
if(navToggle){
    navToggle.addEventListener('click', () =>{
        navMenu.classList.add('show-menu')
    })
}

/* MENU HIDDEN */
/* Validate if constant exist */
if(navClose){
    navClose.addEventListener('click', ()=>{
        navMenu.classList.remove('show-menu')
    })
}


/* REMOVE MENU MOBILE*/
const navLink = document.querySelectorAll('.nav__link')

function linkAction(){
    const navMenu = document.getElementById('nav-menu')
    // When clicked each nav__link will remove the show menu class
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))



/* SCROLL SECTIONS ACTIVE */
const sections = document.querySelectorAll('section[id]')

function scrollActive(){
    const scrollY = window.pageYOffset

    sections.forEach(current =>{
        const sectionHeight = current.offsetHeight
        const sectionTop = current.offsetTop - 50;
        sectionId = current.getAttribute('id')

        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('active-link')
        }else{
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.remove('active-link')
        }
    })
}
window.addEventListener('scroll', scrollActive)


/* CHANGE BACKGROUND HEADER */
function scrollHeader(){
    const nav = document.getElementById('header')
    // When the scroll is greater than 200 viewport height, add the scroll-header class to the header tag
    if(this.scrollY >= 80) nav.classList.add('scroll-header'); else nav.classList.remove('scroll-header')
}
window.addEventListener('scroll', scrollHeader)

/* SHOW SCROLL UP */
function scrollUp(){
    const scrollUp = document.getElementById('scroll-up');
    // When the scroll is higher than 560 viewport height, add the show-scroll class to the a tag with the scroll-top class
    if(this.scrollY >= 560) scrollUp.classList.add('show-scroll'); else scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)



/* PREVIEW PICTUREW ON UPLOAD HOME PROFILE IMAGE */
function previewPhoto(inputElement, previewElement) {
    var reader = new FileReader();
    reader.onload = function() {
      previewElement.innerHTML = '';
      var image = new Image();
      image.src = reader.result;
      image.onload = function() {
        var canvas = document.createElement('canvas');
        var context = canvas.getContext('2d');
        var imageSize = Math.min(image.width, image.height);
        canvas.width = imageSize;
        canvas.height = imageSize;
        context.drawImage(image, (image.width - imageSize) / 2, (image.height - imageSize) / 2, imageSize, imageSize, 0, 0, imageSize, imageSize);
        var resizedImage = new Image();
        resizedImage.src = canvas.toDataURL();
        previewElement.appendChild(resizedImage);
      };
    };
    reader.readAsDataURL(inputElement.files[0]);
  }

/* ONLY INPUT NUMBERS ABOUT */
function validateNumberInput(input) {
    // Remove any non-numeric characters from the input value
    input.value = input.value.replace(/[^0-9]/g, '');
  }
  
function validatePercentageInput(input) {
  if (input.value > 100) {
    input.value = 100;
  }
}

/* QUALIFICATION TABS */
const tabs = document.querySelectorAll('[data-target]'),
    tabContents = document.querySelectorAll('[data-content]')

tabs.forEach(tab =>{
    tab.addEventListener('click', () => {
        const target = document.querySelector(tab.dataset.target)

        tabContents.forEach(tabContent =>{
            tabContent.classList.remove('qualification__active')
        })
        target.classList.add('qualification__active')

        tabs.forEach(tab =>{
            tab.classList.remove('qualification__active')
        })
        tab.classList.add('qualification__active')
    })
})

/* FOR SELECT YEARS IN QUALIFICATIONS */
function generateYearOptions(startYear, endYear, selectElement) {
  var currentYear = new Date().getFullYear();

  for (var year = startYear; year <= endYear; year++) {
    var option = document.createElement("option");
    option.value = year;
    option.text = year;
    selectElement.appendChild(option);
  }
}

var selectEduYearFrom = document.getElementById("Education__yearFrom");
var selectEduYearTo = document.getElementById("Education__yearTo");
var selectWorkYearFrom = document.getElementById("Work__yearFrom");
var selectWorkYearTo = document.getElementById("Work__yearTo");
var startYear = 2012;

generateYearOptions(startYear, new Date().getFullYear(), selectEduYearFrom);
generateYearOptions(startYear, new Date().getFullYear(), selectEduYearTo);
generateYearOptions(startYear, new Date().getFullYear(), selectWorkYearFrom);
generateYearOptions(startYear, new Date().getFullYear(), selectWorkYearTo);


// /* Mobile number prefix */
// var mobileInput = document.getElementById("contactme__mobile-number");

// // Handle focus event to reapply the prefix if removed
// mobileInput.addEventListener("focus", function() {
//   if (!mobileInput.value.startsWith("+94")) {
//     mobileInput.value = "+94" + mobileInput.value;
//   }
// });

// // Handle input event to prevent deleting the prefix
// mobileInput.addEventListener("input", function() {
//   if (!mobileInput.value.startsWith("+94")) {
//     mobileInput.value = "+94" + mobileInput.value.substring(3);
//   }
// });

// /* Mobile number validity */
// document.getElementById("contact__saveBtn").addEventListener("click", function(event) {
//   event.preventDefault(); // Prevent form submission

//   var mobileNumber = document.getElementById("contactme__mobile-number").value;
//   var pattern = /^\+94\d{9}$/; // Regular expression for "+94" followed by 9 digits

//   if (pattern.test(mobileNumber)) {
//     // Mobile number is valid
//     alert("Mobile number is valid!");
//     // Here, you can proceed with further actions like submitting the form or making an AJAX request
//     // THE MAGIC STARTS HERE==========================================================================================================>>>
//   } else {
//     // Mobile number is invalid
//     alert("Please enter a valid mobile number in the format +94XXXXXXXXX!");
//     mobileInput.value = "+94";
//   }
// });

// SKILLS APPEND NEW SKILL CATEGORIES AND NEW SKILL
