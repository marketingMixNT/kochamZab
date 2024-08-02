const figures = document.querySelectorAll("figure");

figures.forEach((originalFigure) => {
    const originalImg = originalFigure.querySelector("img");
    if (originalImg) {
        const newFigure = document.createElement("figure");
        newFigure.className = "attachment attachment--preview attachment--png";
        newFigure.setAttribute("data-trix-content-type", "image/png");
        newFigure.setAttribute(
            "data-trix-attributes",
            '{"presentation":"gallery"}'
        );

        const newImg = document.createElement("img");
        newImg.src = originalImg.src;
        newImg.width = originalImg.width;
        newImg.height = originalImg.height;

        newFigure.appendChild(newImg);

        originalFigure.parentNode.replaceChild(newFigure, originalFigure);
    }
});
