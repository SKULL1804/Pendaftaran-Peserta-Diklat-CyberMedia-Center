document.addEventListener("click", function (e) {
    if(e.target.classList.contains("show")) {
        const src = e.target.getAttribute("src");
        document.querySelector(".img-modal").src = src;
        const myModal = new bootstrap.Modal(document.getElementById("exampleModal"));
        myModal.show();
    }
})
