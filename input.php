<?php

require_once("database.php");

if(isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $komentar = $_POST['komentar'];

    $query = "INSERT INTO pengunjung (nama, komentar) VALUES ('$nama', '$komentar')";
    $result = mysqli_query($dbconnect, $query); 

    if($result) {
        header("Location: index.php ");
    } else {
        header("location:index.php?msg=gagal");
    }
}




// if (isset($_POST['submit']))
//     require_once("database.php");
//     if(isset($_POST['pesan'])) {
//         include 'index.php';
//         $username = $_POST['username'];
//         $pesan = $_POST['pesan'];
//         $sql = "INSERT INTO inpudata (username, pesan) values ('$username', '$pesan')";

//     }


// require_once 'database.php'; // Tambahkan titik koma

// if(empty($_POST)){
//     header("Location: index.php ");
//     exit;
// }

// if(!isset($_POST['username']) || empty($_POST['username'])){
//     header("Location: index.php ");
//     exit;
// }


// $sql = "INSERT INTO notes (pesan, tanggal, username)
// VALUES (:notes, now(), :username)"; 

// $query = $tampil->prepare($sql);
// $query->execute(array(
//     'notes' => $_POST['notes'], 
//     'username' => $_POST['username'] 
// ));
?>