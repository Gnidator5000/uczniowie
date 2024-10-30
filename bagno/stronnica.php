<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuwanie</title>
</head>
<body>
    <h2>Usuwanie ucznia</h2>
    <form action="" method="post">
        ID ucznia: <input type="number" name="id" required><br>
        <button type="submit" name="usun">Usun ucznia</button>
    </form>

    <?php
    $db = new mysqli('localhost', 'root', '', 'dziennik12');

    if ($db->connect_error) {
        die("Polaczenie nie powiodlo sie: " . $db->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["usun"])) {
        $id = (int)$_POST["id"]; 

        $kw = "DELETE FROM uczniowie WHERE id=$id";

        if ($db->query($kw) === TRUE) {
            echo "Uczen o ID $id zostal usuniety pomyslnie.<br>";
        } else {
            echo "Blad: " . $db->error;
        }
    }
    echo '<a href="http://localhost/bagno/stronka.php"> Przekierowanie do dodawania</a><br>';
    echo '<a href="http://localhost/bagno/strona.php"> Przekierowanie do ukazania wszystkich uczniow</a>';
    $db->close();
    ?>
</body>
</html>