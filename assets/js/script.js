function confirm_delete_training() {
    return confirm("Anda Yakin Menghapus Seluruh Data Training?");
}
function confirm_delete_testing() {
    return confirm("Anda Yakin Menghapus Seluruh Data Testing?");
}
function confirm_delete() {
    return confirm("Anda Yakin Menghapus Data Ini?");
}
function toggleSide() {
    var element = document.getElementById("sidebar");
    var element2 = document.getElementById("body-content");

    element.classList.toggle("toggleHide");
    element2.classList.toggle("toggleExpand");
}