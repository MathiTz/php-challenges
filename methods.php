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

    $primos = array();
    
    function numeroPrimo($parametro) {
        if ($parametro%2!=0 && $parametro%3!=0 && $parametro%5!=0 && $parametro%7!=0 && $parametro%11!=0){
            return 1;
        }
    }

    function exibePrimosRecursivamente($numero) {
        numeroPrimo($numero);
    }


    echo 'Sua string é ' . $word .' <br>';
    echo 'Sua string contem ' . strlen($word) . ' caracteres <br>';
    echo 'String Reversa: ' . strrev(substr($word, 0, 254)) . '<br>';
    echo 'Sua string reversa contém caracteres ' . strlen(strrev(substr($word, 0, 254)));
    echo '<br><br><br><br>';
    echo 'Exibindo número primos de 0 até ' . $number;

    exibePrimosRecursivamente($number);
    
    ?>
</body>
</html>