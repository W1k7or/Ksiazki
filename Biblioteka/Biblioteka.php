
<?php
require_once "baza.php";
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="skeo.css">
    <title>Biblioteka</title>
</head>

<body>

    <header>
        <h1>Biblioteka</h1>
        <p>Gdzie kruki rozumieją słowa</p>
    </header>

    <nav>
        <ul>
            <li><a href="#welcome">Strona główna</a></li>
            <li><a href="#library">Katalog</a></li>
            <li><a href="#book-form">Dodaj książkę</a></li>
        </ul>
    </nav>

    <main>

        <div class="welcome" id="welcome">
            <h1>Witaj w Bibliotece!</h1>

            <p>
                Jesteśmy zaszczyceni, że postanowiłeś wstąpić do nas na chwilę.
                <br>
                Rozgość się i przejrzyj nasze propozycje.
            </p>
        </div>

        <div class="library" id="library">

            <h2>Katalog</h2>
            <p>Spójrz na nasze propozycje. Przyjacielu.</p>

            <div class="book-list">

                <?php
                if (mysqli_num_rows($wynik) > 0) {

                    while ($ksiazka = mysqli_fetch_assoc($wynik)) {
                ?>

                        <div class="book">

                            <?php if (!empty($ksiazka['Okladka'])) { ?>

                                <img
                                    src="<?php echo htmlspecialchars($ksiazka['Okladka'], ENT_QUOTES, 'UTF-8'); ?>"
                                    alt="Okładka książki: <?php echo htmlspecialchars($ksiazka['Tytul'], ENT_QUOTES, 'UTF-8'); ?>"
                                    class="book-cover"
                                >

                            <?php } else { ?>

                                <p>Brak okładki</p>

                            <?php } ?>

                            <h3>
                                <?php echo htmlspecialchars($ksiazka['Tytul'], ENT_QUOTES, 'UTF-8'); ?>
                            </h3>

                            <p>
                                Autor:
                                <?php echo htmlspecialchars($ksiazka['Autor'], ENT_QUOTES, 'UTF-8'); ?>
                            </p>

                            <p>
                                Rok wydania:
                                <?php echo htmlspecialchars($ksiazka['Rok'], ENT_QUOTES, 'UTF-8'); ?>
                            </p>

                            <p>
                                Gatunek:
                                <?php echo htmlspecialchars($ksiazka['Gatunek'], ENT_QUOTES, 'UTF-8'); ?>
                            </p>

                        </div>

                <?php
                    }

                } else {
                    echo "<p>Nasze półki są obecnie puste. Dodaj pierwszą książkę!</p>";
                }
                ?>

            </div>
        </div>

        <div class="book-form" id="book-form">

            <h2>Uzupełnij księgozbiór</h2>

            <form action="dodaj.php" method="post">

                <input type="text" name="Tytul" placeholder="Tytuł książki" required>
                <br>

                <input type="text" name="Autor" placeholder="Autor książki" required>
                <br>

                <input type="number" name="Rok" placeholder="Rok wydania" required>
                <br>

                <input type="text" name="Gatunek" placeholder="Gatunek książki" required>
                <br>

                <input type="text" name="Okladka" placeholder="Ścieżka do okładki, np. covers/dracula.jpg">
                <br>

                <input type="submit" value="Dodaj książkę">

            </form>

        </div>

    </main>

    <footer>
        <p>Biblioteka — Gdzie kruki rozumieją słowa</p>
    </footer>

</body>

</html>
