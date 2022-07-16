<?php

    class model{

        public $conn;

        function __construct(){
            $this->conn = new mysqli("localhost","root","","perpustakaanku");
            if ($this->conn->connect_error) {
                die("Connection failed: ".$conn->connect_error);
            }
        }

        function execute($query){
            return $this->conn->query($query);
        }

        function fetch($var){
			return $var->fetch_assoc();
		}

// anggota ================================================================================================================
        
        function insert($x, $y, $z){
			$query = "INSERT INTO tb_anggota VALUES ('$x', '$y', '$z')";
			return $this->execute($query);
		}

        function loginMember($npm, $pass){
			$query = "SELECT * FROM tb_anggota WHERE id_anggota='$npm' and db_passanggota='$pass'";
            $result = $this->execute($query);
    
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                    return '1';
                }
            }
            else{   
                return '0';
            }
		}

        function selectMember($npm){
			$query = "select * from tb_anggota WHERE id_anggota='$npm'";
			return $this->execute($query);
		}

// buku ================================================================================================================

        function selectAll(){
			$query = "select * from tb_buku";
			return $this->execute($query);
		}

        function selectBook($id){
			$query = "select * from tb_buku where id_buku='$id'";
			return $this->execute($query);
		}

        function selectBooktoBorrow($id, $jml){
			$query = "select * from tb_buku where id_buku='$id' and db_jumlahbuku='$jml'";
			return $this->execute($query);
		}

        function updateBook($jml_buku, $id){
			$query = "update tb_buku set db_jumlahbuku='$jml_buku' where id_buku='$id'";
			return $this->execute($query);
		}

        function insertBook($v, $w, $x, $y, $z){
			$query = "INSERT INTO tb_pinjam VALUES ('','$v', '$w', '$x', '$y', '$z','0')";
			return $this->execute($query);
		}

// pinjam ================================================================================================================

        function daftarPinjam($npm){
            $query = "select * from vw_pinjam where id_anggotapinjam='$npm'";
            return $this->execute($query);
        }

        function kembali($id){
            $query = "update tb_pinjam set db_statuspinjam='1' where id_pinjam='$id'";
            return $this->execute($query);
        }

        function kembaliBuku($jml, $buku){
            $query = "update tb_buku set db_jumlahbuku='$jml' where id_buku='$buku'";
            return $this->execute($query);
        }

        function daftarKembali($tglKembali, $denda, $id){
			$query = "INSERT INTO tb_kembali VALUES ('','$tglKembali', '$denda', '$id')";
			return $this->execute($query);
		}

// kembali ================================================================================================================

        function dataKembali($npm){
            $query = "select * from vw_kembali where id_anggotapinjam='$npm'";
            return $this->execute($query);
        }




        function __destruct(){

        }
        
    }

?>