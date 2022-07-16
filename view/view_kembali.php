<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PENGEMBALIAN</title>
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
                background-color: #8e44ad;
                padding: 20px 0;
                color:white;
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
        <div class = "sidebar">
            <h1>PENGEMBALIAN BUKU PERPUSTAKAAN</h1>
            <ul>
                <div class="menu"><li><a href="main_page.php">Kembali</a></li></div>
            </ul>
        </div>

        <div class="main">
            <h1>DAFTAR KEMBALI</h1>
            <table>
                <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Durasi</th>
                    <th>Denda</th>
                </tr>
            <?php
                $num = 1;
                while($row = $this->ml->fetch($data)){
                    echo "
                        <tr>
                            <td class=''>".$num."</td>
                            <td class=''>".$row["db_judulbuku"]."</td>
                            <td class=''>".$row["db_tanggalpinjam"]."</td>
                            <td class=''>".$row["db_tanggaldurasi"]."</td>
                            <td class=''>".$row["db_tanggalkembali"]."</td>
                            <td class=''>".$row["durasi"]." Hari</td>
                            <td class=''>Rp".$row["db_denda"].",-</td>
                        </tr>
                        ";
                    $num++;
                }
            ?>
            </table>
        </div>
    </body>
    
</html>