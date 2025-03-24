<?php
include 'header.php';
require 'database.php';

$db = connectDB();
$seccio = SQLite3::escapeString($_GET['seccio']);
$resultats = $db->query("SELECT * FROM noticies WHERE not_seccion = '$seccio' ORDER BY not_data DESC");

echo "<h1>Notícies de la Secció: $seccio</h1>";
while ($noticia = $resultats->fetchArray(SQLITE3_ASSOC)) {
    echo "<div>";
    echo "<strong>Data:</strong> " . $noticia['not_data'] . "<br>";
    echo "<strong>Títol:</strong> " . $noticia['not_titular'] . "<br>";
    echo "</div><hr>";
}
$db->close();

include 'footer.php';
?>
