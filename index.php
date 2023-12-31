<?php 
    include_once __DIR__ . '/partials/functions.php';
    $passwordLength = intval($_GET['passwordLength']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Password Generator</title>
</head>
<body>
    <form action="./index.php" method="get" class="m-5">
        <input type="number" name="passwordLength" id="password_length" placeholder="Type the desired password length">
        <input type="submit" value="Generate">
    </form>
    <pre class="m-5 fs-5 text-center"><?php echo generatePassword($passwordLength);?></pre>
</body>
</html>