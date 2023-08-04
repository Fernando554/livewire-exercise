const form = document.getElementById('form-accept-decline');
const btnModal = document.getElementById('btnModal');
const textareaComent = document.getElementById('comentario');

function acceptOrDecline(ID,status){
    textareaComent.value = '';

    let action = form.getAttribute('action');
    action = action.replace(/[^\/]+$/, ID);
    form.setAttribute('action', action);

    btnModal.value = status;    
}