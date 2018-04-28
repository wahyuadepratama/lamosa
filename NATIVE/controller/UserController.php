<?php

class user
{

  function __construct(){}

  function store(){
 		global $pdo;
 		$query = $pdo->prepare("
 			INSERT INTO `user` (`id`, `email`, `username`, `password`, 'picture', `role_id`, `updated_at`)
 			VALUES (NULL, ?, ?, ?, NULL, ?, CURRENT_TIMESTAMP)");
		$query->execute(array($_POST['email'],$_POST['username'],md5($_POST['password']),$_POST['role']));
    return 'sukses';
 	}

}


?>
