import AOS from 'aos';
import 'aos/dist/aos.css';

window.addEventListener('load', () => {
    AOS.init({
        duration: 600,
        once: true,
        offset: 300,
        easing: 'ease-in-out'
    });

    AOS.refresh(); // Refresca cuando todo está cargado
});
