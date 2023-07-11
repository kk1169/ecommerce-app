var beBackdrop = document.getElementById("beBackdrop");

// Sidebar Settings
var beSidebarHasSub = document.querySelectorAll(
    ".has-sub .be-sidebar-menu-link"
);
for (var i = 0; i < beSidebarHasSub.length; i++) {
    beSidebarHasSub[i].addEventListener("click", function (e) {
        e.preventDefault();

        var beSidebarParent = this.parentNode;
        console.log(beSidebarParent.classList.contains("on"));

        if (beSidebarParent.classList.contains("on")) {
            beSidebarParent.classList.remove("on");
        } else {
            beSidebarParent.classList.add("on");
        }
    });
}

// Sidebar Toggle Settings
var beSidebarNavOpen = document.getElementById("beSidebarNavOpen");
var beSidebarNavClose = document.getElementById("beSidebarNavClose");
var beSidebarWrapper = document.getElementById("beSidebarWrapper");
beSidebarNavOpen.addEventListener("click", function () {
    beSidebarWrapper.classList.contains("on")
        ? beSidebarWrapper.classList.remove("on")
        : beSidebarWrapper.classList.add("on");
    beBackdrop.classList.remove("d-none");
});
beSidebarNavClose.addEventListener("click", function () {
    beSidebarWrapper.classList.contains("on")
        ? beSidebarWrapper.classList.remove("on")
        : beSidebarWrapper.classList.add("on");
    beBackdrop.classList.add("d-none");
});
