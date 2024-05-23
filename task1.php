<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<?php 
    $foo = "Глобальна змінна";
    $_POSTD = "Це було надіслано через POST";
    $_REQUESTD = "Це було надіслано через REQUEST";
    $sessiontest = $_SESSION['test'] = 'Це було зроблене сеансом';
    $custom_variable = "Це було зроблене через ENV";
    putenv("custom_variable=$custom_variable");
    $envtest = getenv('custom_variable');
    setcookie('cktest', 'Це було зроблене через Cookies', time() + 3600, '/');
    $cktest = $_COOKIE['cktest'];
?>
<body>
    <h1 style="margin: 50px; text-align: center;">Суперглобальні змінні PHP</h1>
    <table class="table table-bordered" style="width: 1200px; margin: 100px auto 0;">
        <tr thead class="table-dark">
            <th>Змінна</th>
            <th>Значення</th>
            <th>Результат</th>
        </tr>
        <tr>
            <td>$GLOBALS</td>
            <td>Посилається на всі змінні, доступні в глобальній області</td>
            <td><?php echo($GLOBALS["foo"]);?></td>
        </tr>
        <tr>
            <td>$_SERVER: Server Protocol</td>
            <td>Масив, що містить таку інформацію, як заголовки, шляхи та розташування сценаріїв</td>
            <td><?php echo($_SERVER['SERVER_PROTOCOL']);?></td>
        </tr>
        <tr>
            <td>$_GET</td>
            <td>Асоціативний масив змінних, що передається в поточний сценарій через параметри URL-адреси</td>
            <td><?php echo("Це було надіслано через GET"); ?></td>
        </tr>
        <tr>
            <td>$_POST</td>
            <td>Асоціативний масив змінних, що передається в поточний сценарій за допомогою методу HTTP POST</td>
            <td><?php echo($_POSTD);?></td>
        </tr>
        <tr>
            <td>$_FILES</td>
            <td>Асоціативний масив елементів, завантажених у поточний сценарій за допомогою методу POST</td>
            <td><?php echo("Файл завантажено");?></td>
        </tr>
        <tr>
            <td>$_COOKIE</td>
            <td>Асоціативний масив змінних, переданий до поточного сценарію через файли cookie HTTP</td>
            <td><?php echo($cktest);?></td>
        </tr>
        <tr>
            <td>$_SESSION</td>
            <td>Асоціативний масив, що містить змінні сеансу, доступні для поточного сценарію</td>
            <td><?php echo("$sessiontest");?></td>
        </tr>
        <tr>
            <td>$_REQUEST</td>
            <td>Асоціативний масив, який за умовчанням містить вміст $_GET, $_POST і $_COOKIE</td>
            <td><?php echo($_REQUESTD);?></td>
        </tr>
        <tr>
            <td>$_ENV</td>
            <td>Асоціативний масив змінних, переданий поточному сценарію через метод середовища</td>
            <td><?php echo("$envtest");?></td>
        </tr>
    </table>
</body>
</html>