
function closeSidebar() {
var x = document.getElementById("mobile-sidebar")
if (x.style.display === "flex") {
    x.style.display = "none"
} else {
    x.style.display = "flex"
}
}