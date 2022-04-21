
new Vue({
   el:   '#desafio',
   data: {
      nome:    'Tony Frezza',
      idade:   32,
      imgUserSrc: '/assets/img/user.png',
   },
   methods: {
      multiplicaIdade: function(multiplicador){
         
         return this.idade*multiplicador;
      },
      getRandom:   function() {
         return Math.random()
      }
   }
});