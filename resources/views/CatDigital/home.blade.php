@extends('CatDigital.indexCat')

@section('contenidot')
    <header class="hero-header" id="inicio">
        <div class="overlay"></div>

        <div class="hero-content" data-aos="fade-up">
            <h1 class="typing-effect">Impulsa tu Marca al Mundo Digital</h1>
            <p>Desarrollamos soluciones creativas: <span class="highlight">Webs</span>, <span class="highlight">Blogs</span>,
                <span class="highlight">Tiendas</span> y <span class="highlight">Publicidad</span>.
            </p>
            <a href="#servicios" class="btn-hero">Ver Servicios</a>
        </div>
    </header>


    <!-- Sección de Servicios -->
    <section class="servicios" id="servicios">
        <div class="top">
            <h2 data-aos="fade-up">Nuestros Servicios</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-3" data-aos="fade-up">
                        <div class="card-servicio">
                            <i class="bi bi-code-slash"></i>
                            <h4>Desarrollo Web</h4>
                            <p>Sitios modernos, rápidos y responsive</p>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-servicio">
                            <i class="bi bi-pencil"></i>
                            <h4>Blogs Profesionales</h4>
                            <p>Contenido atractivo con SEO optimizado</p>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-servicio">
                            <i class="bi bi-cart4"></i>
                            <h4>Tiendas Online</h4>
                            <p>Potencia tus ventas con e-commerce de alto nivel</p>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-servicio">
                            <i class="bi bi-bullseye"></i>
                            <h4>Publicidad Digital</h4>
                            <p>Campañas publicitarias de gran impacto</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Galería de Proyectos -->
    <section class="galeria" id="galeria">
        <div class="topgaleri">
            <h2 data-aos="fade-up">Galería de Proyectos</h2>

            <div class="galeria-grid container" data-aos="fade-up">

                <!-- Proyecto 1 -->
                <div class="galeria-item" data-aos="zoom-in">

                    <img src="/img/apn.jpg" alt="Proyecto Web 1">
                    <div class="galeria-caption">
                        <p>Panaderia Tio Pan</p>
                    </div>
                </div>

                <!-- Proyecto 2 -->
                <div class="galeria-item" data-aos="zoom-in" data-aos-delay="100">

                    <img src="/img/nike.jpg" alt="Proyecto Web 1">
                    <div class="galeria-caption">
                        <p>Rife Sport</p>
                    </div>
                </div>

                <!-- Proyecto 3 -->
                <div class="galeria-item" data-aos="zoom-in" data-aos-delay="200">

                    <img src="/img/abo.jpg" alt="Proyecto Web 1">
                    <div class="galeria-caption">
                        <p>Abogado "Lionel hutz"</p>
                    </div>
                </div>

                <!-- Proyecto 4 -->
                <div class="galeria-item" data-aos="zoom-in" data-aos-delay="300">

                    <img src="/img/sushy.jpg" alt="Proyecto Web 1">
                    <div class="galeria-caption">
                        <p>sushy Fugu</p>
                    </div>
                </div>

            </div>
        </div>
    </section>




    <!-- Sección de Contacto -->
    <section class="contacto" id="contacto">
        <div class="contacto-overlay"></div>
        <div class="contacto-contenido" data-aos="zoom-in">
            <h2>Contáctanos</h2>
            <p>¿Listo para impulsar tu negocio? Escríbenos hoy mismo.</p>
            <a href="mailto:contacto@tuempresa.com">Enviar Correo</a>
        </div>
    </section>


    <!-- Footer -->
    <footer data-aos="fade-up">
        &copy; 2025 Servicios Digitales. Todos los derechos reservados.
    </footer>
@endsection
