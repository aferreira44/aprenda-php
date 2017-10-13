<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Step 8: Booleans</title>
</head>
<body>
    <h1>Task for the Day</h1>
    <ul>
        <!-- 
        <?php foreach ($task as $heading => $value) : ?>
            <li>
                <strong><?= ucwords($heading) ?>:</strong> <?= $value ?>
            </li>
        <?php endforeach ?>
         -->

        <li><strong>Name: </strong><?= $task['title']; ?></li>
        <li><strong>Due Date: </strong><?= $task['due']; ?></li>
        <li><strong>Person Responsible: </strong><?= $task['assigned_to']; ?></li>
        <li><strong>Status: </strong><?= $task['completed'] ? 'Complete' : 'Incomplete'; ?></li>
         
    </ul>
</body>
</html>