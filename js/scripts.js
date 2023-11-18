
// слайдер для отзывов
var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        0:{
            slidesPerView:1,
        },
        520:{
            slidesPerView:2,
        },
        950:{
            slidesPerView:3,
        },
    },
  });

//модальное окно для отзывов

let btns = document.querySelectorAll("*[data-modal-btn]");

for(let i = 0; i < btns.length; i++) {
    btns[i].addEventListener('click', function() {
        let name = btns[i].getAttribute('data-modal-btn');
        let modal = document.querySelector("[data-modal-window='"+name+"']");
        modal.style.display = "block";
        let close = modal.querySelector(".close_modal_window");
        close.addEventListener('click', function(){
            modal.style.display = "none";    
        })
    })
}

window.onclick = function(el) {
    if(el.target.hasAttribute('data-modal-window')) {
        let modals = document.querySelectorAll("*[data-modal-window]");
        for(let i = 0; i < modals.length; i++){
            modals[i].style.display = "none";
        }
    }
}

//3 слайдера в модальных окне
//!!!
var swiper = new Swiper(".slider1", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});

var swiper = new Swiper(".slider2", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});

var swiper = new Swiper(".slider3", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});

// активация кнопки отправки заявки
const agreementCheckbox = document.getElementById('agree_guest_request');
const submitButton = document.getElementById('button-applecation');

//кнопка по умолчанию отключена
if (!agreementCheckbox.checked) {
    submitButton.classList.add('disabled');
}

// при изменении чекбокса если галочка есть, то кнопка включена
agreementCheckbox.addEventListener('change', function() {
    if (!agreementCheckbox.checked) {
        submitButton.classList.add('disabled');
    }
    else {
        submitButton.classList.remove('disabled', agreementCheckbox.checked);
    } 
    
});



