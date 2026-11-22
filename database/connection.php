<?php

// Connect to the SQLite database
$db = new PDO('sqlite:' . __DIR__ . '/game_garage.db');

// Show database errors if something goes wrong
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Enable foreign keys
$db->exec("PRAGMA foreign_keys = ON");