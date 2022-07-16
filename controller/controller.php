<?php

    session_start();
    include "model/model.php";

    class controller{
        public $ml;

        function __construct(){
            $this->ml = new model();
        }

// login & registrasi ================================================================================================================

        function viewLogin(){
            include "view/view_login.php";
        }

        function viewRegister(){
            include "view/view_register.php";
        }

        function insert(){
			$npm = $_POST["inp_npm"];
            $nama = $_POST["inp_nama"];
			$pass = $_POST["inp_pass"];
			$insert = $this->ml->insert($npm, $nama, $pass);
			header("location:main_login.php");
		}

        function loginMember(){

            $npm = $_POST["inp_npm"];
            $pass = $_POST["inp_pass"];

            $_SESSION['npm'] = $npm;

			$login = $this->ml->loginMember($npm, $pass);
            if ($login == '1') {
                header("location:main_page.php");
            } else {
                header("location:main_login.php");
            }
		}

// main ================================================================================================================

        function viewMain(){
            include "view/view_mainpage.php";
        }

// katalog ================================================================================================================

        function viewKatalog(){
            $data = $this->ml->selectAll();
            include "view/view_catalogue.php";
        }

        function viewPeminjaman($id, $jml){
            $data = $this->ml->selectBooktoBorrow($id, $jml);

            $npm = $_SESSION['npm'];
            $dataMember = $this->ml->selectMember($npm);
        
            include "view/view_peminjaman.php";
        }

        function viewLengkap($id){
            $data = $this->ml->selectBook($id);
            include "view/view_lengkap.php";
        }

        function tambahPinjam($id){
            $npm = $_SESSION['npm'];
            $durasi = $_GET['durasi'];
            $tglpinjam = $_GET['tglpinjam'];
            $tglkembali = $_GET['tglkembali'];
            
            $data = $this->ml->selectBook($id);

            $jml_buku;
            while($row = $this->ml->fetch($data)){
                $jml_buku = $row["db_jumlahbuku"];
            }
            $jml_buku--;
            $idpinjam;

            $this->ml->updateBook($jml_buku, $id);
            $this->ml->insertBook($npm, $id, $durasi, $tglpinjam, $tglkembali);
            header("location:main_catalogue.php");
        }

// pinjam ================================================================================================================

        function viewPinjam(){
            $npm = $_SESSION['npm'];
            $data = $this->ml->daftarPinjam($npm);
            include "view/view_pinjam.php";
        }

        function kembali(){
            $buku = $_GET['buku'];
            $id = $_GET['id'];
            $jml = $_GET['jml'];
            $tglDeadline = $_GET['tgl'];
            $jml = (int)$jml;
            $jml = $jml+1;
            $denda;

            date_default_timezone_set('Asia/Jakarta');
            $tglKembali = new DateTime(date("Y-m-d")); 
            $tglKembali = $tglKembali->format("Y-m-d");

            $selisih = strtotime ($tglKembali) - strtotime ($tglDeadline);
            $selisih = $selisih / 86400;

            if ((int)$selisih >= 1) {
                $denda = $selisih * 500;
            } else {
                $denda = 0;
            }

            $this->ml->kembali($id);
            $this->ml->kembaliBuku($jml, $buku);
            $this->ml->daftarKembali($tglKembali, $denda, $id);
            header("location:main_pinjam.php");
        }

// kembali ================================================================================================================

        function viewkembali(){
            $npm = $_SESSION['npm'];
            $data = $this->ml->dataKembali($npm);
            include "view/view_kembali.php";
        }

        function viewPengaturan(){
            include "view/view_pengaturan.php";
        }
        

        function __destruct(){

		}
    }

?>