document.addEventListener("DOMContentLoaded", () => {
    const readMoreButtons = document.querySelectorAll(".read-more-btn");

    readMoreButtons.forEach((button) => {
        button.addEventListener("click", (e) => {
            const post = e.target.closest(".single_post");
            const hiddenDetails = post.querySelector(".hidden-details");

            if (hiddenDetails.style.display === "block") {
                hiddenDetails.style.display = "none";
                button.textContent = "Read More";
            } else {
                hiddenDetails.style.display = "block";
                button.textContent = "Show Less";
            }
        });
    });
});
