<?php
declare(strict_types=1);
require_once 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

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
          getenv('DB_NAME'),
          getenv('DB_USER'),
          getenv('DB_PASS')
        );
        echo $conn->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";
        return $conn;
    }
}
