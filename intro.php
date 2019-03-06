<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="style.css" />
		<title>Moje Hobby</title>
	</head>
	<body>
		<div id="pojemnik">
			<header id="naglowek">
                <figure>
                    <img class="tlo_naglowek" alt="Marcel_tło" src="spacee.jpg" />
                </figure>
			</header>
			<br/>
			<nav id="MENU">
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
			</nav>
            <br/><br /><br />
			<section id="TRESC">
						<p class="tytul">ASTRONOMIA</p>
                        <article><h2>
                            Astronomia (gr. ἀστρονομία astronomía) – nauka przyrodnicza zajmująca się badaniem ciał niebieskich (np. gwiazd, planet, komet, mgławic, gromad i galaktyk) oraz zjawisk, które zachodzą poza Ziemią, jak również tych, które oddziałują w jej atmosferze, wnętrzu lub na powierzchni, a są pochodzenia pozaplanetarnego (np. neutrina, wtórne promieniowanie kosmiczne).<br /><br /></h2>
                       
		<h3>Skoncentrowana jest na fizyce, chemii, meteorologii i ruchu ciał niebieskich, zajmuje się także powstaniem i rozwojem (ewolucją) Wszechświata.<br /><br />
                        Astronomia jest jedną z najstarszych nauk. Kultury prehistoryczne pozostawiły astronomiczne artefakty, takie jak egipskie piramidy, czy Stonehenge. Cywilizacje, takie jak: Babilończycy, Grecy, Chińczycy, Hindusi i Majowie wykonywali metodyczne obserwacje nocnego nieba.<br /></h3>
                            Do Wykonanie projektu wykrozystalem:
                            <ol>
                                <li>Html</li>
                                <li>CSS</li>
                                <li>W3C</li>
                            </ol>
                        </article>
                    <?php
                    $t = date("H");

                    if ($t < "6") {
                    echo "tak wczesnie a ty juz chcesz planety ogladac?";
                    }elseif ($t < "12") {
			echo "moze jakis lunch co?";
		    }elseif ($t < "14") {
		    echo "czas na nauke !";
		    }
		     elseif ($t < "20") {
                    echo "drzemka!!!!!!!";
                    } else {
                    echo "teraz spimy!!!";
                    }
                    ?>
                    </section>
            <footer id="stopka">
                <p class="stopka">
                    Made by Marcel Dajnowicz<br />
                </p>
            </footer>
		</div>

