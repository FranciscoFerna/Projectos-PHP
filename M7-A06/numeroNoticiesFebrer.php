<?php
include 'header.php';
require 'database.php';

$db = connectDB();
$resultat = $db->querySingle("SELECT COUNT(*) as total FROM noticies WHERE strftime('%m', not_data) = '02'");
echo "<h1>Nombre de Notícies de Febrer</h1>";
echo "<p>Total: $resultat</p>";

$db->close();

include 'footer.php';
?>
