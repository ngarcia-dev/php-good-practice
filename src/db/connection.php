<?php
declare(strict_types=1);

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

    public static function connection(): ConnectionDB
    {
        $conn = new ConnectionDB(
          'pgsql',
          getenv('DB_HOST'),
          getenv('DB_DATABASE'),
          getenv('DB_USER'),
          getenv('DB_PASS')
        );
        echo $conn->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";
        return $conn;
    }
}

//$connection = ConnectionDB::connection();
//
//$query = "SELECT * FROM admin_usuarios";
//$result = $connection->query($query);
//$tickets = [];
//while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
//    $tickets[] = $row;
//}
//print_r($tickets);
