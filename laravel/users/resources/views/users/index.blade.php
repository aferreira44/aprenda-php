<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Document</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1>All Users</h1>

        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach

        <h2>Add a User</h2>

        <form method="POST" action="users">
            {{ csrf_field() }}
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Add User</button>
        </form>
    </body>
</html>