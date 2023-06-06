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


/* LOGIN MODEL REMAKE */
const loginmodelremakeViews = document.querySelectorAll('.login-remake__model'),
loginmodelremakeBtns = document.querySelectorAll('.login__button-remake'),
loginmodelremakeCloses = document.querySelectorAll('.login-remake__model-close')

let loginmodelremake = function(loginmodelremakeClick){
    loginmodelremakeViews[loginmodelremakeClick].classList.add('active-model-login-remake')
}

loginmodelremakeBtns.forEach((loginmodeleremakeBtn, i) => {
    loginmodeleremakeBtn.addEventListener('click', () => {
    loginmodelremake(i)
})
})

loginmodelremakeCloses.forEach((loginmodelremakeClose) => {
    loginmodelremakeClose.addEventListener('click', () => {
        loginmodelremakeViews.forEach((loginmodelremakeView) => {
            loginmodelremakeView.classList.remove('active-model-login-remake')
    })
})
})

/* LOGIN PASSWORD VISIBILITY TOGGLE */
document.getElementById('showPasswordLogin').onclick = function() {
    if ( this.checked ) {
       document.getElementById('passwordLogin').type = "text";
    } else {
       document.getElementById('passwordLogin').type = "password";
    }
};


/* REGISTER */
const registerModelViews = document.querySelectorAll('.register__model'),
registerModelBtns = document.querySelectorAll('.register__button'),
registerModelCloses = document.querySelectorAll('.register__model-close')

let registerModel = function(registerModelClick){
    registerModelViews[registerModelClick].classList.add('active-model-register')
}

registerModelBtns.forEach((registerModeleBtn, i) => {
    registerModeleBtn.addEventListener('click', () => {
        registerModel(i)
})
})

registerModelCloses.forEach((registerModelClose) => {
    registerModelClose.addEventListener('click', () => {
        registerModelViews.forEach((registerModelView) => {
            registerModelView.classList.remove('active-model-register')
    })
})
})

/* REGISTER PASSWORD VISIBILITY TOGGLE */
document.getElementById('showPasswordRegister').onclick = function() {
    if ( this.checked ) {
       document.getElementById('passwordRegister').type = "text";
       document.getElementById('passwordRegisterConfirm').type = "text";
    } else {
       document.getElementById('passwordRegister').type = "password";
       document.getElementById('passwordRegisterConfirm').type = "password";
    }
};