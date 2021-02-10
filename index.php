
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include './classes/Frutas.php';
        
//        $banana = new Frutas();
//        $banana ->setCor("Amarelo");
//        $banana ->setNome("Banana");
//        $banana ->setPeso("3,5kg");
        
        
        $laranja = new Frutas("Verde", "Laranja","3kg");
        echo "A fruta {$laranja ->getNome()} é da cor {$laranja->getCor()} e tem o peso de {$laranja->getPeso()}";
        ?>
    </body>
</html>
