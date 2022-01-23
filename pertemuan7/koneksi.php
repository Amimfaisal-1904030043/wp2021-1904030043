<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'mahsiswa5';

$conn =mysqli_connect($host,$user, $pass, $db);

$result = mysqli_query($conn, 'SELECT * FROM mhs');

// Ambil data dari tabel calon mhs
// mysqli_fetch_row(); menggembalikan data dalam bentuk numerik
// mysqli_fetch_assoc(); mengembalikan data dalam nama field
// mysqli_fetch_array(); mengembalikan dalam bentuk numerik dan nama field


// while ($camaba = mysqli_fetch_array($result)){
//     var_dump($camaba);
// }

?>
