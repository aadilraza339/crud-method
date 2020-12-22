<!DOCTYPE html>
<html>
<head>
    <title>Todo with php</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<div class="H2">
		<h2 style="font-style: 'Hervetica';">Add TODO</h2>
	</div>
	<form method="post" action="create.php" class="input_form">
		<input type="text" name="task" class="task_input">
		<button type="submit" name="submit" class="add_btn">+</button>
    </form>
    

<table>
	<tbody>
        <?php 
        function todolist()
        {
            require_once('db_connect.php');
            $tasks = mysqli_query(db(), "SELECT * FROM tasks");
    
            while ($row = mysqli_fetch_array($tasks)) { ?>
                <tr>
                    <td class="task"> <?php echo $row['task']; ?> </td>
                    <td class="delete"> 
                        <a href="delete.php?del_task=<?php echo $row['id'] ?>">-</a> 
                    </td>
                </tr>
            <?php } ?>
       <?php }
        todolist() ?>
       	
	</tbody>
</table>

</body>
</html>









