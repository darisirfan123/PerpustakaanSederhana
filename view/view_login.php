
<html>

    <head>
        <title>PERPUSTAKAAN MANDIRI</title>
        <!-- <link rel="stylesheet" href="../assets/main_login.css"> -->
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
            .signup{
                margin: 20px 0;
                text-align: center;
                font-size: 16px;
                color: #666666;
            }
                        
        </style>
    </head>

    <body>
        <div class="center">
            <h1>LOGIN</h1>
            <form action="" method="post" class="">
                <div class="input_field">
                    <label for="">NPM</label><br>
                    <input type="text" name="inp_npm" class="text_input"><br>
                    <label for="">Password</label><br>
                    <input type="password" name="inp_pass" class="text_input"><br>
                    <!-- <a href="main_login.php?login=ok"></a> -->
                    <input type="submit" name="inp_submitlogin" class="button_submit" value="LOGIN">

                    <div class="signup">
                        <a href="main_login.php?buat" class="signup_link">Buat akun disini</a>
                    </div>
                </div>
            </form>
            
        </div>
    </body>

    <?php
	if (isset($_POST["inp_submitlogin"])) { 
		$cl2 = new controller();
		$cl2->loginMember();
	}
    ?>

</html>
