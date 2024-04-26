<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

// Membuat tabel
$sql = "CREATE TABLE Mahasiswa (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Nama VARCHAR(30) NOT NULL,
NIM VARCHAR(30) NOT NULL,
NoTel VARCHAR(50),
Email VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
  echo "Tabel Mahasiswa berhasil dibuat";
} else {
  echo "Error membuat tabel: " . $conn->error;
}

$conn->close();
?>

