<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "form_db";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("<div class='container error' style='text-align: center;'>Koneksi gagal: " . $conn->connect_error . "</div>");
}

$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

$sql = "INSERT INTO kontak (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";

echo "<link rel='stylesheet' href='style.css'>";
echo "<div class='container' style='text-align: center;'>";
echo "<h2>Form Kontak</h2>";

if ($conn->query($sql) === TRUE) {
    echo "<div class='success'>Data berhasil dikirim!</div>";
} else {
    echo "<div class='error'>Error: " . $sql . "<br>" . $conn->error . "</div>";
}

echo "<a href='index.html' class='back-btn'>Kembali ke Form</a>";

echo "</div>";

$conn->close();
?>
