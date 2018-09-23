<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tratativa de Form PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
    $word = $_POST["word"];
    $number = $_POST["number"];
    $fat = $_POST["fat"];

    function calcFat($fat){
        if ($fat <= 1){
            $fat = $fat;
        } else {
            $fat *= calcFat($fat-1);
        }
        return $fat;
    }

    /*$primos = array();
    function numeroPrimo($parametro) {
        if ($parametro%2!=0 && $parametro%3!=0 && $parametro%5!=0 && $parametro%7!=0 && $parametro%11!=0){
            return 1;
        }
    }
    function exibePrimos($numero) {
        numeroPrimo($numero);
    }*/


    echo 'Sua string é ' . $word .' <br><br>';
    echo 'Sua string contem ' . strlen($word) . ' caracteres <br><br>';
    echo 'String Reversa: ' . strrev(substr($word, 0, 254)) . '<br><br>';
    echo 'Sua string reversa contém caracteres ' . strlen(strrev(substr($word, 0, 254)));
    echo '<br><br>';
    echo "Seu fatorial (do número ". $fat .") é igual a: " . calcFat($fat) ."<br><br>";
    echo 'Exibindo número primos de 0 até ' . $number ."<br><br>";
    
    for($i = 1; $i <= $number; $i++){
                $divisores = 0;
     
        for($j = $i; $j >= 1; $j--){
        if (($i % $j) == 0) {
            $divisores++;
        }
    }
     
    if ($divisores == 2){
        echo $i . ', ';
    }
}
    
    ?>
</body>
</html>