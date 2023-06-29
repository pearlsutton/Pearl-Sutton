/** Filter Digital Pieces */

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

function showIllustrator() {
    // Show just Illustrator pieces
    let illustrator = document.getElementsByClassName("illustrator");
    for (index = 0; index < illustrator.length; index++) {
        illustrator[index].style.display = "block";  
    }
}

function showPhotoshop() {
    // Show just Photoshop pieces
    let photoshop = document.getElementsByClassName("photoshop");
    for (index = 0; index < photoshop.length; index++) {
        photoshop[index].style.display = "block";  
    }
}

function showInDesign() {
    // Show just InDesign pieces
    let design = document.getElementsByClassName("design");
    for (index = 0; index < design.length; index++) {
        design[index].style.display = "block";  
    }
}