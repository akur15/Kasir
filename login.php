<?php
$servername = "localhost";
$dbname = "kasir_app";
$dbuser = "root"; // sesuaikan
$dbpass = "";     // sesuaikan

$conn = new mysqli($servername, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM admin_users WHERE username=? AND password=?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ss", $username, $password);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    // login berhasil
    header("Location: dashboard.php");
    exit();
  } else {
    echo "<script>alert('Username atau Password salah!'); window.location='index.html';</script>";
  }
}
?>
