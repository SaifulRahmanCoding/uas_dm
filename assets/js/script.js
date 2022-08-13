function toggleSide() {
    var element = document.getElementById("sidebar");
    var element2 = document.getElementById("body-content");
    var element3 = document.getElementById("footer");

    element.classList.toggle("toggleHide");
    element2.classList.toggle("toggleExpand");
    element3.classList.toggle("toggleExpand");
}
$(document).ready(function () {
    $('body').scrollspy({
        target: "#NavControll", offset: 0
    });
});