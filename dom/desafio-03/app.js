new Vue({
    el: '#desafio',
    data: {
        valor: 0,
    },
    computed:   {
        resultado(){
            return this.valor != 37 ? 'Valor Diferente' : 'Valor igual'
        },
    },
    watch:{
        resultado(newValue, oldValue){
            setTimeout(() =>{
                this.valor = 0;
             },5000);
        }
    }
});