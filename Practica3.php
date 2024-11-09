<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 3</title>
</head>
<body>
    <h1>Operadores en PHP</h1>

    <?php
    $a = 10;
    $b = 5;
    $c = "Mi";
    $d = "Codigo";

    echo "<h2>Operadores Aritméticos</h2>";
    echo "<p>Esto es una Suma (a + b = $a + $b): " . ($a + $b) . "</p>";
    echo "<p>Esta es una Resta (a - b = $a - $b): " . ($a - $b) . "</p>";
    echo "<p>Esta es una Multiplicación (a * b = $a * $b): " . ($a * $b) . "</p>";
    echo "<p>Esta es una División (a / b = $a / $b): " . ($a / $b) . "</p>";
    echo "<p>Esta es un Módulo (a % b = $a % $b): " . ($a % $b) . "</p>";
    echo "<p>Incremento (++a): " . (++$a) . " (pre-incremento)</p>";
    echo "<p>Decremento (--a): " . (--$a) . " (pre-decremento)</p>";

    echo "<h2>Operadores de Comparación</h2>";

    echo "<p>Igual (a == b): $a == $b : " . var_export($a == $b, true) . "</p>";
    echo "<p>Idéntico (a === b): $a === $b : " . var_export($a === $b, true) . "</p>";
    echo "<p>Distinto (a != b): $a != $b : " . var_export($a != $b, true) . "</p>";
    echo "<p>Otra forma de distinto (a <> b): $a <> $b : " . var_export($a <> $b, true) . "</p>";
    echo "<p>No idéntico (a !== b): $a !== $b : " . var_export($a !== $b, true) . "</p>";
    echo "<p>Mayor que (a > b): $a > $b : " . var_export($a > $b, true) . "</p>";
    echo "<p>Menor que (a < b): $a < $b : " . var_export($a < $b, true) . "</p>";
    echo "<p>Mayor o igual (a >= b): $a >= $b : " . var_export($a >= $b, true) . "</p>";
    echo "<p>Menor o igual (a <= b): $a <= $b : " . var_export($a <= $b, true) . "</p>";

    echo "<h2>Operadores de Asignación</h2>";
    $a = 10; // Reset de $a
    echo "<p>Asignación (a = b): $a = $b : " . ($a = $b) . "</p>";
    $a = 10;
    echo "<p>Suma y asigna (a += b): $a += $b : " . ($a += $b) . "</p>";
    $a = 10;
    echo "<p>Resta y asigna (a -= b): $a -= $b : " . ($a -= $b) . "</p>";
    $a = 10;
    echo "<p>Multiplicación y asigna (a *= b): $a *= $b : " . ($a *= $b) . "</p>";
    $a = 10;
    echo "<p>División y asigna (a /= b): $a /= $b : " . ($a /= $b) . "</p>";
    $a = 10;
    echo "<p>Módulo y asigna (a %= b): $a %= $b : " . ($a %= $b) . "</p>";

    echo "<h2>Operadores Lógicos</h2>";
    echo "<p>AND (a > 5 && b < 10): ($a > 5 && $b < 10): " . var_export($a > 5 && $b < 10, true) . "</p>";
    echo "<p>OR (a > 5 || b < 10): ($a > 5 || $b < 10): " . var_export($a > 5 || $b < 10, true) . "</p>";
    echo "<p>NOT (!a > b): !($a > $b): " . var_export(!($a > $b), true) . "</p>";

    echo "<h2>Operadores de Cadena</h2>";
    echo "<p>Concatenación (c . d): \"$c\" . \"$d\" : " . ($c . $d) . "</p>";
    $c .= $d;
    echo "<p>Concatenación y asignación (c .= d): \"$c\"</p>";
    ?>

</body>
</html>

