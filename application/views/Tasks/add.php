<?php
$g_task = $this->input->post('task');
$g_deadline = $this->input->post('deadline');
$s_user_id = $_SESSION['id'];
$db = mysqli_connect('localhost', 'root', '', 'tasksdb');
$myquery = "insert into tasks (task, deadline, id_users) value ('".$g_task."', '".$g_deadline."',  ".$s_user_id.")";
$res = mysqli_query($db, $myquery);
mysqli_close($db);
header('location: index');
