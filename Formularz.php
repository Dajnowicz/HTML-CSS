 <!DOCTYPE html>
<html>
	<head>
<meta charset="UTF-8" />
		<link rel="stylesheet" href="style.css" />
		<title>Moje Hobby</title>
	</head>
	<body>
        <div id="pojemnik">

            <div id="naglowek">
                <figure>
                    <img class="tlo_naglowek" alt="Marcel_tło" src="spacee.jpg" />
                </figure>
            </div>
            <div id="MENU">
                <ul>
                    <li><a href="Intro.php">Strona Główna</a></li>
                    <li><a href="Planety.html">Planety w Układzie Słonecznym</a></li>
                    <li class="dropdown">
                        <a href="galeria.html" class="dropbtn">Galeria</a>
                        <div class="dropdown-content">
                            <a href="obrazki.html">Galaktyki</a>
                            <a href="obrazki2.html">Planety</a>
                            <a href="obrazki3.html">Gwiazdy</a>
                        </div>
                    <li><a href="Formularz.php">Formularz</a></li>
                </ul>
            </div>
            <br /><br /><br />
            <div id="TRESC">
                <p class="tekst3">
                    Wypełnij Formularz!!!
                </p>
                <img class="statek" alt="1"  src="rocket.jpg" />
                <br /><br /><br /><br /><br />
                <form action="action.php" method="post">
                    <input type="text" name="name" value="Proszę Podać Imię" /><br /><br />
                    <input type="text" name="nazwisko" value="Proszę Podać Nazwisko" /><br /><br />
                    Proszę Podać Date Urodzenia<br />
                    <input type="datetime-local" name="age" value="1996-01-01T12:05" /><br /><br />
                    <input type="radio" name="plec" value="kobieta" />Kobieta<input type="radio" name="plec" value="mężczyzna" />Mężczyzna<br /><br />
                    Jak Podoba Ci się Ta Strona?<br />
                    <input type="range" name="Punkty" min="0" max="10" value="5" /><br /><br />
                    <input type="text" name="email" value="E-Mail" /><br /><br />
                    <input type="tel" name="Telefon" value="Numer Telefonu" /><br /><br />
                    Proszę Podać Swój Ulubiony Kolor.<br />
                    <input type="color" name="ulubionykol" value="#FF0000" /><br /><br />
                    <br />
                    <input type="submit" value="Wyślij" />
                    <input type="reset" value="Wyczyść dane" />
<br /><br />
                </form>

MIX SLOWNY
<?php
$name = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
}

function test_input($data) {
  $data = htmlspecialchars($data);
  return $data;
}

?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 


                    Wpisz <input type="text" name="name">
                    <br><br>
                    <input type="submit" value="Wyślij" />
                </form>

<?php
echo str_shuffle($name);
?>


                <br /><br /><br />
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="700" height="300">
                    <rect id="prostokat" x="20" y="20" width="180" height="120" style="fill: #ff8e36; stroke: #000; stroke-width: 3px" />
                    <animate xlink:href="#prostokat" attributeName="width" values="120; 2250; 120" keyTimes="0; 0.5; 1" dur="10s" begin="mouseover" end="mouseout" />
                    <animate xlink:href="#prostokat" attributeName="fill" values="red; orange; yellow; green; blue; purple; blue; green; yellow; orange; red" keyTimes="0; 0.1; 0.2; 0.3; 0.4; 0.5; 0.6; 0.7; 0.8; 0.9; 1" dur="10s" begin="mouseover" end="mouseout" />
                </svg>
                <p>Twoj szczesliwy numerek na dzis to:</p>

               <p id="demo"></p> 

                <script>
                document.getElementById("demo").innerHTML =
                Math.floor(Math.random() * 101);
                </script>
                Inne Pytania? Napisz!
                <a href="mailto:dajnowiczmarcel@gmail.com">E-Mail</a>
            </div> 
            <div id="stopka">
                <p class="stopka">
                    Made by Marcel Dajnowicz<br />
                </p>
            </div>
        </div>
</body>

</html>

