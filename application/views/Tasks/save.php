<?php
$task_m = $this->input->get('task_m');
$task = $this->input->get('task');
$deadline_m = $this->input->get('deadline_m');
$deadline = $this->input->get('deadline');
$db = mysqli_connect('localhost', 'root', '', 'tasksdb');
$myquery = "update tasksdb.tasks set Task = '".$task_m."', Deadline ='".$deadline_m."' where Task = '".$task."' and Deadline ='".$deadline."'";
$res = mysqli_query($db, $myquery);
mysqli_close($db);
header('location: index');
