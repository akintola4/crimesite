function preview(){
        var x = document.getElementById("preview")
        if (x.style.display === "flex") {
            x.style.display = "none"
        } else {
            x.style.display = "flex"
        }
        document.getElementById("preview-picture").src = src
}
function close() {
    var x = document.getElementById("preview")
        if (x.style.display = "flex") {
            x.style.display = "none"
        } 
}