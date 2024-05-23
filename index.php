<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="___container">
        <button onclick="change('1')" class="_btn">Завдання 1</button>
        <button onclick="change('2')" class="_btn">Завдання 2</button>
        <button onclick="change('3')" class="_btn">Завдання 3</button>
        <button onclick="change('4')" class="_btn">Завдання 4</button>
    </div>
    <script>
        function change(task) {
            window.location.href = `task${task}.php`;
        }
    </script>
</body>
</html>