/** Filter Paintings */

function showAllFunction() {
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

function showAcrylicsFunction() {
    // Show just Acrylic paintings
    let acrylic = document.getElementsByClassName("acrylic");
    for (index = 0; index < acrylic.length; index++) {
        acrylic[index].style.display = "block";  
    }
}

function showWatercolorsFunction() {
    // Show just Watercolor paintings
    let watercolor = document.getElementsByClassName("watercolor");
    for (index = 0; index < watercolor.length; index++) {
        watercolor[index].style.display = "block";  
    }
}