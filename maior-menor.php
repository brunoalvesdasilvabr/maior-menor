


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <style>
     .num{
       background-color: blue;
       color: white;
       width: 15%;
       border-radius:10%;
       font-size: 30px;
       margin-top: 20px;
       margin-left:30px;
     }
     </style>
   </head>
   <body>
     <fieldset>
       <legend><h1>Verifique qual o maior número</h1></legend>
     <form action="maior-menor.php" method="get">
       <input type="number" name="num1" required>
       <input type="number" name="num2" required>
       <button>enviar</button>
       <?php

       if($_GET){
           $num1= isset ($_GET['num1'])?$_GET['num1']:null;
           $num2= isset ($_GET['num2'])?$_GET['num2']:null;
           if ($num1>$num2){
             echo "<div class='num'> O maior é $num1</div>";
           }elseif ($num2>$num1){
             echo "<div class='num'> o maior é $num2</div>";
           }elseif ($num1===$num2){
             echo "<div class='num'> Os dois são iguais</div>";
           }
       }else{
         echo '<h1>Adicione os números</h1>';
       }

        ?>
     </fieldset>
     </form>
   </body>
 </html>
