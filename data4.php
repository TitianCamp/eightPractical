<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="__container">
        <?php 
            if ($_POST["first"] == '' || $_POST["second"] == '') {
                echo "<h2 style='text-align: center;'>Помилка! <br> Поверніться і введіть рядки заново</h2>";
            } else {
                $e = $_POST["first"];
                $f = $_POST["second"];

                echo "<h3>Прямий порядок: $e $f</h3>";
                echo "<h3>Зворотній порядок: $f $e</h3>";
            }
        ?>
    </div>
</body>
</html>