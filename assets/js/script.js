function toggleSide() {
    var element = document.getElementById("sidebar");
    var element2 = document.getElementById("body-content");

    element.classList.toggle("toggleHide");
    element2.classList.toggle("toggleExpand");
}
$(document).ready(function () {
    $('body').scrollspy({
        target: "#NavControll", offset: 0
    });
});