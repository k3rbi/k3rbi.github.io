<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ćwiczenia PHP</title>
</head>
<body>
    <h1>Ćwiczenia z PHP</h1>

    <!-- Zadanie 1 -->
    <h2>Zadanie 1</h2>
    <ol>
        <?php
        $i = 0;
        while ($i < 6) {
            echo "<li>egzamin zawodowy tuż, tuż</li>";
            $i++;
        }
        ?>
    </ol>

    <!-- Zadanie 2 -->
    <h2>Zadanie 2</h2>
    <p>
        <?php
        $mniejsze100 = [];
        $wieksze100 = [];
        for ($i = 1; $i <= 200; $i++) {
            if ($i % 5 == 0 && $i % 10 != 0) {
                echo $i . "<br>";
                if ($i < 100) {
                    $mniejsze100[] = $i;
                } else {
                    $wieksze100[] = $i;
                }
            }
        }
        ?>
    </p>

    <!-- Zadanie 3 -->
    <h2>Zadanie 3</h2>
    <p>
        <table border="1">
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr><td>$i losowanie</td><td>" . rand(1, 100) . "</td></tr>";
            }
            ?>
        </table>
    </p>

    <!-- Zadanie 4 -->
    <h2>Zadanie 4</h2>
    <p>
        <?php
        define('PI', 3.14159);
        
        function kolo($r) {
            $pole = PI * pow($r, 2);
            $obwod = 2 * PI * $r;
            return [
                'pole' => round($pole, 2),
                'obwod' => round($obwod, 2)
            ];
        }
        
        $r = 5;
        $result = kolo($r);
        echo "Pole koła o promieniu $r wynosi " . $result['pole'] . ", a obwód to " . $result['obwod'] . ".";
        ?>
    </p>

    <!-- Zadanie 5 -->
    <h2>Zadanie 5</h2>
    <form method="post">
        <label for="side1">Długość boku 1:</label>
        <input type="number" name="side1" id="side1" required><br>
        <label for="side2">Długość boku 2:</label>
        <input type="number" name="side2" id="side2" required><br>
        <input type="submit" value="Sprawdź">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $side1 = $_POST['side1'];
        $side2 = $_POST['side2'];
        
        function koloczysq($a, $b) {
            if ($a == $b) {
                return "Kwadrat o polu " . ($a * $b);
            } else {
                return "Prostokąt o polu " . ($a * $b);
            }
        }

        echo koloczysq($side1, $side2);
    }
    ?>
    <p>Wprowadź wartości boków, aby sprawdzić, czy jest to kwadrat, czy prostokąt.</p>

    <!-- Zadanie 6 -->
    <h2>Zadanie 6</h2>
    <p>
        <?php
        $names = ['Majewski', 98, "Bobek", 'Kowal', "Nowak", 125, 7643, "Malec", "Rygel", "Kelam", 79.34, "Ames", "Jarcz", "Pecawski", 2.02, "Dyka", "Zerat", "Lirec", 985, "Wyka"];
        $wszystkieim = count($names);
        echo "Ilość elementów w tablicy: $wszystkieim<br>";

        $female = [];
        $men = [];
        
        foreach ($names as $name) {
            if (is_string($name)) {
                if (substr($name, -3) == "ski") {
                    $men[] = $name;
                } else {
                    $female[] = $name;
                }
            }
        }
        
        echo "Tablica mężczyzn: " . implode(", ", $men) . "<br>";
        echo "Tablica kobiet: " . implode(", ", $female) . "<br>";
        ?>
    </p>
</body>
</html>