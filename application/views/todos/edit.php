<form action="<?php echo base_url(); ?>todos/update/<?php echo $id; ?>" method="POST">
    <input type="text" name="new_todo" value="<?php echo $todo; ?>">
    <input type="submit" name="submit" value="Edit">
</form>
