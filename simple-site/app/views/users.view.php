<?php require('partials/head.php'); ?>

<h2>All Users</h2>
<ul>
  <?php foreach ($users as $user): ?>
  <li>
    <?= $user->name ?>
  </li>
  <?php endforeach; ?>
</ul>

<h1>Submit your name</h1>

<form method='POST' action='/users'>
  <input name='name'>
  <button type="submit">Submit</button>
</form>

<?php require('partials/footer.php'); ?>
