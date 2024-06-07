<?php
$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "library"; 

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows =[];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[]= $row;
    }
    return $rows;
}

function cari($keyword){
    $query = "SELECT * FROM book where book_title LIKE '%$keyword%'";
    return query($query);
}

?>