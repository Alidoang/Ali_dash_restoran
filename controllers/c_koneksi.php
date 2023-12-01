<?php

//nama kelas harus sama persis dengan nama file
class C_koneksi{

    // membuat fungsi untuk koneksi ke database project XII RPL 1
    public function conn(){
        $conn = mysqli_connect('localhost', 'root', '', 'db_restoran');
        
        // untuk mengecek apakah koneksi kedatabase berhasil atau tidak 
        if (!$conn) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }else{
            return $conn;
        }
    
    }

}

    //inisialisasi objek atau membuat objek hadir kelas c_koneksi
    // $conn = new C_koneksi();
    // memanggil fungsi atau method conn 
    // $conn->conn();
?>