<?php 
    $conn =  mysqli_connect('localhost', 'root','', 'mahasiswa5');

//   pemanggilan tabel

function query($query)
{
    global $conn;

    // mengambil seluruh data pada tabel
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) == 1){
        return mysqli_fetch_assoc($result);
    }

    // pemanggilan elemen data dengan rapih
    $row = [];
    while ($rows = mysqli_fetch_assoc($result)){
        $row[] = $rows;
    }
     return $row;

}

?>