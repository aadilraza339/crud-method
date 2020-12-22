<?php
require_once('db_connect.php');
require_once('index.php');
if(db()){
    if (isset($_GET['del_task'])) {
        $id = $_GET['del_task'];
        mysqli_query(db(), "DELETE FROM tasks WHERE id=".$id);
        // header('location: index.php');
    }
 }


?>