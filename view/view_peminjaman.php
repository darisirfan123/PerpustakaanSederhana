<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Katalog Buku</title>
        <style>
            *{
                margin: 0px;
                padding: 0px;
                border: 0px;               
            }
            body{
                font-family: 'Poppins', sans-serif;
                box-sizing: border-box;
            }
            table{
                border-collapse: collapse;
	            border-spacing: 0;
            }
            .sidebar{
                width: 20%;
                height: 100%;
                position: fixed;
                background: linear-gradient(120deg,#c97200, #ff3300);
                top: 0;
                left: 0;

            }
            .sidebar h1{
                font-size: 20px;
                text-align: center;
                padding: 30px 0;
                color:white;
            }
            .sidebar ul li{
                list-style: none;
                width: 100%;
                padding: 20px;
            }
            .sidebar ul li a{
                text-decoration: none;
                color: white;
            }
            .sidebar ul li a:hover{
                color: white;
            }
            .menu:hover{
                background-color: #8e44ad;
                border-radius:0 20px 20px 0;
                border-right: 1px solid #fff;
                border-top: 1px solid #fff;
                border-bottom: 1px solid #fff;
                font-size: 18px;
                margin-right: 20px;
            }
            .main{
                margin-left: 20%;
            }
            .main h1{
                font-size: 40px;
                text-align: center;
                padding: 20px 0;
                background-color: #8e44ad;
                color:white;
            }
            .katalog{
                text-align: center;
                margin: 20px 0;
            }
            .katalog label{
                font-size: 15px;
            }
            .katalog input{
                font-size: 20px;
                margin: 5px 0;
                border-bottom: 1px solid red;
                padding: 5px;
                text-align: center;
                width: 25%;
            }
            .katalog input[type=submit]{
                border: 1px solid red;
                margin: 25px;
                border-radius: 5px;
            }
            .katalog input[type=submit]:hover{
                border: 1px solid red;
                margin: 25px;
                border-radius: 5px;
                background-color: red;
                color: white;
            }
            h4{
                font-size: 15px;
            }
            p{
                font-size: 20px;
                margin: 5px 0;
                /* border-bottom: 1px solid red; */
                padding: 5px;
                text-align: center;
                /* width: 25%; */
            }
        </style>
    </head>

    <body>
        <div class = "sidebar">
            <h1>KATALOG BUKU PERPUSTAKAAN</h1>
            <ul>
                <div class="menu">
                    <li><a href="main_catalogue.php">Kembali</a></li>
                </div>
            </ul>
        </div>

        <div class="main">
            <h1>PEMINJAMAN</h1>
            <div class="katalog">
                <?php
                    $jml;
                    $id;
                    while($row = $this->ml->fetch($data)){
                        echo "
                            <form action='' method='post'>
                                <label for=''>Judul Buku</label><br>
                                <input type='text' name='judulBuku' id='' disabled value='".$row['db_judulbuku']."'><br>
                                <label for=''>Penulis Buku</label><br>
                                <input type='text' name='penulisBuku' id='' disabled value='".$row['db_penulisbuku']."'><br>
                                <label for=''>Penerbit Buku</label><br>
                                <input type='text' name='penerbitBuku' id='' disabled value='".$row['db_penerbitbuku']."'><br>
                                <label for=''>Tahun Buku</label><br>
                                <input type='text' name='tahunBuku' id='' disabled value='".$row['db_tahunterbit']."'><br>
                        ";
                        $jml = $row["db_jumlahbuku"];
                        $id = $row["id_buku"];
                    }
                    if ($jml == 0){
                        echo "BUKU TIDAK TERSEDIA";
                    } else {
                        // echo "Jumlah buku= $jml <br> $id <br>";
                        echo "
                                <label for=''>Durasi Pinjam (Hari)</label><br>
                                <input type='number' name='durasiPinjam' id='' min='1' max='7'><br>
                                <input type='submit' name='inp_submit' id='' value='Cek Peminjaman'>
                                </form>
                        ";
                        if (isset($_POST["inp_submit"])) {
                            date_default_timezone_set('Asia/Jakarta');
                            $tglSekarang = new DateTime(date("Y-m-d")); 
                            $tglSekarang = $tglSekarang->format("Y-m-d");
                            $tglSekarangStr = strtotime($tglSekarang);
                            $durasi = $_POST["durasiPinjam"];
                            $tglKembali = date("Y-m-d", strtotime("+".$durasi."day", $tglSekarangStr));
                            echo '<h4>Durasi Pinjam: </h4><p>' .$durasi.' Hari</p>';
                            echo '<h4>Tanggal Pinjam: </h4><p>' .$tglSekarang.'</p>';
                            echo '<h4>Tanggal Kembali: </h4><p>' .$tglKembali.'</p>';
                            echo "<br><a class='pinjam' href='main_catalogue.php?tambahPinjam&id=".$id."&durasi=".$durasi."&tglpinjam=".$tglSekarang."&tglkembali=".$tglKembali."'>PINJAM SEKARANG</a>";
                        }

                    }
                    

                    
                ?>
            </div>
        </div>
    </body>
    
</html>