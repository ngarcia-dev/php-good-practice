<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Ticket</title>
</head>
<body>
    <h1>Tickets</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Access Level</th>
        </tr>
      <?php /** @var User[] $users */
        foreach ($users as $user): ?>
            <tr>
                <td><?= $user->getId(); ?></td>
                <td><?= $user->getUsername(); ?></td>
                <td><?= $user->getPassword(); ?></td>
                <td><?= $user->getAccessLevel(); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
