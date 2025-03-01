const menu = document.querySelector('.menu');
menu.addEventListener('click', ()=>{
    let modal = document.querySelector('.modal-menu');
    modal.classList.toggle('open-modal-menu');
});
const openCart = document.querySelector('.box-cart');
openCart.addEventListener('click', ()=>{
    let modalCart = document.querySelector('.modal-cart');
    modalCart.classList.toggle('open-modal-cart');
});
const closedCart = document.querySelector('.box-closed');
closedCart.addEventListener('click', ()=>{
    let modalCart = document.querySelector('.modal-cart');
    modalCart.classList.toggle('open-modal-cart');
});