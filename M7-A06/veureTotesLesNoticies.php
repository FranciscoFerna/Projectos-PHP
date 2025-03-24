<?php
include 'header.php';
require 'database.php';

$db = connectDB();
$resultats = $db->query("SELECT * FROM noticies ORDER BY not_data DESC");

echo "<h1>Totes les Notícies</h1>";
while ($noticia = $resultats->fetchArray(SQLITE3_ASSOC)) {
    echo "<div>";
    echo "<strong>Data:</strong> " . $noticia['not_data'] . "<br>";
    echo "<strong>Títol:</strong> " . $noticia['not_titular'] . "<br>";
    echo "<strong>Secció:</strong> " . $noticia['not_seccio'] . "<br>";
    echo "</div><hr>";
}
$db->close();

include 'footer.php';
?>
