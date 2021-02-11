
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require './classes/Frutas.php';
        require './classes/Morango.php';
        echo "<h1> Seja bem vindo ao hortfrut! </h1>"; 
//        $banana = new Frutas();
//        $banana ->setCor("Amarelo");
//        $banana ->setNome("Banana");
//        $banana ->setPeso("3,5kg");
        
        
        $laranja = new Frutas("Verde", "Laranja","3kg");
        echo "A fruta {$laranja ->getNome()} é da cor {$laranja->getCor()} e tem o peso de {$laranja->getPeso()} <br>";
        
        $morango = new Morango("Vermelho", "Morango","grande");
        $morango->mensagem();
             
        ?>
    </body>
</html>
