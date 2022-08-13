function toggleSide() {
    var element = document.getElementById("sidebar");
    var element2 = document.getElementById("body-content");

    element.classList.toggle("toggleHide");
    element2.classList.toggle("toggleExpand");
}