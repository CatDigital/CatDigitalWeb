@extends('layout.index')




<style>
    .hero-section {
        width: 100vw;
        height: 100vh;
        background: url('{{ asset('img/fondo3.jpg') }}') top center / cover no-repeat fixed;
        background-attachment: fixed;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        margin: 0;
        padding: 0;
        position: relative;
    }




    .hero-content {
        background: rgba(0, 0, 0, 0.6);
        padding: 40px;
        border-radius: 20px;
        backdrop-filter: blur(5px);
        max-width: 700px;
        animation: fadeInDown 1s ease;
    }

    .btn-primary-hero {
        display: inline-block;
        padding: 14px 35px;
        background: linear-gradient(135deg, #007bff, #6610f2);
        color: white;
        border-radius: 30px;
        font-weight: bold;
        text-decoration: none;
        transition: all 0.4s ease;
        font-size: 1.1rem;
    }

    .btn-primary-hero:hover {
        background: linear-gradient(135deg, #0056b3, #5a00b1);
        transform: scale(1.1);
    }

    /* Servicios Section */
    .servicios-section {
        background: #f8f9fa;
    }

    .card-servicio {
        background: white;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.4s, box-shadow 0.4s;
        height: 100%;
    }

    .card-servicio:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
    }

    .card-servicio i {
        font-size: 3rem;
        color: #007bff;
        margin-bottom: 20px;
    }

    /* CTA Section */
    .cta-section {
        background: linear-gradient(135deg, #6610f2, #007bff);
        color: white;
    }

    /* Scroll Image Section */
    .scroll-image-section {
        height: 60vh;
        background: url('https://images.unsplash.com/photo-1506765515384-028b60a970df') center center / cover no-repeat fixed;
        position: relative;
    }

    /* Footer */
    .footer-section {
        background: #222;
        color: #bbb;
        font-size: 0.9rem;
    }

    /* Animaciones personalizadas */
    .animate-on-scroll {
        opacity: 0;
        transform: translateY(50px);
        transition: all 0.8s ease-out;
    }

    .animate-on-scroll.active {
        opacity: 1;
        transform: translateY(0);
    }

    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-50px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const elements = document.querySelectorAll('.animate-on-scroll');

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, {
            threshold: 0.2
        });

        elements.forEach(element => observer.observe(element));
    });
</script>

@section('contenido')
    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-content">
            <h1 class="fw-bold mb-4">Soluciones Digitales a tu Medida</h1>
            <p class="lead mb-4">Impulsa tu negocio con nuestros servicios web de alta calidad.</p>
            <a href="#servicios" class="btn-primary-hero">Explora Nuestros Servicios</a>
        </div>
    </div>

    <!-- Servicios Section -->
    <section id="servicios" class="servicios-section py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-5 animate-on-scroll">Nuestros Servicios</h2>
            <div class="row g-4">
                <div class="col-md-4 animate-on-scroll">
                    <div class="card-servicio text-center p-4">
                        <i class="bi bi-shop-window mb-3"></i>
                        <h5 class="fw-bold">Tiendas Online</h5>
                        <p>Desarrollamos e-commerce a medida para potenciar tus ventas en línea.</p>
                    </div>
                </div>
                <div class="col-md-4 animate-on-scroll">
                    <div class="card-servicio text-center p-4">
                        <i class="bi bi-globe2 mb-3"></i>
                        <h5 class="fw-bold">Páginas Corporativas</h5>
                        <p>Diseñamos páginas profesionales para fortalecer tu presencia en Internet.</p>
                    </div>
                </div>
                <div class="col-md-4 animate-on-scroll">
                    <div class="card-servicio text-center p-4">
                        <i class="bi bi-lightning-charge mb-3"></i>
                        <h5 class="fw-bold">Optimización SEO</h5>
                        <p>Mejoramos el posicionamiento de tu web para atraer más clientes potenciales.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Scroll Image Section (Nueva imagen al hacer scroll) -->
    <section class="scroll-image-section d-flex align-items-center justify-content-center">
        <h2 class="text-white text-center animate-on-scroll fw-bold display-5">Creamos experiencias únicas para tus clientes
        </h2>
    </section>

    <!-- CTA Section -->
    <section class="cta-section py-5">
        <div class="container text-center">
            <h2 class="fw-bo    ld mb-4 animate-on-scroll">¿Listo para comenzar tu proyecto?</h2>
            <a href="#contacto" class="btn-primary-hero">Contáctanos Hoy</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-section py-4">
        <div class="container text-center">
            <p class="mb-0">&copy; 2025 TuEmpresaWeb. Todos los derechos reservados.</p>
        </div>
    </footer>
@endsection
