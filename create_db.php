<?php
try {
    $dbh = new PDO('mysql:host=127.0.0.1', 'root', '');
    $dbh->exec('CREATE DATABASE IF NOT EXISTS db_inventrack');
    echo 'Database created successfully';
} catch (PDOException $e) {
    die('DB ERROR: ' . $e->getMessage());
}
