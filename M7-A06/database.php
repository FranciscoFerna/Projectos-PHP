<?php
function connectDB() {
    return new SQLite3('diariLocal.db');
} 
?>