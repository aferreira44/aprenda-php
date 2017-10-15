<?php require 'partials/head.php' ?>

    <h1>Submit Your Name</h1>

    <ul>
        <?php foreach ($users as $user) : ?>
            <li><?= $user-> name; ?></li>
        <?php endforeach ?>
    </ul>

    <form method="POST" action="/php-pdo/names">
        <input type="text" name="name" />
        <button type="submit">Submit</button>
    </form>



    <?php require 'partials/footer.php' ?>