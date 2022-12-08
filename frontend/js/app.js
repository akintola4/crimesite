
function closeSidebar() {
    var x = document.getElementById("mobile-sidebar")
    if (x.style.display === "flex") {
        x.style.display = "none"
    } else {
        x.style.display = "flex"
    }
}
function preview() {
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



function verifiedChange() {
    var all = document.getElementById("all")
    var verified = document.getElementById("verified")
    var mention = document.getElementById("mention")

    all.style.display = "none"
    verified.style.display = "block"
    mention.style.display = "none"

}

function mentionChange() {
    var all = document.getElementById("all")
    var verified = document.getElementById("verified")
    var mention = document.getElementById("mention")

    all.style.display = "none";
    verified.style.display = "none";
    mention.style.display = "block";

}

function notificationChange() {
    var all = document.getElementById("all")
    var verified = document.getElementById("verified")
    var mention = document.getElementById("mention")

    all.style.display = "block"
    verified.style.display = "none"
    mention.style.display = "none"
    // else if(all.style.display === "block" && verified.style.display =="none" && mention.style.display=="none"){
    //     all.style.display = "none"
    //     verified.style.display = "block"
    //     mention.style.display = "none"   
    // }else if(all.style.display === "none" && verified.style.display =="block" && mention.style.display=="none"){
    //     all.style.display = "none"
    //     verified.style.display = "none"
    //     mention.style.display = "block"   
    // }
}

