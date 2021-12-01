<?php

require_once 'ReverseString.php';

if (isset($_POST['string']) && !empty($_POST['string'])) {
    $string = $_POST['string'];
    $result = ReverseString::reverse($string);
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String Reverse</title>
</head>
<body>

<form action="/" method="post">
    <label for="string">Введите строку</label>
    <input type="text" name="string">
    <input type="submit" value="Reverse!">
</form>

<?php
    if (isset($result)) { ?>
        <p>Дана строка: <?= $string ?></p>
        <p>Результат: <?= $result ?></p>
    <?php }
?>

</body>
</html>
