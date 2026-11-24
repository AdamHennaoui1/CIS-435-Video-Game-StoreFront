console.log("Welcome to Game Garage!");

// Search for games
function searchGames() {
    let search = document.getElementById("searchInput").value.toLowerCase();
    let games = document.querySelectorAll(".game-card");

    games.forEach(function(game) {
        let name = game.querySelector("h3").textContent.toLowerCase();

        if (name.includes(search)) {
            game.style.display = "";
        } else {
            game.style.display = "none";
        }
    });
}

// Confirm before purchasing a game
function confirmPurchase() {
    return confirm("Are you sure you want to purchase this game?");
}
