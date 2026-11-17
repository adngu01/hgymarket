<?php

$hostname_forumtest = "localhost";
$database_forumtest = "HGYmarket";
$username_forumtest = "HGYmarket";
$password_forumtest = "genji0804";

try {
    $forum = new PDO(
        "mysql:host=$hostname_forumtest;dbname=$database_forumtest;charset=utf8mb4",
        $username_forumtest,
        $password_forumtest
    );

    $forum->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Databasanslutningen misslyckades.");
}
