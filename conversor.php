<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Carlos Bonfim">
    <title>titulo</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<div class="container">
    <div class="conversor">
        <h1>Valores convertidos</h1>
        <?php
        $real = $_POST["real"];
       $url = 'https://economia.awesomeapi.com.br/json/daily/USD-BRL/?start_date=20180901&end_date=20250314';

       $dados = json_decode(file_get_contents($url), true);

       $cotacao = ($dados[0]["high"] + $dados[0]["low"]) / 2;
       $diaCotacao = $dados[0]["create_date"];
      
       $dolar = $real / $cotacao;
        echo "<p class='cotacao'> <strong>R$$real</strong> convertido para dolár é igual a <strong>$$dolar</strong></p>";
        
        echo "<p>utilizando a cotação do dia $diaCotacao, segundo a Awesome API</p>";
        echo "<span><br/> <a href = 'index.html'> volte aqui</a></span>";


     
        ?>
    </div>
</div>
   
</body>
</html>