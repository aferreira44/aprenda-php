<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Step 4: PHP and HTML</title>
    <style>
        header {
            background: gray;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
<header>
    <h1>
        <?php $gretting ?>
    </h1>

    <h1>
        <?= $gretting ?>
    </h1>
</header>
    
</body>
</html>