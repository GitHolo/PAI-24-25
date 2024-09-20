<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>Wycieczki krajoznawcze</title>
    <link rel='stylesheet' href='styl4.css'/>
</head>
<body>
    <header>
        <h1>WITAMY W BIURZE PODRÓŻY</h1>
    </header>
    <div id="dane">
        <h3>ARCHIWUM WYCIECZEK</h3>
        <!-- skrypt 1 --> 
         <?php
              $wycieczki = array(
                  array('Kraj' => 'Włochy', 'Cena' => 1200),
                  array('Kraj' => 'Francja', 'Cena' => 1200),
                  array('Kraj' => 'Hiszpania', 'Cena' => 1400)
              );
              echo "<ol>";
              foreach ($wycieczki as $wycieczka) {
                  echo "<li>". $wycieczka['Kraj']." ". $wycieczka['Cena']. " zł</li>";
             }
             echo "</ol>";
         ?>
    </div>
    <section>
        <div class="left">
            <h3>NAJTANIEJ...</h3>
            <table>
                <tr>
                    <td>Włochy</td>
                    <td>od 1200 zł</td>
                </tr>
                <tr>
                    <td>Francja</td>
                    <td>od 1200 zł</td>
                </tr>
                <tr>
                    <td>Hiszpania</td>
                    <td>od 1400 zł</td>
                </tr>
            </table>    
    </div>
        <div class="center">
            <h3>TU BYLIŚMY</h3>
            <!-- skrypt 2 -->
             <?php
             ?>
        </div>
        <div class="right">
            <h3>SKONTAKTUJ SIĘ</h3>
            <a href="mailto:wycieczki@wycieczki.pl">napisz do nas</a>
            <p>telefon: 555666777</p>
        </div>
    </section>
    <footer>
        <p>Stronę wykonał: PESEL</p>
    </footer>
</body>
</html>