new Vue({
    el: '#desafio',
    data: {
        valor: ''
    },
    methods:    {
        exibirAlerta:   function(e){
            alert('Estou exibindo este alerta!');
        },
        atualizaValor:  function(e){
            this.valor = e.target.value;
        }
    }
})