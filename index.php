
<?php require 'db_conn.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Todo List</title>
     <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <div class="heading">
        <h2>YOUR TO DO LIST</h2>
    </div>

    <div class="quote" style="text-align: center;">
      <span>“Create your own miracles; do what you think you cannot do.”
― Roy T. Bennett</span>
    </div>

      <form class="form" action="index.php" method="post" >
        <?php if(isset($errors)) { ?>
          <p> <?php echo $errors; ?></p>
        <?php } ?>

          <input class="task_input" type="text" name="task" placeholder="Enter your task">
          <button class="add_btn" type="submit" name="submit">Add Task</button>
      </form>


 <table>
    <thead>
        <tr>
            <th>Num</th>
            <th>Task</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>

      <?php
// fix num order
       $i = 1; while($row = mysqli_fetch_array($tasks)){ ?>
        <tr>
          <td><?php echo $i; ?></td>
          <td><input type=checkbox  id="ckb" onclick=my_fun()></td>
          <td id="check_task"><?php echo $row['task']; ?></td>
          <td class="delete">
            <a href="index.php?del_task=<?php echo $row['id']; ?>">x</a>
          </td>
          <td class="edit">
            <a href="edit.php?id=<?php echo $row['id']; ?>">&#9998;</a>
          </td>
        </tr>

    <?php $i++; } ?>

    </tbody>


 </table>


  </body>
</html>
