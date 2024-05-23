<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="_container">
        <form action="data2.php" method="get">
            <div class="mb-3">
                <label for="first" class="form-label">Перше число</label>
                <input type="number" class="form-control" id="first" name="first">
            </div>
            <div class="mb-3">
                <label for="second" class="form-label">Друге число</label>
                <input type="number" class="form-control" id="second" name="second">
            </div>
            <button type="submit" class="btn btn-primary">Обчислити</button>
        </form>
    </div>
</body>
</html>