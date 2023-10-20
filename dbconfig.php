<?php
$db = new SQLite3("members.db");
$query = "CREATE TABLE IF NOT EXISTS members (fname STRING, lname STRING, keterangan STRING)";
$db->exec($query);
?>