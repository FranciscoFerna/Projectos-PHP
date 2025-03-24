<?php
include 'header.php';
require 'database.php';

$db = connectDB();
$resultats = $db->query("SELECT DISTINCT not_seccio FROM noticies ORDER BY not_seccio ASC");

echo "<h1>Seccions amb Enllaços</h1>";
while ($seccio = $resultats->fetchArray(SQLITE3_ASSOC)) {
    echo "<p><a href='veureNoticiesSeccio.php?seccio={$seccio['not_seccio']}'>{$seccio['not_seccio']}</a></p>";
}
$db->close();

include 'footer.php';
?>
