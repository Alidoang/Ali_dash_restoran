<?php
session_start();
//memanggil file koneksi kedalam file c_login
include_once 'c_koneksi.php';

//membuat kelas dari file C_login, harus sama dengan nama file
class c_login{

    //membuat method atau fungsi untuk menampung data dari form register yang di input oleh user kedalam tabel user
    public function register($id, $nama, $email, $pass, $role){
        
        // membuat variabel yang bertipe data objek dari kelas c_koneksi
        $conn = new c_koneksi();

        // perintah untuk memasukan data register kedalam tabel users
        $sql = "INSERT INTO tb_costumer VALUES ('$id','$nama','$email','$pass','$role')";

        //harjon menjalankan perintah $sql dengan memiliki 2 parameter, 1. koneksi, 2.perintahnya
        $query = mysqli_query($conn->conn(), $sql);

        //mengecek kondisi data berhasil atau tidak
        if ($query) {

            // echo "<script>alert('Data Berhasil Ditambahkan');window.location='index.php'</script>";
            echo "data tidak gagal ditambahkan";

        } else {

            echo "data gagal ditambahkan";
        }
    }

    //fungsi  mengatur proses identifikasi login
    public function login($email=null, $pass=null){
        
        $conn = new C_koneksi();

        //untuk mengecek apakah tombol login di tekan, jika di tekan akan menjalankan perintah dibawahnya
        if (isset($_POST['login'])) {
            
            //menampilkan semua data dari tabel user berdasarkan email dari user
            $sql = "SELECT * FROM tb_costumer WHERE email = '$email'";
            var_dump($sql);
            $query = mysqli_query($conn->conn(), $sql);
            //merubah data menjadi array asosiatif
            $data = mysqli_fetch_assoc($query);
            
            
            
            if ($data) {
                
                //untuk mengecek password dari form login dan password dari tabel user
                if (password_verify($pass, $data['password'])) {
                    
                    //untuk mengecek role user
                    if ($data['role'] == 'admin') {
                        
                        //membuat variabel session yang nantinya akan digunkan pada hlaman form admin
                        $_SESSION["data"] = $data;


                        $_SESSION["role"] = $data['role'];

                        //untuk berpindah ke halaman home
                        header("Location: ../views/home.php");
                        exit;
                    }else if($data['role'] == 'user'){
                        $_SESSION["data"] = $data;
                        $_SESSION["role"] = $data['role'];

                        
                        header("Location: ../views/home_user.php");
                        exit;
                    }
                }else {
                    echo "<script>alert('Login gagal !!! Silahkan cek email dan password');windows.location='../index.php'</script>";
                }
            }else {
                echo "<script>alert('Login gagal !!! Silahkan cek email dan password');windows.location='../index.php'</script>";
            }
        }
    }

    public function logout(){

        //menghentikan session
        session_destroy();

        header("Location: ../index.php");
        exit;
    }

    
}

?>