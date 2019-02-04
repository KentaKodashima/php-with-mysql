<?php require_once('../../../private/initialize.php') ?>

<?php

  $id = $_GET['id'] ?? '1'; // PHP > 7.0

  echo $id;

?>

<a href="show.php?name=<?php echo u('John Doe'); ?>">link</a><br />
<a href="show.php?company=<?php echo u('Widgets&More'); ?>">link</a><br />
<a href="show.php?name=<?php echo u('!#*?'); ?>">link</a><br />