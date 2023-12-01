<?php

include_once 'c_koneksi.php';


class c_barang
{


    function tampil()
    {

        $conn = new c_koneksi();

        //30, mengambil data dari tabel barang, dan mengurutkan berdasarkan kolom id
        $sql = "SELECT * FROM fooditem ORDER BY id_food DESC";

        $query = mysqli_query($conn->conn(), $sql);
    
        //7, mengubah query data menjadi objeck,  
        while ($q = mysqli_fetch_object($query)) {

            //27, membuat array kosong, untuk menampung data object
            $hasil[] = $q;
        }

        //9 mengembalikan nilai
        // return $hasil;
        
        if (!empty($hasil)) {
            return $hasil;

        }
    }

    function tambah( $food_name , $qty, $kategori_makanan , $harga, $photo)
    {

        $conn = new c_koneksi();

        
        //19, untuk menambakan data ke tabel barang
        $sql = "INSERT INTO fooditem VALUES (null,'$food_name', '$qty', '$kategori_makanan','$harga', '$photo')";

        //22, menjalankan perintah $sql 
        $query = mysqli_query($conn->conn(), $sql);

        if ($query) {

            // echo "data tidak gagal ditambahkan";
            echo "<script>alert('Data Berhasil Ditambahkan');window.location='../views/barang.php'</script>";

        } else {

            echo "data gagal ditambahkan";
        }
    }

    function edit($id_food){

        $conn = new c_koneksi();
        
        //11, menampilkan data dari table barang, berdasarkan id
        $sql = "SELECT * FROM fooditem WHERE id_food = '$id_food' ";

        $query = mysqli_query($conn->conn(),$sql);

        
        while ($q = mysqli_fetch_object($query)) {
                
        $hasil[] = $q;

        }

        return $hasil;
    }

    function update($id, $nama, $qty, $kategori, $harga, $photo){

        $conn = new c_koneksi();

        //3, mengedit barang yang ada didatabase,  berdasarkan id
        $sql = "UPDATE fooditem SET  food_name='$nama', qty='$qty',  kategori_makanan='$kategori',harga='$harga',
         photo='$photo' WHERE id='$id'";
        // echo var_dump($sql);

        $query = mysqli_query($conn->conn(), $sql);
        

        if ($query) {

            // echo "<script>alert('Data Berhasil Di Ubah');window.location='../views/barang.php'</script>";

            echo "data tidak gagal diubah";


         }

         else{

            echo "data gagal diubah";
         }


    }

    function delete($id_food)
    {
        $conn = new c_koneksi();

        //14, unutk memerintahkan menghapus sebuah barang berdasarkan id barang
        $query = "DELETE FROM fooditem WHERE id_food = '$id_food'";

        mysqli_query($conn->conn(), $query);

        header("location:../views/barang.php");
    }

    function pesan($id_food){

        $conn = new c_koneksi();
        
        //11, menampilkan data dari table barang, berdasarkan id
        $sql = "SELECT * FROM fooditem WHERE id_food = '$id_food' ";

        $query = mysqli_query($conn->conn(),$sql);

        
        while ($q = mysqli_fetch_object($query)) {
                
        $hasil[] = $q;

        }

        return $hasil;
    
}

}
