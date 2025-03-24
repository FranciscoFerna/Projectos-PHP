<?php
include 'header.php';
require 'database.php';

$db = connectDB();
$resultats = $db->query("SELECT DISTINCT not_seccio FROM noticies ORDER BY not_seccio ASC");

echo "<h1>Seccions</h1>";
while ($seccio = $resultats->fetchArray(SQLITE3_ASSOC)) {
    echo "<p>{$seccio['not_seccio']}</p>";
}
$db->close();

include 'footer.php';
?>
