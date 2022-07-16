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
                /* border-radius:0 20px 20px 0; */
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
                /* background-color: yellow; */
                
            }
            .main h1{
                font-size: 40px;
                text-align: center;
                padding: 20px 0;
                background: #8e44ad;
                color: white;
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
                /* border: 1px solid black; */
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
        <div class = "sidebar">
            <h1>KATALOG BUKU PERPUSTAKAAN</h1>
            <ul>
                <div class="menu">
                    <li><a href="main_page.php">Kembali</a></li>
                </div>
            </ul>
        </div>

        <div class="main">
            <h1>DAFTAR BUKU</h1>
            <div class="katalog">
                <table>
                    <tr>
                        <th>No</th>
                        <th>Judul Buku</th>
                        <th>Penulis</th>
                        <th>Jumlah</th>
                        <th colspan='2'>Aksi</th>
                    </tr>
                    <?php
                        $num=1; 
                        while($row = $this->ml->fetch($data)){
                        echo "
                            <tr>
                                <td class='tab_judulbuku'>".$num."</td>
                                <td class='tab_judulbuku'>".$row["db_judulbuku"]."</td>
                                <td class='tab_penulisbuku'>".$row["db_penulisbuku"]."</td>
                                <td class='tab_jumlahbuku'>".$row["db_jumlahbuku"]."</td>
                                <td class='tab_pinjambuku'><a href='main_catalogue.php?pinjam&jml=".$row["db_jumlahbuku"]."&id=".$row["id_buku"]."'>Pinjam</a></td>
                                <td class='tab_selengkapnya'><a href='main_catalogue.php?lengkap&id=".$row["id_buku"]."'>Selengkapnya</a></td>
                            </tr>
                        ";
                        $num++;
                    }
                    ?>
                </table>
            </div>
        </div>
    </body>
    
</html>