<?php

// Connect to our database
require_once 'connection.php';

// Create the users table
$db->exec("CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    username TEXT NOT NULL UNIQUE,
    email TEXT NOT NULL UNIQUE,
    password TEXT NOT NULL
)");

// Create the games table
$db->exec("CREATE TABLE IF NOT EXISTS games (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    title TEXT NOT NULL,
    genre TEXT NOT NULL,
    platform TEXT NOT NULL,
    price REAL NOT NULL
)");

// Create the purchases table
$db->exec("CREATE TABLE IF NOT EXISTS purchases (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    user_id INTEGER NOT NULL,
    game_id INTEGER NOT NULL,
    purchase_date TEXT DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (game_id) REFERENCES games(id),
    UNIQUE(user_id, game_id)
)");

// Games available in our store
$games = [
    ["Minecraft", "Sandbox", "PC", 29.99],
    ["Grand Theft Auto V", "Action", "PC", 29.99],
    ["Fortnite", "Battle Royale", "PC", 0.00],
    ["Rocket League", "Sports", "PC", 0.00],
    ["Call of Duty", "Shooter", "PC", 69.99],
    ["EA Sports FC 26", "Sports", "PS5", 69.99],
    ["Madden NFL 26", "Sports", "PS5", 69.99],
    ["NBA 2K26", "Sports", "PS5", 69.99],
    ["Grand Theft Auto VI", "Action", "PS5", 69.99],
    ["WWE 2K25", "Wrestling", "PS5", 59.99],
    ["Mortal Kombat 1", "Fighting", "PS5", 49.99],
    ["Hogwarts Legacy", "RPG", "PC", 59.99],
    ["Red Dead Redemption 2", "Action", "PC", 59.99],
    ["Marvel's Spider-Man 2", "Action", "PS5", 69.99],
    ["Need for Speed Unbound", "Racing", "PC", 49.99],
    ["Halloween", "Horror", "PC", 39.99],
    ["Friday the 13th: The Game", "Horror", "PC", 19.99],
    ["PGA Tour 2K25", "Sports", "PS5", 59.99],
    ["NHL 26", "Sports", "PS5", 69.99],
    ["MLB The Show 26", "Sports", "PS5", 69.99],
    ["Mario Kart 8 Deluxe", "Racing", "Nintendo Switch", 59.99],
    ["Phasmophobia", "Horror", "PC", 19.99],
    ["Escape the Backrooms", "Horror", "PC", 9.99],
    ["Lethal Company", "Horror", "PC", 9.99],
    ["The Last of Us Part I", "Action", "PC", 59.99],
    ["God of War Ragnarok", "Action", "PS5", 69.99],
    ["Elden Ring", "RPG", "PC", 59.99],
    ["Cyberpunk 2077", "RPG", "PC", 59.99],
    ["Resident Evil 4", "Horror", "PC", 39.99],
    ["Resident Evil Village", "Horror", "PC", 39.99],
    ["Dead by Daylight", "Horror", "PC", 19.99],
    ["Five Nights at Freddy's", "Horror", "PC", 9.99],
    ["Outlast", "Horror", "PC", 19.99],
    ["The Outlast Trials", "Horror", "PC", 39.99],
    ["Forza Horizon 5", "Racing", "PC", 59.99],
    ["Gran Turismo 7", "Racing", "PS5", 69.99],
    ["EA Sports UFC 5", "Fighting", "PS5", 69.99],
    ["Super Smash Bros. Ultimate", "Fighting", "Nintendo Switch", 59.99],
    ["Super Mario Odyssey", "Platformer", "Nintendo Switch", 59.99],
    ["The Legend of Zelda: Tears of the Kingdom", "Adventure", "Nintendo Switch", 69.99],
    ["Among Us", "Party", "PC", 4.99],
    ["Fall Guys", "Party", "PC", 0.00],
    ["Rust", "Survival", "PC", 39.99],
    ["ARK: Survival Ascended", "Survival", "PC", 44.99]
];

// Insert games into the database
foreach ($games as $game) {
    $check = $db->prepare(
        "SELECT id FROM games WHERE title = ? AND platform = ?"
    );

    $check->execute([$game[0], $game[2]]);

    if (!$check->fetch()) {
        $insert = $db->prepare(
            "INSERT INTO games (title, genre, platform, price)
             VALUES (?, ?, ?, ?)"
        );

        $insert->execute($game);
    }
}

echo "Database setup complete!";
