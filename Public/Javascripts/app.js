document.getElementById("toast").addEventListener("animationstart", () => {
    setTimeout(() => { document.getElementById("toast").classList.add("hidden"); }, 3000);
});