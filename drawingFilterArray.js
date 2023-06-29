/** Filter Drawing Pieces */

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

function showPencil() {
    // Show pieces down with pencil
    let pencil = document.getElementsByClassName("pencil");
    for (index = 0; index < pencil.length; index++) {
        pencil[index].style.display = "block";  
    }
}

function showCharcoal() {
    // Show pieces down with charcoal
    let charcoal = document.getElementsByClassName("charcoal");
    for (index = 0; index < charcoal.length; index++) {
        charcoal[index].style.display = "block";  
    }
}