<?php include 'config.php'?>
<?php include 'connection.php'?>

<?php
$tasks = $bdd->query("SELECT * FROM task ");
//$tasks_done = $bdd->query("SELECT * FROM task WHERE `task_ended_on_timestamp` < `task_end_timestamp`");
//$tasks_late = $bdd->query("SELECT * FROM task WHERE `task_ended_on_timestamp` > `task_end_timestamp`");
?>
<?php
if( isset( $_POST['insertTask'] ) ){
if( isset( $_POST['task_title'] ) && isset( $_POST['task_description'] ) && isset( $_POST['task_start_timestamp'] ) && isset( $_POST['task_end_timestamp'] ) ){
$title = $_POST['task_title'];
$description = $_POST['task_description'];
$startt = $_POST['task_start_timestamp'];
$endt = $_POST['task_end_timestamp'];

  $q = ('INSERT INTO task (task_title, task_description, task_start_timestamp, task_end_timestamp) VALUES (:title, :description, :startt, :endt)');
  $stm = $bdd->prepare($q);
  $stm->bindParam(':title', $title, PDO::PARAM_STR);
  $stm->bindParam(':description', $description, PDO::PARAM_STR);
  $stm->bindParam(':startt', $startt, PDO::PARAM_INT);
  $stm->bindParam(':endt', $endt, PDO::PARAM_INT);
  $stm->execute();
}
}

?>