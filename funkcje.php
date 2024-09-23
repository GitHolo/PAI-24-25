<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <input type="number" name="num" placeholder="Number 1">
    <input type="number" name="num2" placeholder="Number 2">
    <br>
    <input type="submit" name="add" value="Dodaj">
    <input type="submit" name="minus" value="Odejmij">
    <input type="submit" name="mult" value="Mnoż">
    <input type="submit" name="div" value="Dziel">
</form>
<p>
<?php
if (isset($_POST['num']) && isset($_POST['num2'])) {
    $num1 = $_POST['num'];
    $num2 = $_POST['num2'];
    if (isset($_POST['add'])) {
        echo "Suma: " . ($num1 + $num2);
    } else if (isset($_POST['minus'])) {
        echo "Różnica: " . ($num1 - $num2);
    } else if (isset($_POST['mult'])) {
        echo "Iloczyn: " . ($num1 * $num2);
    } else if (isset($_POST['div'])) {
        if ($num2 == 0) {
            echo "Nie dziel przez zero!";
        } else {
            echo "Iloraz: " . ($num1 / $num2);
        }
    }
}else{
    echo "Wypełnij wszystkie pola!";
}
?></p>
<br>

<form method="post">
    <input type="number" name="num3" placeholder="Number 1">
    <input type="number" name="num4" placeholder="Number 2">
    <input type="number" name="num5" placeholder="Number 3">
    <br>
    <input type="submit" value="Największa liczba">
</form>
<p>
<?php
if (isset($_POST['num3']) && isset($_POST['num4']) && isset($_POST['num5'])) {
    $num3 = $_POST['num3'];
    $num4 = $_POST['num4'];
    $num5 = $_POST['num5'];
    $max = max($num3, $num4, $num5);
    echo "Największa liczba: ". $max;
} else {
    echo "Wypełnij wszystkie pola!";
}
?>
</p>
<br>
<form method="post">
    <input type="number" name="kg" placeholder="Kilogramy">
    <input type="number" name="cm" placeholder="Centymetry">
    <br>
    <input type="submit" value="Oblicz BMI">
    </form>
    <p>
    <?php
    if (isset($_POST['kg']) && isset($_POST['cm'])) {
        $kg = $_POST['kg'];
        $cm = $_POST['cm'];
        $bmi = $kg / (($cm / 100) * ($cm / 100));
        echo "Twoje BMI: ". round($bmi, 2);
        if ($bmi < 18.5) {
            echo " Za mało!";
        } elseif ($bmi >= 18.5 && $bmi < 25) {
            echo " W normie!";
        } elseif ($bmi >= 25 && $bmi < 30) {
            echo " Za dużo!";
        }
    } else {
        echo "Wypełnij wszystkie pola!";
    }
    ?>
    </p>
    <form method="post">
        <label for="date">Data urodzenia pierwszej osoby:</label>
        <input type="date" name="date" placeholder="Data urodzenia w formacie YYYY-MM-DD Pierwszej osoby"><br>
        <label for="date2">Data urodzenia drugiej osoby:</label>
        <input type="date" name="date2" placeholder="Data urodzenia w formacie YYYY-MM-DD Drugiej osoby">
        <br>
        <input type="submit" value="Kto jest starszy?">
    </form>
    <p>
        <?php
        if (isset($_POST['date']) && isset($_POST['date2'])) {
            $date1 = DateTime::createFromFormat('Y-m-d', $_POST['date']);
            $date2 = DateTime::createFromFormat('Y-m-d', $_POST['date2']);
            $diff = $date1->diff($date2);
            echo "Różnica wieków: ". $diff->y. " lat, ";
            if ($date1 < $date2) {
                echo "pierwsza osoba jest starsza";
            } elseif ($date1 > $date2) {
                echo "druga osoba jest starsza";
            } else {
                echo "obie osoby mają tyle samo lat";
            }
        } else {
            echo "Wypełnij wszystkie pola!";
        }
        ?>
    </p>
    <form method="post">
        <label for="date3">Rok:</label>
        <input type="number" name="year" min="1" max="2280" step="1" value="2024" /> <!-- Czy dany rok jest przestępny? Od roku 1 do końca świata-->
        <br>
        <input type="submit" value="Czy jest przestępny?">
    </form>
    <p>
        <?php
        if (isset($_POST['year'])) {
            $year = $_POST['year'];
            /*
                Obecnie powszechnie stosuje się rachubę zgodną z kalendarzem gregoriańskim, wprowadzonym w 1582 roku bullą papieża Grzegorza XIII („Inter gravissimas”), w której wprowadzono następującą modyfikację kalendarza juliańskiego: nie uznaje się lat przestępnych wypadających na koniec wieku, z wyjątkiem tych, w których liczba stuleci jest podzielna przez 4. Inaczej mówiąc w myśl tej reguły latami przestępnymi są te, których numeracja:

                    - jest podzielna przez 4 i niepodzielna przez 100 lub
                    - jest podzielna przez 400.
                    
                Dotychczas według tej reguły lata 1600 i 2000 były przestępnymi, a lata 1700, 1800, 1900 nie. W przyszłości rok 2100 nie będzie rokiem przestępnym. Modyfikacja kasuje 15 lat przestępnych na każde 2000 lat co zmniejsza błąd kalendarza juliańskiego o 1 dobę na 133 lata, dlatego błąd tej rachuby wynosi 1 dobę na nieco ponad 3322 lata.

            Źródło: https://pl.wikipedia.org/wiki/Rok_przest%C4%99pny
            */
            if (($year % 4 == 0 && $year % 100!= 0) || ($year % 400 == 0)) {
                echo $year. " jest przestępny.";
            } else {
                echo $year. " nie jest przestępny.";
            }
        } else {
            echo "Wypełnij wszystkie pola!";
        }
       ?>
       </p>
<br>
</body>
</html>