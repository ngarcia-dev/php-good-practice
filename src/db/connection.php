<?php

// Connection to the database postgresql using PDO

class ConnectionDB extends PDO {
    public function __construct
    (
      private readonly string $engine,
      private readonly string $host,
      private readonly string $database,
      private readonly string $user,
      private readonly string $password
    ) {
        $dns = $this->engine . ':host=' . $this->host . ';dbname=' . $this->database;
        parent::__construct($dns, $this->user, $this->password);
    }
}

$host = getenv('DB_HOST');
$database = getenv('DB_DATABASE');
$user = getenv('DB_USER');
$password = getenv('DB_PASS');

$connection = new ConnectionDB('pgsql', $host, $database, $user, $password);
echo $connection->getAttribute(PDO::ATTR_CONNECTION_STATUS);

$query = "SELECT * FROM admin_usuarios";

foreach ($connection->query($query) as $row) {
    print_r($row);
}

// Alternative way to query the database using fetch method
$result = $connection->query($query);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
     print_r($row);
}
