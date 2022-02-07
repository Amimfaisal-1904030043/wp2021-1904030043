<?php
$conn =  mysqli_connect('localhost', 'root', '', 'UAS_1904030043');

//   pemanggilan tabel



function query($query)
{
    global $conn;

    // mengambil seluruh data pada tabel
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }

    // pemanggilan elemen data dengan rapih
    $row = [];
    while ($rows = mysqli_fetch_assoc($result)) {
        $row[] = $rows;
    }
    return $row;
}

function tambahBaju($data)
{
    global $conn;

    $nama = htmlspecialchars($data['judul']);
    $harga = htmlspecialchars($data['harga']);
    $keterangan = htmlspecialchars($data['keterangan']);
    $size = htmlspecialchars($data['size']);
    $stok = htmlspecialchars($data['stok']);
    $foto = htmlspecialchars($data['gambar']);

    $query = "INSERT INTO baju VALUES (null,'$nama','$harga','$keterangan','$size','$stok','$foto');";
    mysqli_query($conn, $query);

    echo mysqli_error(($conn));
    return mysqli_affected_rows($conn);
}

function tambahCelana($data)
{
    global $conn;

    $nama = htmlspecialchars($data['judul']);
    $harga = htmlspecialchars($data['harga']);
    $keterangan = htmlspecialchars($data['keterangan']);
    $size = htmlspecialchars($data['size']);
    $stok = htmlspecialchars($data['stok']);
    $foto = htmlspecialchars($data['gambar']);

    $query = "INSERT INTO celana VALUES (null,'$nama','$harga','$keterangan','$size','$stok','$foto');";
    mysqli_query($conn, $query);

    echo mysqli_error(($conn));
    return mysqli_affected_rows($conn);
}

function hapusBaju($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM baju WHERE id=  $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function hapusCelana($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM celana WHERE id=  $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}



function editBaju($data)
{
    global $conn;

    $id = ($data['id']);
    $judul = htmlspecialchars($data['judul']);
    $harga = htmlspecialchars($data['harga']);
    $keterangan = htmlspecialchars($data['keterangan']);
    $size = htmlspecialchars($data['size']);
    $stok = htmlspecialchars($data['stok']);
    $foto = htmlspecialchars($data['gambar']);

    $query = "UPDATE baju SET judul = '$judul',harga = '$harga', keterangan='$keterangan',size= '$size',stok = '$stok',gambar = '$foto' WHERE id = $id";
    mysqli_query($conn, $query);

    echo mysqli_error(($conn));
    return mysqli_affected_rows($conn);
}

function editCelana($data)
{
    global $conn;

    $id = ($data['id']);
    $judul = htmlspecialchars($data['judul']);
    $harga = htmlspecialchars($data['harga']);
    $keterangan = htmlspecialchars($data['keterangan']);
    $size = htmlspecialchars($data['size']);
    $stok = htmlspecialchars($data['stok']);
    $foto = htmlspecialchars($data['gambar']);

    $query = "UPDATE celana SET judul = '$judul',harga = '$harga', keterangan='$keterangan',size= '$size',stok = '$stok',gambar = '$foto' WHERE id = $id";
    mysqli_query($conn, $query);

    echo mysqli_error(($conn));
    return mysqli_affected_rows($conn);
}


function cariBaju($keyword)
{
    global $conn;

    $query = "SELECT  * FROM baju WHERE  judul LIKE '%$keyword%'";

    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}
