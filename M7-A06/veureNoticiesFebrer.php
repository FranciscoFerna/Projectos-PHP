<?php
include 'header.php';
require 'database.php';

$db = connectDB();
$resultats = $db->query("SELECT * FROM noticies WHERE strftime('%m', not_data) = '02' ORDER BY not_data DESC");

echo "<h1>Notícies de Febrer</h1>";
while ($noticia = $resultats->fetchArray(SQLITE3_ASSOC)) {
    echo "<div>";
    echo "<strong>Data:</strong> " . $noticia['not_data'] . "<br>";
    echo "<strong>Títol:</strong> " . $noticia['not_titular'] . "<br>";
    echo "</div><hr>";
}
$db->close();

include 'footer.php';
?>
