<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php 
            if ($_POST["first"] == '' || $_POST["second"] == '') {
                echo "<h2 style='text-align: center;'>Помилка! <br> Поверніться і введіть обидва числа</h2>";
            } else {
                $c = $_POST["first"];
                $d = $_POST["second"];

                $sum = $c + $d;
                $product = $c * $d;
                $difference = $c - $d;
                $quotient = ($d != 0) ? $c / $d : 'Ділення на нуль';
                
                echo "<h2><u>Метод POST</u></h2>";
                echo "<h3>Сума: $sum</h3>";
                echo "<h3>Добуток: $product</h3>";
                echo "<h3>Різниця: $difference</h3>";
                echo "<h3>Частка: $quotient</h3>";
            }
        ?>
    </div>
</body>
</html>