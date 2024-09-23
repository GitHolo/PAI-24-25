<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post"> 
    <input type="number" name="num" placeholder="Enter grade %"> 
    <input type="submit" class="button" name="Convert" value="Convert"> 
</form> 

<?php 
    $letterGrade = "";
function convertGrade() { 
    global $letterGrade; 
    $grade = $_POST['num']; 
    if ($grade > 0 && $grade <= 100) { 
    if ($grade == 100) { 
        $letterGrade = 'Celujący'; 
    } else if ($grade >= 90) { 
        $letterGrade = 'Bardzo Dobra'; 
    } else if ($grade >= 75) { 
        $letterGrade = 'Dobra'; 
    } else if ($grade >= 60) { 
        $letterGrade = 'Dostateczna'; 
    } else if ($grade >= 30) { 
        $letterGrade = 'Dopuszczająca'; 
    } else if ($grade >= 0) {  
        $letterGrade = 'Niedopuszczająca'; 
    } 
    } else { 
        echo "Proszę podać prawidłową liczbę od 0 do 100."; 
    }
} 

if (isset($_POST['Convert'])) { 
    convertGrade(); 
} 
?>

<p><?php echo $letterGrade;?></p>
        <br>
        <form method="post">
            <input type="number" name="num2" placeholder="Liczba podzielna przez 6">
            <input type="submit" class="button" name="check" value="Sprawdź"/>
</form>
       
            <?php
                $num = '';
                $result = '';
                function checkDivisibility() {
                    global $num, $result;
                    $num = $_POST['num2'];
                    if ($num % 2 == 0 AND $num % 3 == 0) {
                        $result = $num.' jest liczbą podzielną przez 6.';
                    } else {
                        $result = $num.' nie jest liczbą podzielną przez 6.';
                    }
                }
                if (isset($_POST['check'])) {
                    checkDivisibility();
                }
            ?>
            <p><?php echo $result;?></p>
            <br>
            <button onclick="tenEvenNumbers()">Wypisz 10 liczb parzystych od 2</button>
            <script>
                function tenEvenNumbers() {
                    count = 0;
                    num2 = 2;
                    while (count < 10) {
                        if (num2 % 2 == 0) {
                            console.log(num2);
                            count++;
                        }
                        num2++;
                    }
                }</script>
                <br>
                <input type="number" id="num3" placeholder="Liczba">
                <button onclick="silnia()">Oblicz silnie</button>
                <script>
                    function silnia() {
                        num3 = document.getElementById('num3').value;
                        result = 1;
                        for (let i = 2; i <= num3; i++) {
                            result *= i;
                        }
                        alert(`Silnia liczby ${num3} to ${result}.`);
                        document.getElementById('num3').value = '';
                    }</script>
                <br>
                <input type="number" id="num4" placeholder="Czy cyfry liczby 2cyfrowej są parzyste lub ich suma jest równa 4">
                <button onclick="checkNumber()">Sprawdź</button>
                <script>
                    function checkNumber() {
                        num4 = document.getElementById('num4').value;
                        if (num4.length == 2) {
                            firstDigit = parseInt(num4[0]);
                            secondDigit = parseInt(num4[1]);
                            if (firstDigit % 2 == 0 || secondDigit % 2 == 0) {
                                alert("Cyfry liczby są parzyste.");
                                if (firstDigit % 2 == 0){
                                     alert("Pierwsza cyfra jest parzysta.");
                                     
                                }else{
                                    alert("Pierwsza cyfra nie jest parzysta.");
                                }
                                if (secondDigit % 2 == 0){
                                     alert("Druga cyfra jest parzysta.");
                                     
                                }else{
                                    alert("Druga cyfra nie jest parzysta.");
                                }
                            } else if (firstDigit + secondDigit == 4) {
                                alert("Suma cyfr liczby jest równa 4.");
                            } else {
                                alert("Cyfry liczby nie są parzyste ani ich suma nie jest równa 4.");
                            }
                        } else {
                            alert("Podana liczba nie jest 2 cyfrowa.");
                        }
                        document.getElementById('num4').value = '';
                    }</script>
    </main>
</body>
</html>