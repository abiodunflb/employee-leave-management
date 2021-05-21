<?php
// DB credentials.
define('DB_HOST', 'us-cdbr-east-03.cleardb.com');
define('DB_USER', 'b63e33cb97d614');
define('DB_PASS', 'e89b8fb0');
define('DB_NAME', 'heroku_a14305119a36ca7');
// Establish database connection.
try {
    $dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
