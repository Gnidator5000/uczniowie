<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodawanie</title>
</head>
<body>
    <h2>DODAWANIE UCZNIA</h2>
    <form action="" method="post">
        imie: <input type="text" name="imie" required><br>
        nazwisko: <input type="text" name="nazwisko" required><br>
        email: <input type="email" name="email" required><br>
        wiek: <input type="number" name="wiek" required><br>
        <button type="submit" name="dodaj">Dodaj mnie:3</button>
        <button type="reset">wyczysc</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["dodaj"])) {

        $db = mysqli_connect('localhost', 'root', '', 'dziennik12');

        if (!$db) {
            die("Polaczenie nie powiodlo sie: " . mysqli_connect_error());
        }

        $imie = mysqli_real_escape_string($db, $_POST['imie']);
        $nazwisko = mysqli_real_escape_string($db, $_POST['nazwisko']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $wiek = (int)$_POST['wiek']; 

        $kw = "INSERT INTO uczniowie (imie, nazwisko, email, wiek) VALUES ('$imie', '$nazwisko', '$email', $wiek)";

        if (mysqli_query($db, $kw)) {
            echo "Uczen zostal dodany pomyslnie.<br>";
        } else {
            echo "Blad: " . mysqli_error($db);
        }
        mysqli_close($db);
    }
    ?>

    <a href="http://localhost/bagno/stronnica.php"> Przekierowanie do usuwania ucznia</a><br>
    <a href="http://localhost/bagno/strona.php"> Przekierowanie do ukazania wszystkich uczniow</a>
</body>
</html>