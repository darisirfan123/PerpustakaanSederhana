<html>
    
    <head>
        <title>PERPUSTAKAAN</title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
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
            .sidebar{
                width: 20%;
                height: 100%;
                position: fixed;
                background: linear-gradient(120deg,#c97200, #ff3300);;
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
                background-color: #8e44ad;
                padding: 10px;
                color:white;
            }
            .main h1{
                font-size: 40px;
                text-align: center;
                padding: 10px 0;
            }
        </style>
    </head>

    <body>
        
        <div class="sidebar">
            <h1>SELAMAT DATANG</h1>
            <ul>
                <div class="menu"><li><a href="main_catalogue.php?">Katalog Buku</a></li></div>
                <div class="menu"><li><a href="main_pinjam.php?">Peminjaman Buku</a></li></div>
                <div class="menu"><li><a href="main_kembali.php?">Pengembalian Buku</a></li></div>
                <div class="menu"><li><a href="main_page.php?pengaturan">Pengaturan</a></li></div>
                <div class="menu"><li><a href="main_logout.php">Keluar</a></li></div>
            </ul>
        </div>
        
        <div class="main">
            <h1>PERPUSTAKAAN MANDIRI</h1>
        </div>
    </body>
    
</html>