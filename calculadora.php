<!DOCTYPE html>
<html>
<head>
    <title>Soma</title>
</head>
<body>
    <form method="post" action="calculadora.php">
        <input type="number" name="n1">
        <input type="number" name="n2">
        <input type="submit" name="submit" value="Soma">
    </form>
    <?php
    if (isset($_POST['submit'])) 
    {
        $n1=$_POST['n1'];
        $n2=$_POST['n2'];
        $resultado=$n1 + $n2;
        echo ":".$resultadoo;
    }
    ?>
</body>
</html>
