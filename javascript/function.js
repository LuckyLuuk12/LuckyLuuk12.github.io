// Room for javascript functions, note that javascript can be disabled by the client and should not be trusted!
/* Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu / bar icon */
function hamburger() {
    let i = document.getElementById("links");
    console.log(i);
    if (i.style.display !== "none") {
        i.style.display = "none";
    } else {
        i.style.display = "flex";
    }
}

$(document).ready(function(){
    $('#hamburger').click(function(){
        $(this).toggleClass('open');
    });
});
