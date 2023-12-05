<?php
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>E-book - Livro de Receitas de Sobremesas</title>
</head>
<body>

    <section class="banner">

      <div class="blocos">
       
        <bloco class="texto">
          
          <h2>15 Receitas de Sobremesas Gratuitas para Deleitar o Paladar</h2>
          <br/>
          <p>Com essas receitas, você poderá impressionar seus amigos e familiares com suas habilidades culinárias e, o melhor de tudo, sem gastar nada! Então, não perca tempo e baixe agora mesmo as nossas receitas gratuitas de sobremesas.</p>
          <br/>
          
          <button id="btn" onclick="button()">Saiba mais</button>
        
          </div><!--blocos-->
          </bloco><!--texto-->
        </section><!--banner-->

        <div  id="forms" class="modal-form">

      <form action="validate.php" method="post">
  
       <br/>
          <h2>Cadastre-se</h2>
         <input type="text"  name="name"  placeholder="Nome" required />
       
         <br/>
         <input type="text" name="email"  placeholder="E-mail" name="email" required  />
       <br/>
   
       <input type="submit" value="Baixar E-book" />
   
       </form>

        </div><!--modalforma-->


  

    

    <script src="assets/js/script.js"></script>
    
    
</body>
</html>