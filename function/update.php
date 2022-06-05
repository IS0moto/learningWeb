<?php
require_once('../config/Controller/Connect.php');
require_once('../config/Controller/AppController.php');
/* 移動したようその座標をデータベースへ登録 */
if(!empty($_POST['left'])){
    try{
      $sql  = 'UPDATE `sortable` SET `left_x` = :LEFT, `top_y` = :TOP WHERE `id` = :NUMBER ';
      $obj=new AppController();
      $obj->update_sortable($sql,$_POST['left'],$_POST['top'],$_POST['id']);

    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
?>