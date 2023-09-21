const video = document.querySelectorAll('.video');
const intro = document.querySelector('.intro');
for (let index = 0; index < video.length; index++) {
    video[index].addEventListener('click', function showBig(elem){
        let getAttr = elem.target.getAttribute('src');
        console.log(getAttr);
        intro.setAttribute('src', getAttr);
    });
}