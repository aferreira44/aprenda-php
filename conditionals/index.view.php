<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Step 9: Conditionals</title>
</head>
<body>
    <h1>Task for the Day</h1>
    <ul>
        <li><strong>Name: </strong><?= $task['title']; ?></li>
        <li><strong>Due Date: </strong><?= $task['due']; ?></li>
        <li><strong>Person Responsible: </strong><?= $task['assigned_to']; ?></li>
        <li><strong>Status: </strong>
        
        <?php if ($task['completed']) : ?>
            <span class="icon">&#9989;</span>
        <?php else : ?>
            <span class="icon">Incomplete</span>
        <?php endif ?>         
    </ul>
</body>
</html>