// ABRIR A PAGINA DE CARRINHO DE COMPRAS 
const btnCart = document.getElementById('container_cart');
btnCart.addEventListener('click', () =>{
    window.open("http://localhost/jgl/html/cart.php", "_parent");
})



// const qnt = sessionStorage.getItem("qnt");
// const total = sessionStorage.getItem("total");
// document.getElementById('iconeItemCart').innerHTML = qnt;
// document.getElementById('valor').innerHTML = total;