<?php
	require_once('../config/Controller/Connect.php');
	require_once('../config/Controller/AppController.php');

	if(!empty($_POST['inputName'])){
		try{
			$sql  = 'INSERT INTO sortable(name,gender_id) VALUES(:ONAMAE,:GENDER)';
			$obj = new AppController();
			$obj->insert_sortable($sql, $_POST['inputName'], $_POST['inputSex']);
		
			header('location:'.$_SERVER["HTTP_REFERER"]);
			exit();
		} 
		catch (PDOException $e) {
			echo 'データベースにアクセスできません！'.$e->getMessage();
		}
	}
?>