save_btn = document.querySelector(".save-btn");
save_btn.onclick = function () {
    this.innerHTML = "<div class='loader-btn'></div>";
    setTimeout(() => {
        this.innerHTML = "Settings Saved!";
        this.style = "background: #f1f5f4; color: #333; pointer-events: none;";
    }, 800);
};
save_btn1 = document.querySelector(".save-btn1");
save_btn1.onclick = function () {
    this.innerHTML = "<div class='loader-btn1'></div>";
    setTimeout(() => {
        this.innerHTML = "Done!";
        this.style = "background: #f1f5f4; color: #333; pointer-events: none;";
    }, 800);
};
