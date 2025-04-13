let conn_status = false
let conn

let content = document.getElementById('chat-container')
let room = document.getElementById('room')
let form = document.getElementById('form')
let name = document.getElementById('user')
let message = document.getElementById('message')

window.onload = () => {
    connect()
}

form.addEventListener('submit', (event)=>{
    event.preventDefault()

    if (name.textContent && message.value){
        let data = {'name':name.textContent, 'message':message.value}
        conn.publish(room.value, data)
    }
})

function connect(){
    if(conn_status){
        conn.close()
        conn_status = false
        content.innerHTML = '';
    }
    conn = new ab.Session(
        'ws://localhost:8080',
        function() {
            conn_status = true
            conn.subscribe(room.value, function(topic, data) {
                console.log(data)
                if (typeof data === 'string'){
                    data = JSON.parse(data)
                    data.forEach((message) => {
                        showMessages(message)
                    })
                }else {
                    showMessages(data)
                }

                //This is where you would add the new article to the DOM (beyond the scope of this tutorial)
                console.log('New article published to category "' + topic + '" : ' + data);
            });
        },
        function() {
            console.warn('WebSocket connection closed');
        },
        {'skipSubprotocolCheck': true}
    );
}

//Printar Mensagens na Tela
function showMessages(data) {

    let div = document.createElement('div');
    div.setAttribute('class', 'chat chat-start');

    div.innerHTML = `
        <div class="chat-header">
            ${data.name}
            <time class="text-xs opacity-50"></time>
        </div>
        <div class="chat-bubble">${data.message}</div>
    `

    content.appendChild(div)
}