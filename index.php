<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php iscrizione newsletter</title>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <main>
        <form action="index.php" method="GET">
            <div class="text-center mt-3 mb-3">
                Email: <input type="text" name="email">
                <input type="submit">
            </div>
        </form>
        <?php
        include __DIR__ . "/functions.php"
        ?>
    </main>
</body>

</html>