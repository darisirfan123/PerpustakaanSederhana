<html>

    <head>
        <title>PERPUSTAKAAN MANDIRI</title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <style>
            body{
                margin: 0;
                padding: 0;
                /* font-family: 'Arial'; */
                font-family: 'Poppins', sans-serif;
                background: linear-gradient(120deg,#c97200, #ff3300);
                height: 100vh;
                overflow: hidden;
            }
            .center{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 400px;
                background: white;
                border-radius: 5px;
            }
            .center h1{
                text-align: center;
                padding: 0 0 20px 0;
                border-bottom: 1px solid rgb(0, 0, 0);
            }
            .center form{
                padding: 0 40px;
                box-sizing: border-box;
            }
            form .input_field{
                position: relative;
                margin: 20px 0;
            }
            .input_field input{
                width: 100%;
                padding: 0 5px;
                height: 40px;
                font-size: 16px;
                border:none;
                background: none;
                outline: black;
                border-bottom: 1px solid silver;
                text-align: center;
            }
            input[type="submit"]{
                width: 100%;
                height: 50px;
                border: 1px solid;
                background: #8e44ad;
                border-radius: 25px;
                outline: none;
                color: white;
                margin: 15px 0;
            }   
        </style>
    </head>

    <body>
        <div class="center">
            <h1>REGISTER</h1>
            <form action="" method="post">
                <div class="input_field">
                    <label for="">NPM</label><br>
                    <input type="text" name="inp_npm" class="text_input"><br>
                    <label for="">Nama</label><br>
                    <input type="text" name="inp_nama" class="text_input"><br>
                    <label for="">Password</label><br>
                    <input type="Password" name="inp_pass" class="text_input"><br>
                    <input type="submit" name="inp_submit" class="button_submit" value="DAFTAR">
                </div>
            </form>
        </div>
    </body>

    <?php
	if (isset($_POST["inp_submit"])) { 
        $npm = $_POST["inp_npm"];
        $nama = $_POST["inp_nama"];
        $pass = $_POST["inp_pass"];
		$cl2 = new controller();
		$cl2->insert($npm, $nama, $pass);
	}
    ?>
</html>