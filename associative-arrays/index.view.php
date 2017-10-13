<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Step 7: Associative Arrays</title>
</head>
<body>
    <ul>
        <?php foreach ($person as $key => $val) : ?>
        <li><strong><?= $key ; ?></strong> <?= $val ; ?></li>
        <?php endforeach ?>
    </ul>
</body>
</html>