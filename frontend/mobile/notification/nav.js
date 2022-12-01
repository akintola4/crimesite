var all = document.getElementById("all")
var verified = document.getElementById("verified")
var mention = document.getElementById("mention")

function verifiedChange() {
       all.style.display = "none"
        verified.style.display = "block"
        mention.style.display = "none"   
    
}

function mentionChange() {
        all.style.display = "none";
        verified.style.display = "none";
        mention.style.display = "block" ;  
    
}

function notificationChange() {
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