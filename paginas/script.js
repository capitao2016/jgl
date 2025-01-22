const menu = document.querySelector('.menu')
menu.addEventListener('click', ()=>{
    let modal = document.querySelector('.modal-menu')
    modal.classList.toggle('open-modal-menu')
})