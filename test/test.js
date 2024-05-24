// scrolling-images.js

// Add a scroll event listener to handle image scrolling
document.addEventListener("scroll", scrollImages);

// Function to scroll the images inside the .itemImg containers
function scrollImages() {
    const items = document.querySelectorAll(".item");

    items.forEach((item) => {
        const itemImg = item.querySelector(".itemImg");
        const image = item.querySelector("img");

        if (isElementInViewport(item)) {
            const scrollY = window.scrollY;
            const itemOffset = item.getBoundingClientRect().top + scrollY;
            const imageOffset = itemImg.getBoundingClientRect().top + scrollY;
            const itemHeight = item.clientHeight;
            const imageHeight = itemImg.clientHeight;

            const scrollFactor = (scrollY - itemOffset) / (itemHeight - imageHeight);

            // Scroll the image inside the .itemImg container while keeping the container fixed
            image.style.transform = `translateY(${-scrollFactor * (imageHeight - itemHeight) * 0.035}px)`; // Adjust the scroll factor (0.2) for the desired effect
        }
    });
}

// Helper function to check if an element is in the viewport
function isElementInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}
