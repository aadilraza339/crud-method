<?php
require_once('db_connect.php');
require_once('index.php');
if(db()){
    if (isset($_POST['submit'])) {
		if (empty($_POST['task'])) {
			$errors = "You ust fill in the task";
        }
        else{
			$task = $_POST['task'];
			$sql = "INSERT INTO tasks (task) VALUES ('$task')";
            mysqli_query(db() , $sql);
            // header('location: index.php');
		}
    }
}
?>