<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Todos Bekup</title>
  </head>
  <body>
    <h1>Daftar ToDo</h1>

    <ul>
       <?php
            $x = 0; //as index number (id)
            foreach ($todos as $todo):
       ?>
                <li> <?php echo $todo; ?> </li>

                <!--  delete button by index -->
                <form action="<?php echo base_url(); ?>todos/delete/<?php echo $x; ?>" method="POST">
                    <input type="submit" name="submit" value="Delete">
                </form>

                <!--  edit button by index -->
                <form action="<?php echo base_url(); ?>todos/edit/<?php echo $x; ?>" method="POST">
                    <input type="submit" name="submit" value="Edit">
                </form>

        <?php
            $x++;
            endforeach;
        ?>

      <br>

      <!--  add new todo -->
      <form action="<?php echo base_url(); ?>todos/create" method="post">
        <input type="text" name="new_todo" placeholder="new todo" required="">
        <input type="submit" name="submit" value="Add New">
      </form>
    </ul>

    <p> Total : <?php echo count($todos); ?></p>

  </body>
</html>
