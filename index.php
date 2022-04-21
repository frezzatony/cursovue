<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="initial-scale=1.0">
   <title>Document</title>

   <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>


</head>
<body>

   <div id="app">
      <p>{{titulo}}</p>
      <input type="text" name="" id="" v-on:input="alterarTitulo">
   </div>
   
<script>

new Vue({
   el: '#app',
   data: {
      titulo:  'Meu título'
   },
   methods: {
      alterarTitulo: function(event){
         this.titulo = event.target.value;
      }
   }
});

</script>
</body>
</html>
