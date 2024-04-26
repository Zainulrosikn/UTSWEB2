<?php
function createMahasiswa($Nama, $NIM, $NoTel, $Email) {
  global $conn;
  $sql = "INSERT INTO Mahasiswa (Nama, NIM, NoTel, Email) VALUES (?, ?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssss", $Nama, $NIM, $NoTel, $Email);
  return $stmt->execute();
}
