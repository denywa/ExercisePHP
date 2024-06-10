<?php
echo "<strong>1 Baris Hello World: </strong><br>";
echo "Hello World<br><br>";

echo "<strong>10 Baris Hello World:</strong><br>";
for ($i = 1; $i <= 10; $i++) {
    echo "Hello World<br>";
}
echo "<br>";

echo "<strong>10 Lines of Hello World with Even Line Numbers:</strong><br>";
for ($i = 1; $i <= 10; $i++) {
    echo "Hello World" . ($i % 2 == 0 ? " - $i" : "") . "<br>";
}
echo "<br>";

$months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
echo "<strong>Array Nama Bulan:</strong><br>";
foreach ($months as $month) {
    echo $month . "<br>";
}
echo "<br>";

$publicHolidays = ["Tahun Baru", "Imlek", "Nyepi", "Waisak", "Isra Mi'raj", "Hari Kemerdekaan", "Idul Fitri", "Idul Adha", "Maulid Nabi", "Hari Pahlawan", "Hari Natal", "Malam Tahun Baru"];
$monthHolidays = array_combine($months, $publicHolidays);
echo "<strong>Array Bulan dan Hari Libur:</strong><br>";
foreach ($monthHolidays as $month => $holiday) {
    echo "$month - $holiday<br>";
}
echo "<br>";

function tambah($a, $b) {
    return $a + $b;
}
function kurang($a, $b) {
    return $a - $b;
}
function kali($a, $b) {
    return $a * $b;
}
function bagi($a, $b) {
    return $a / $b;
}
$num1 = 23;
$num2 = 2;

echo "<strong>Jumlah dari $num1 dan $num2 adalah " . tambah($num1, $num2) . "</strong><br>";
echo "<strong>Selisih antara $num1 dan $num2 adalah " . kurang($num1, $num2) . "</strong><br>";
echo "<strong>Hasil kali $num1 dan $num2 adalah " . kali($num1, $num2) . "</strong><br>";
echo "<strong>Hasil bagi $num1 dengan $num2 adalah " . bagi($num1, $num2) . "</strong><br><br>";
?>
