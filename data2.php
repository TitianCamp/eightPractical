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
            if ($_GET["first"] == '' || $_GET["second"] == '') {
                echo "<h2 style='text-align: center;'>Помилка! <br> Поверніться і введіть обидва числа</h2>";
            } else {
                $a = $_GET["first"];
                $b = $_GET["second"];

                $sum = $a + $b;
                $product = $a * $b;
                $difference = $a - $b;
                $quotient = ($b != 0) ? $a / $b : 'Ділення на нуль';
                
                echo "<h2><u>Метод GET</u></h2>";
                echo "<h3>Сума: $sum</h3>";
                echo "<h3>Добуток: $product</h3>";
                echo "<h3>Різниця: $difference</h3>";
                echo "<h3>Частка: $quotient</h3>";
            }
        ?>
    </div>
</body>
</html>