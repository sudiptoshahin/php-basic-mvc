
<?php require('partials/head.php'); ?>

<h1>All Users</h1>

    <?php foreach($users as $user): ?>
        <li><?= $user->name ?></li>

    <?php endforeach; ?>


    <h3>Submit your name:</h3>

    <form method="POST" action="/users">
        <input type="text" name="name" id="name">
        <input type="submit" value="Submit">
    </form>


<?php require('partials/footer.php') ?>



