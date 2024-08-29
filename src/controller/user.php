<?php
declare(strict_types=1);

// Call the model
require_once 'model/user.php';
$users = User::getAllUsers();

// Call the view
require_once 'views/user.php';
