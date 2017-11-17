<?php include 'config.php'?>
<?php include 'connection.php'?>

<?php
$tasks_todo = $bdd->query("SELECT * FROM task WHERE `task_ended_on_timestamp` = ''");
$tasks_done = $bdd->query("SELECT * FROM task WHERE `task_ended_on_timestamp` < `task_end_timestamp`");
$tasks_late = $bdd->query("SELECT * FROM task WHERE `task_ended_on_timestamp` > `task_end_timestamp`");
?>
<?php
if ( isset($_POST['insertTask'])){

        $task = $_POST['insertTask'];

        $title = "Mon titre";
        $description = "Ma description";
        $startat = "Ma start";
        $endat = $startat + (24*60*60*7);

        $q = "INSERT INTO task (task_title,task_description,task_start,task_end) VALUES (:title, :description, :startat, :endat)";

        $q = $db->prepare();

        $q->binParam(":title", $title, PDO::PARAM_STR);
        $q->binParam(":description", $description, PDO::PARAM_STR);
        $q->binParam(":startat", $startat, PDO::PARAM_INT);
        $q->binParam(":endat", $endat, PDO::PARAM_INT);



        $q-> execute();

        if ($q->_rowcount() > 0){

                echo true;

        }else {

                echo false;
        }


    }
if(isset($_POST['updateTask'])){

$task = $_POST;
}

if(isset($_POST['deleteTask'])){

$task = $_POST;
}

?>