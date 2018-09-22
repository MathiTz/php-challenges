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
    $name = $_POST["name"];
    $age = $_POST["age"];

    echo 'Sua string é ' . $name .' <br>';
    echo 'Sua string contem ' . strlen($name) . 'caracteres <br>';
    echo 'String Reversa; ' . strrev(substr($name, 0, 254)) . '<br>';
    echo 'Sua string reversa contém' . strlen(strrev(substr($name, 0, 254)));
    
    ?>
</body>
</html>