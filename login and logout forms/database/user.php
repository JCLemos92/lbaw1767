<?php

  function isLoginCorrect($username, $password) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM users WHERE username = ? AND password = ?');
    $stmt->execute(array($username, md5($password)));
	//$stmt->execute(array($username, $password));
    $aux = $stmt->fetch();
    if($aux !== false) {
		echo $aux[user_ID];
    	setCurrentUserID($aux[user_ID]);
    }
    return $aux !== false;
  }
  
  function getAllUsers() {
    global $dbh;
    $stmt = $dbh->prepare("SELECT * FROM users order by username asc");
    $stmt->execute();
    
    
    $i = '0';
    $array1 = array();
    foreach ($stmt->fetchAll() as $row){
       $array1["$i"] = $row;
       $i++;
    }
    return $array1;
  }

    function getUser($userID) {
        global $dbh;
        $stmt = $dbh->prepare("SELECT * FROM users WHERE user_ID = ?");
        $stmt->execute(array($userID));

        return $stmt->fetch(PDO::FETCH_BOTH);
    }   
?>
