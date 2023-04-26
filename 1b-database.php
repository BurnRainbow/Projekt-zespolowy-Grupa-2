<?php
// (A) SETTINGS - CHANGE TO YOUR OWN !
error_reporting(E_ALL & ~E_NOTICE);
define("DB_HOST", "localhost");
define("DB_NAME", "test");
define("DB_CHARSET", "utf8mb4");
define("DB_USER", "root");
define("DB_PASSWORD", "");

// (B) CONNECT TO DATABASE
$pdo = new PDO(
  "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET,
  DB_USER, DB_PASSWORD, [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

// (C) GET USERS
$stmt = $pdo->prepare("SELECT * FROM `users`");
$stmt->execute();
$users = $stmt->fetchAll();
foreach ($users as $u) {
  printf("<div id='div_id%u'>[%u] %s</div>", $u['user_id'], $u['user_id'], $u['user_name']);
}

// (D) CLOSE DATABASE CONNECTION
$pdo = null;
$stmt = null;
?>