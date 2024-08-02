
const handleIntersection = (entries, observer, animationClass) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            
            entry.target.classList.add(animationClass);
        }
    });
};

const createIntersectionObserver = (animationClass) => {
    return new IntersectionObserver(
        (entries, observer) => {
            handleIntersection(entries, observer, animationClass);
        },
        {
            root: null,
            rootMargin: "0px",
            threshold: 0.5,
        }
    );
};


const imageAnimation = document.querySelectorAll('.fade-in')


if (window.innerWidth > 768) {
    const observerImage = createIntersectionObserver("fade-in-bottom");
   

    imageAnimation.forEach((element) => {
        observerImage.observe(element);
    });
   
   
}