const box = document.querySelector('.box-view-image');
const item = document.querySelector('.box-view-image__image');
const view = document.querySelector('.box-view-image__image > img');
const img = document.querySelectorAll('.item__img');

img.forEach(item => item.addEventListener('click', (e)=>{
    let getAttr = item.getAttribute('src');
    box.classList.remove('box-view-image');
    box.classList.add('box-view-image_active');
    view.setAttribute('src', getAttr);
}))
box.addEventListener('click', ()=>{
    box.classList.remove('box-view-image_active');
    box.classList.add('box-view-image');
})