const row_left = document.querySelector('.row-left');
const row_right = document.querySelector('.row-right');
const slider = document.querySelector('.slider__wrap');
const slider_container = document.querySelector('.slider-container');
const slider_track = document.querySelector('.slider-container__track');
const slider_item = document.querySelector('.slider-container__item');
const slider_itemAll = document.querySelectorAll('.slider-container__item');
let widthTranslate = slider_item.clientWidth; //* Ширина одного слайдера
let totalWidthItems = slider_item.clientWidth * slider_itemAll.length; //* Ширина всех слайдеров
let position = 0;


function left(){
    if(position === 0){
        position = totalWidthItems - widthTranslate; //* перематываем в конец 2700-900 = 1800
        slider_track.style.transform = `translate(-${position}px)`; //-1800
    }else{ //* иначе если position = 1800
        position -= widthTranslate; //1800 - 900
        slider_track.style.transform = `translate(-${position}px)`;
    }
}
function right(){
    if(position !== (totalWidthItems - widthTranslate)){
        position += widthTranslate;
        slider_track.style.transform = `translate(-${position}px)`;
    }else{
        position = 0;
        slider_track.style.transform = `translate(-${position}px)`;
    }
}

row_left.addEventListener('click', (e) =>{
    console.log(e.target);
    left();
});


let interval = setInterval(right, 2000);
row_right.addEventListener('click', (e) => {
    console.log(e.target);
    clearInterval(interval);
    right();
});