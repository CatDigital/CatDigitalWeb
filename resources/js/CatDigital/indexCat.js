AOS.init({
    duration: 800,
    once: true,
    offset: 100,
    easing: "ease-in-out",
});

const observer = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
                observer.unobserve(entry.target); // Solo una vez
            }
        });
    },
    {
        threshold: 0.2, // cuando 20% del elemento es visible
    }
);

document.querySelectorAll(".card-servicio").forEach((el) => {
    observer.observe(el);
});
// Iniciar AOS como siempre

// Intersection Observer personalizado
const observert = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
                observert.unobserve(entry.target); // solo animar una vez
            }
        });
    },
    {
        threshold: 0.2,
    }
);

document.querySelectorAll(".fade-observer").forEach((el) => {
    observert.observe(el);
});
