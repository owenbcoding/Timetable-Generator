<?php
try {
    $dbh = new PDO(
        'mysql:host=mariadb;dbname=mydatabase;port=3306',
        'myuser',
        'mypassword',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
    echo "Database successfully connected.";
} catch (PDOException $ex) {
    echo "Database failed to connect: " . $ex->getMessage();
}

die(phpinfo());
