<?php 

include_once '../controllers/c_login.php';

$login = new c_login();


        //        
        try {
            if ($_GET['aksi'] == 'register') {
        
                $id = $_POST['id'];
                $nama = $_POST['nama'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $pass = password_hash($pass, PASSWORD_DEFAULT);
                $role = $_POST['role'];
        
                    //memanggil method register
                    $login->register($id, $nama, $email, $pass, $role);
                } elseif ($_GET['aksi'] == 'login') {
                    $email = $_POST['email'];
                    $pass = $_POST['pass'];
        
                    $login->login($email, $pass);
                } elseif ($_GET['aksi'] == 'logout') {
                    $login->logout();
                }
                
        } catch (Exception $e) {
            echo $e->getMessage();
        }

?>