const subscribe = document.querySelector('.news-send__email');
const subscribeSend = document.querySelector('.news-send__button');
const subscribeForm = document.querySelector('.news-send__form');
const modalWindow = document.querySelector('.modalBox__window');
let message = document.querySelector('.message');
const closeModalWindow = document.querySelector('.closeModalWindow');

let file = '../emails.json';
let emails = [];

async function readFile(path, array){
    let response = await fetch(path);
    if(response.ok){
        let json = await response.json();
        console.log('Ответ от JSON файла ' + json);
        for(key in json){
            array.push(json[key]); 
        } 
    }else{
        console.log('не 200');
    }
}


//*при загрузки страницы происходит заполнения массива из JSON файла
readFile(file, emails);
console.log(emails);

subscribeForm.onsubmit = async (e)=> {
    readFile(file, emails);
    //console.log(`Это массив после нажатия кнопки:  ${emails}`);
    e.preventDefault();
    if(subscribe.value === ''){ //*Проверяем на пустоту
        message.innerHTML = 'Поле Email путое.';
        modalWindow.classList.add('activeModalBox__window');
    }else{ //*создаем запрос fetch
        let response = await fetch('../PHP/subscribe.php',{
        method: 'POST',
        body: new FormData(subscribeForm), //*собираем данные с формы
        });
        if(response.ok){ //*если запрос отправлен
            if(emails.includes(subscribe.value)){ //*проверка массива из файла JSON на совпадение email
                message.innerHTML = `Пользователь с email ${subscribe.value} уже подписан`;
                modalWindow.classList.add('activeModalBox__window');
                subscribe.value = ''; 
                console.log(response.text());
            }else{ //*отравляем
                message.innerHTML = 'Спасибо за подписку';
                modalWindow.classList.add('activeModalBox__window');
                subscribe.value = ''; 
                console.log(response.text());
            }     
        }     
    }  
}
closeModalWindow.addEventListener('click', (e)=>{
    e.preventDefault();
    modalWindow.classList.toggle('activeModalBox__window');
})