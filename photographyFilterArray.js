/** Filter Photogrpahy Photos */

function showAll() {
    let grid = document.getElementsByClassName("grid");
    for (index = 0; index < grid.length; index++) {
        grid[index].style.display = "block";  
    }
}

function showNone() {
    let grid = document.getElementsByClassName("grid");
    for (index = 0; index < grid.length; index++) {
        grid[index].style.display = "none";  
    }
}

function show18() {
    // Show just 18mm images
    let eighteen = document.getElementsByClassName("18mm");
    for (index = 0; index < eighteen.length; index++) {
        eighteen[index].style.display = "block";  
    }
}

function show70() {
    // Show just 70mm images
    let seventy = document.getElementsByClassName("70mm");
    for (index = 0; index < seventy.length; index++) {
        seventy[index].style.display = "block";  
    }
}

function showCreatures() {
    // Show images with creatures
    let creatures = document.getElementsByClassName("creatures");
    for (index = 0; index < creatures.length; index++) {
        creatures[index].style.display = "block";  
    }
}

function showSkies() {
    // Show sky photos
    let skies = document.getElementsByClassName("sky");
    for (index = 0; index < skies.length; index++) {
        skies[index].style.display = "block";  
    }
}