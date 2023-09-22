let modalBox = document.querySelector('.modalBox__window');
let modalText = document.querySelector('.message');
let modalClose = document.querySelector('.closeModalWindow');

const subscribePath = '../PHP/subscribe.php';
const subscribeForm = document.querySelector('.news-send__form');
const subscribeSend = document.querySelector('.news-send__button');

class ToFetch{
    modalBox
    modalText;
    modalClose
    constructor(path, form, send){
        this.path = path;
        this.form = form;
        this.send = send;
    }
    async request(){
        let request = await fetch(this.path,{
            method: 'POST',
            body: new FormData(this.form),
        });
        if(request.ok){
            let answer = request.json();
            //console.log(answer);
            answer.then(
                function(result){
                    console.log(`Resolve ${result}`);
                    modalText.innerText = result;
                },
                function(error){
                    console.log(`Reject ${error}`);
                }
            )  
        }else{
            console.log(request.status);
        }
    }
    viewModal(){

    }
    event(){
        this.send.addEventListener('click', (e)=>{
            e.preventDefault();
            this.request();
        })
    }
}

const subscribe = new ToFetch(subscribePath, subscribeForm, subscribeSend);
subscribe.modalText = modalText;
subscribe.event();