
// Debounce do loadash
const debounce = function (func, wait, immediate){
    let timeout;
    return function (...args) {
        const context = this;
        const later = function () {
            timeout = null;
            if(!immediate) func.apply(context, args);
        };
        const callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
};


const target = document.querySelectorAll('[data-anime]');
const animationClass = 'animate';

function animeSscroll(){
    const windowTop = window.pageYOffset +  ((window.innerHeight * 3) / 4);
    target.forEach(function(element) {
        if ((windowTop) > element.offsetTop) {
            element.classList.add(animationClass);
        } else {
            element.classList.remove(animationClass);
        }
    })
}

animeSscroll();

if (target.length) {
    window.addEventListener('scroll',  function(){
        animeSscroll();
    });
};