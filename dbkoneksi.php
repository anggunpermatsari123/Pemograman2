<?php
$host = 'localhost';
$dbname = 'dbpuskesmas';
$user = 'root';
$pass = '';

$dsn = "mysql:host=$host;dbname=$dbname";

try {
    $dbh = new PDO($dsn, $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Koneksi database gagal: " . $e->getMessage();
    die();
}
?>
