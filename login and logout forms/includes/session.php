<?php
	session_start();

	function setCurrentUser($username) {
		$_SESSION['username'] = $username;
	}

	function setCurrentUserID($userID) {
		$_SESSION['userID'] = $userID;
	}
?>
