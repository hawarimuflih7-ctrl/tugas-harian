<?php
// Array multidimensi (data siswa)
$siswa = [
    ["nama" => "Adit", "umur" => 20, "nilai" => 90],
    ["nama" => "Budi", "umur" => 22, "nilai" => 65],
    ["nama" => "Citra", "umur" => 19, "nilai" => 75],
];

// Perulangan foreach untuk tampilkan data siswa
foreach ($siswa as $data) {
    echo "Nama: " . $data["nama"] . "<br>";
    echo "Umur: " . $data["umur"] . "<br>";
    echo "Nilai: " . $data["nilai"] . "<br>";

    // Struktur kontrol if-elseif-else + operator perbandingan
    if ($data["nilai"] >= 60) {
        echo "Predikat: A<br>";
    } elseif ($data["nilai"] >= 75) {
        echo "Predikat: B<br>";
    } else {
        echo "Predikat: C<br>";
    }

    // Switch-case berdasarkan umur
    switch (true) {
        case ($data["umur"] < 20):
            echo "Status: Remaja<br>";
            break;
        case ($data["umur"] >= 20 && $data["umur"] <= 21):
            echo "Status: Dewasa Muda<br>";
            break;
        default:
            echo "Status: Dewasa<br>";
    }

    echo "<hr>";
}

// Perulangan for
echo "<h3>Perulangan For (1 sampai 5)</h3>";
for ($i = 1; $i <= 5; $i++) {
    echo "Angka ke-$i <br>";
}

// Perulangan while
echo "<h3>Perulangan While</h3>";
$x = 1;
while ($x <= 3) {
    echo "Nilai X: $x <br>";
    $x++;
}

// Perulangan do-while
echo "<h3>Perulangan Do-While</h3>";
$y = 1;
do {
    echo "Nilai Y: $y <br>";
    $y++;
} while ($y <= 3);
?>
