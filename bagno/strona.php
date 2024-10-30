<?php
$db = new mysqli ('localhost', 'root', '', 'dziennik12');
$kw = "SELECT * FROM uczniowie";

$result = mysqli_query($db, $kw);
while($row = mysqli_fetch_array($result)){
    echo '<p>'.$row[0].'. '.$row[1].'  '.$row[2].'</p>';
};
echo'<a href="http://localhost/bagno/stronka.php"> Przekierowanie do dodawania</a> <br>';
echo'<a href="http://localhost/bagno/stronnica.php"> Przekierowanie do usuwania ucznia</a>';
$db->close();
?>
