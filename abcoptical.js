// hamburger menu toggle
function hamFunction(x) {
    x.classList.toggle("change");
}

// menu toggle
var Togglebutton = document.getElementsByClassName('toggle-btn')[0]
var menuLinks = document.getElementsByClassName('menu-links')[0]

Togglebutton.addEventListener('click', () => {
   menuLinks.classList.toggle('active')
})

// active a class navbar
$(document).on('click', 'nav ul li', function(){
    $(this).addClass('active').siblings().removeClass('active')
})