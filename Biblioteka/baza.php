
<?php

$polaczenie = mysqli_connect(
    "localhost",
    "root",
    "",
    "biblioteka"
);

if (!$polaczenie) {
    die("Nie udało się połączyć z bazą danych: " . mysqli_connect_error());
}

mysqli_set_charset($polaczenie, "utf8mb4");

$wynik = mysqli_query(
    $polaczenie,
    "SELECT * FROM ksiazki ORDER BY Id ASC"
);

if (!$wynik) {
    die("Błąd pobierania książek: " . mysqli_error($polaczenie));
}

?>
