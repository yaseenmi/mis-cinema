let burger = document.querySelector('#burger');
let sidebar = document.querySelector('.sidebar');

burger.addEventListener('click', () => {
    let style =  sidebar.style;
    if(style.opacity == 1){
        style.opacity = 0;
        style.zIndex = -1;
    }
    else {
        style.opacity = 1;
        style.zIndex = 1;
    }
});




