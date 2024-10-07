<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
</head>
<body>
    <form action="output.php" method="get">
        Number: <input type="number" name="num"> <br>
        <button type="submit">Summation</button> <button type="submit" name="fac">Factorial</button>
    </form>
</body>
</html>