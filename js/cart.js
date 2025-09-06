// ADICIONAR QUANTIDADE DE ITENS E O VALOR TOTAL DO CARRINHO DE COMPRAS ///////////////

const qntItemCart = document.getElementById('qntItemCart').innerHTML;
const totalCart = document.getElementById('totalCart').innerHTML;
sessionStorage.setItem("qnt", qntItemCart);
sessionStorage.setItem("total", totalCart);
// sessionStorage.removeItem("qnt")
// sessionStorage.removeItem("total")