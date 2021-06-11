<?php

include "db_conn.php";

$id = $_GET['id'];

$qry = mysqli_query($conn,"SELECT * FROM tasks WHERE id='$id'");

$row = mysqli_fetch_array($qry);

if(isset($_POST['update'])) // when click on update button
{
    $tasks = $_POST['task'];
    $edit = mysqli_query($conn,"UPDATE tasks set task='$tasks' WHERE id='$id'");

    if($edit)
    {
        mysqli_close($conn);
        header("location:index.php"); // redirects to index page
        exit;
    }
    else
    {
        echo mysqli_error();
    }
}
?>

<h3>Edit your task</h3>

<form method="POST">
  <input type="text" name="task" value="<?php echo $row['task'] ?>" placeholder="Edit your task" Required>
  <input type="submit" name="update" value="Update">
</form>
