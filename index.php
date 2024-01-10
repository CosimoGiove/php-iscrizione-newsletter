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
            Email: <input type="text" name="email">
            <input type="submit">
        </form>
        <?php
        function validateEmail($email)
        {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return true;
            } else {
                return false;
            }
        }

        if (isset($_GET['email'])) {
            $email = $_GET['email'];
            if (validateEmail($email)) {
                echo "<div class='alert alert-success'>l'indirizzo email contiene un punto e una chiocciola $email</div>";
              
            } else {
                echo "<div class='alert alert-warning'>
                 errore, l'email non contiene un punto è una chiocciola $email
              </div>";
            }
        }
        ?>
    </main>
</body>

</html>