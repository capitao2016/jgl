// ESTA FUNÇÃO ABRE O O MENU LATERAL DE OPÇÕES
function openMenu(){
    const menu = document.querySelector('.menu')
    const menu_modal = document.querySelector('.menu_modal')
    const f_menu_lateral = document.querySelector('.btn_fechar') 
    
    menu.addEventListener('click', () =>{
        menu_modal.classList.toggle('open')
    })
    f_menu_lateral.addEventListener('click', () =>{
        menu_modal.classList.toggle('open')
    })
}
openMenu();
// OPENED SHOPPING CART 
const btnCart = document.getElementById('container_cart');
btnCart.addEventListener('click', () =>{
    window.open("http://localhost/jgl/html/cart.php", "_parent");
})
