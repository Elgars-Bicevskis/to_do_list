<?php
  $errors = "";

  //connect to the db
$DBHOST = "localhost";
$DBUSER = "root";
$DBPWD = "";
$DBNAME = "todo";

 $conn = new mysqli($DBHOST,$DBUSER,$DBPWD,$DBNAME);
  $tasks = mysqli_query($conn, "SELECT * FROM tasks");

if($conn->connect_error){

die("Connection failed:".$conn->connect_error);
}

if(isset($_POST['submit'])){
  $task = $_POST['task'];
    if(empty($task)){
      $errors = "You must fill in the task";
    }else{
      mysqli_query($conn, "INSERT INTO tasks (task) VALUES ('$task')");
      header('Location: index.php');
    }


}
    //delete task
    if (isset($_GET['del_task'])) {
      $id = $_GET['del_task'];
      mysqli_query($conn, "DELETE FROM tasks WHERE id=$id");
      header('Location: index.php');
    }





 ?>
