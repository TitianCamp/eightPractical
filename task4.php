<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 3</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="_container">
        <form action="data4.php" method="post">
            <div class="mb-3">
                <label for="first" class="form-label">Перший рядок</label>
                <input type="text" class="form-control" id="first" name="first">
            </div>
            <div class="mb-3">
                <label for="second" class="form-label">Другий рядок</label>
                <input type="text" class="form-control" id="second" name="second">
            </div>
            <button type="submit" class="btn btn-primary">Вивести</button>
        </form>
    </div>
</body>
</html>