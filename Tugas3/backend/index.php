<?php
include 'db.php';

// Menangani form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $nrp = $_POST['nrp'];
    $age = $_POST['age'];
    $major = $_POST['major'];

    $sql = "INSERT INTO students (name, nrp, age, major) VALUES ('$name', '$nrp', '$age', '$major')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Menampilkan daftar siswa
$sql = "SELECT id, name, nrp, age, major FROM students";
$result = $conn->query($sql);

echo "<h2>Daftar Siswa</h2>";
echo "<table border='1'><tr><th>ID</th><th>Nama</th><th>NRP</th><th>Umur</th><th>Jurusan</th></tr>";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["nrp"]. "</td><td>" . $row["age"]. "</td><td>" . $row["major"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

<h2>Tambah Siswa</h2>
<form method="post" action="">
    Nama: <input type="text" name="name" required><br><br>
    NRP: <input type="text" name="nrp" required><br><br>
    Umur: <input type="number" name="age" required><br><br>
    Jurusan: <input type="text" name="major" required><br><br>
    <input type="submit" value="Tambah">
</form>

