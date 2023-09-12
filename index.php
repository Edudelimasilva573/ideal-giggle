<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <main>
    <h1>Trabalhando com números aleatórios</h1>
    <?php 
    $min = 0;
    $max = 100;
    $num = mt_rand($min, $max);
    echo "<p>Gerando um número aleatório entre $min e $max...</p> <br> o número gerado foi:<strong> $num</strong><P>";
    ?>
    <button onclick="javascript:document.location.reload()">&#x1F504: Reiniciar</button>
  </main>
</body>

</html>