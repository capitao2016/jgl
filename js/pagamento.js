// ESCOLHER A OPÇÃO DE PAGAR ANTECIPADO OU NA ENTREGA //
    const opcPagar = document.querySelectorAll('#antecipado, #entrega');
    opcPagar.forEach(btn => {
        btn.addEventListener('click', (e)=>{
            if(e.target.value == 'antecipado'){
                const btnOpc = document.querySelectorAll('.credito, .debito, .dinheiro')
                btnOpc.forEach(produto => {
                    produto.style.display = 'none'
            })}
            if(e.target.value == 'entrega'){
                const btnOpc = document.querySelectorAll('.credito, .debito, .dinheiro')
                btnOpc.forEach(produto => {
                    produto.style.display = 'block'
            })}
        })
    })
// FUNÇÃO PARA CHECKED / UNCHECKED PARA FORMA DE PAGAMENTO //
const btn = document.querySelectorAll('#pgt');
let count = 0;
btn.forEach(item => {
    item.addEventListener('click', (event) => {
        const ler = event.currentTarget.childNodes[3].childNodes[1]
        ler.checked = !ler.checked
            if(ler.checked){
                count++;
                if(count > 2){
                    let texto = document.querySelector('.texto')
                    texto.innerHTML = "Somente 2 opções para pagamento: " + count;
                    console.log(ler.checked = false)
                }
            }
            if(!ler.checked){
               count--;
                let texto = document.querySelector('.texto')
                texto.innerHTML = "Selecione 2 opções para pagamento: " + count;
            }
           
        })
        
    })