<?php
  $d1 = random_int(0 , 9);
  $d2 = random_int(0 , 9);
  $d3 = random_int(0 , 9);
  $d4 = random_int(0 , 9);
  $d5 = random_int(0 , 9);
  $d6 = random_int(0 , 9);
  $d7 = random_int(0 , 9);
  $d8 = random_int(0 , 9);
  $d9 = random_int(0 , 9);
// Calculando o primeiro digito validador
  $somatorio = $d1*10 + $d2*9 + $d3*8 +
                $d4*7 + $d5*6 + $d6*5 +          
                $d7*4 + $d8*3 + $d9*2;

  $resto = $somatorio % 11;
  if($resto < 2){
    $dv1 = 0;
  }else{
    $dv1 = 11 - $resto;
  }
 // Calculando o segundo digito validador
   $somatorio = $d1*11 + $d2*10 + $d3*9 + 
               $d4*8 + $d5*7 + $d6*6 +
               $d7*5 + $d8*4 + $d9*3 + $dv1*2;

  $resto = $somatorio % 11;
  if($resto < 2){
    $dv2 = 0;
  }else{
    $dv2 = 11 - $resto;
  }
  $cpf = $d1 . $d2 . $d3 . "." . $d4 . $d5 . $d6 . "." . $d7 . $d8 . $d9;
  $cpf = $cpf . "-" . $dv1 . $dv2;
?>
<html>
  <head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Gerador de cpf</title>
  </head>
  <body>
     <div class="w3-card-4" style="width:50%;">
      <header class="w3-container w3-blue">
        <h1>Gerador de CPF</h1>
      </header>

      <div class="w3-container">
        <p class="w3-text-orange w3-large" style="text-shadow:1px 1px 0 #444"><?= $cpf ?></p>
      </div>

      <footer class="w3-container w3-blue">
        <h5>Aperte F5 para gerar novo CPF</h5>
      
      </footer>
      <button onClick="window.location.reload();">Novo CPF</button>
    </div>
  </body>
</html>
