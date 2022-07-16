<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pinjam Buku</title>
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
                background: linear-gradient(120deg,#c97200, #ff3300);;
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
                color:white;
                background:#8e44ad ;
            }
            .main a{
                text-decoration: none;
            }
            .main a:hover{
                text-decoration: underline;;
            }
            .main table{
                margin: 10px 0;
                width: 100%;
                border: none;
            }
            .main th, tr, td{
                padding: 8px;
            }
            .main th{
                background-color: #18191A;
                color: white;
            }
            tr:nth-child(odd) {
                background-color: #BEBEBE;
            }
        </style>
    </head>

    <body>
        <div class ="sidebar">
            <h1>PINJAM BUKU PERPUSTAKAAN</h1>
            <ul>
                <div class="menu"><li><a href="main_page.php">Kembali</a></li></div>
            </ul>
        </div>
        

        <div class="main">
            <h1>BUKU DIPINJAM</h1>
            <div class="katalog">
                <table>
                    <tr>
                        <th>No</th>
                        <th>Judul Buku</th>
                        <th>Penulis</th>
                        <th>Tahun Terbit</th>
                        <th>Durasi</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Status Pinjam</th>
                    </tr>
                    <?php
                        $num = 1; 
                        while($row = $this->ml->fetch($data)){
                            echo "
                                <tr>
                                    <td class=''>".$num."</td>
                                    <td class=''>".$row["db_judulbuku"]."</td>
                                    <td class=''>".$row["db_penulisbuku"]."</td>
                                    <td class=''>".$row["db_tahunterbit"]."</td>
                                    <td class=''>".$row["durasi"]." Hari</td>
                                    <td class=''>".$row["db_tanggalpinjam"]."</td>
                                    <td class=''>".$row["db_tanggaldurasi"]."</td>
                            ";
                            $num++;

                            if ($row["db_statuspinjam"]==0) {
                                echo "
                                        <td class=''><a href='main_pinjam.php?kembali&buku=".$row["id_buku"]."&id=".$row["id_pinjam"]."&jml=".$row["db_jumlahbuku"]."&tgl=".$row["db_tanggaldurasi"]."'>KEMBALIKAN</a></td>
                                    </tr>
                                    
                                ";
                            } else {
                                echo "
                                        <td class=''>SUDAH DIKEMBALIKAN</a></td>
                                    </tr>
                                ";
                            }

                        }
                    ?>
                </table>
            </div>
        </div>
    </body>
    
</html>