<?php

class auth{

  function __construct(){}

  function cek_login($data_post){
    $query = "SELECT * FROM user WHERE username=:lusername AND password=:lpassword";
    $param = array(
        ':lusername' => strtoupper($data_post['lusername']),
        ':lpassword' => md5($data_post['lpassword'])
      );

    return $this->get_data($query, $param);
   }

  function get_data($query, $param){
			try{
				global $pdo;
				$req = $pdo->prepare($query);
				if($param == ''){
					$req->execute();
				}else{
					$req->execute($param);
				}

				$rows = $req->rowCount();
				$status = false;

				if($rows > 0){
					$status = true;
				}

				$data = $req->fetch(PDO::FETCH_NAMED);

				return array('status' => $status, 'rows' => $rows, 'data' => $data);
			}catch(PDOException $e){
				echo "Error! gagal mengambil data: ".$e->getMessage();
			}
	} 	

}

?>
