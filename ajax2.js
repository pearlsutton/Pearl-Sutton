
function loadPhotography() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.getElementById("morePhotography").innerHTML = this.responseText;
    }
    xhttp.open("GET", "morePhotography.php");
    xhttp.send();
}

function loadPainting() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.getElementById("morePainting").innerHTML = this.responseText;
    }
    xhttp.open("GET", "morePainting.php");
    xhttp.send();
}

function loadDrawing() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.getElementById("moreDrawing").innerHTML = this.responseText;
    }
    xhttp.open("GET", "moreDrawing.php");
    xhttp.send();
}

function loadDigital() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.getElementById("moreDigital").innerHTML = this.responseText;
    }
    xhttp.open("GET", "moreDigital.php");
    xhttp.send();
}