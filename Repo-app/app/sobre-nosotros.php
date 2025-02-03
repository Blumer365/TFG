<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sobre Nosotros - Umai Sushi</title>
        <link rel="stylesheet" href="style-sushi.css">
        <script src="https://kit.fontawesome.com/b7aadd81e0.js" crossorigin="anonymous"></script>
    </head>
    
    <body>
    <!-- header -->
        <header>
            <div class="navbar">
                <a href="pagina-principal.php" class="logo-link">
                    <img src="imgs/logo.png" alt="Umai Sushi"/>
                </a>
                <ul>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropbtn">Menú</a>
                        <div class="dropdown-content">
                            <a href="pagina-principal.php">Inicio</a>
                            <a href="sobre-nosotros.php">Sobre nosotros</a>
                            <a href="menu-completo.php">Menú</a>
                            <a href="pagina-principal.php#reviews">Opiniones</a>
                            <a href="pagina-principal.php#contact">Contacto</a>
                        </div>
                    </li>
                </ul>
                <nav>
                    <ul>
                        <li><a href="pagina-principal.php">Inicio</a></li>
                        <li><a href="sobre-nosotros.php">Sobre nosotros</a></li>
                        <li><a href="menu-completo.php">Menú</a></li>
                        <li><a href="pagina-principal.php#reviews">Opiniones</a></li>
                        <li><a href="pagina-principal.php#contact">Contacto</a></li>
                    </ul>
                </nav>
            </div>
        </header>
    <!-- FIN header -->

    <!-- sobre nosotros -->
        <section id="nosotros">
            <div class="container">
                <h2>Sobre Nosotros</h2>
                <div class="about-info">
                    <h3>Origen del sushi</h3>
                    <p>El sushi, un plato japonés emblemático, tiene sus raíces en la antigua China, donde se conservaba el pescado en arroz fermentado. Esta técnica se trasladó a Japón en el siglo VIII, donde evolucionó hasta convertirse en el "nare-zushi", con pescado fermentado envuelto en arroz. Durante el período Edo en Japón, surgió el "Edo-mae-zushi", que incorporaba vinagre de arroz para sazonar el arroz y añadía ingredientes frescos como pescado crudo y mariscos.</p>
                    <p>La evolución del sushi continuó a principios del siglo XX, cuando se popularizó en Japón y comenzó a expandirse por todo el mundo. El sushi moderno se caracteriza por su diversidad de estilos y sabores, adaptados a las preferencias locales de cada región. Con la globalización, el sushi se ha convertido en un plato ampliamente reconocido internacionalmente y una parte integral de la cocina mundial.</p>
                    <p>Hoy en día, el sushi sigue siendo un símbolo de la cultura japonesa y una experiencia culinaria apreciada en todo el mundo. Su historia rica y variada refleja la creatividad y la innovación de los chefs japoneses, así como la capacidad de adaptación del sushi a los gustos y preferencias de diferentes culturas y paladares.</p>
                    <h3>Significado de "Umai"</h3>
                    <p>"Umai" es una palabra japonesa que se traduce como "delicioso" o "sabroso". Es una expresión comúnmente utilizada para describir la comida deliciosa y sabrosa en Japón. En Umai Sushi, nos esforzamos por ofrecer platos que reflejen verdaderamente el significado de esta palabra.</p>
                </div>
            </div>
        </section>
    <!-- FIN sobre nosotros -->

    <!-- preguntas frecuentes -->
        <section id="preguntas">
            <div class="faq">
                <h2>Preguntas frecuentes</h2>
                <div class="accordion">
                    <div class="question">
                        <button class="accordion-btn">¿Cuáles son sus horarios de apertura?</button>
                        <div class="panel">
                            <p>Nuestro restaurante está abierto de lunes a sábado de 12:00 p.m. a 10:00 p.m.</p>
                        </div>
                    </div>
                    <div class="question">
                        <button class="accordion-btn">¿Ofrecen opciones vegetarianas?</button>
                        <div class="panel">
                            <p>Sí, tenemos una variedad de opciones vegetarianas en nuestro menú.</p>
                        </div>
                    </div>
                    <div class="question">
                        <button class="accordion-btn">¿Qué tipo de pescado utilizan para hacer el sushi?</button>
                        <div class="panel">
                            <p>En Umai Sushi utilizamos una variedad de pescados frescos y de alta calidad, incluyendo salmón, atún, pez mantequilla (hamachi), langostino, y más. Nos aseguramos de obtener nuestros ingredientes de proveedores confiables y garantizamos la frescura y calidad de nuestros productos.</p>
                        </div>
                    </div>
                    <div class="question">
                        <button class="accordion-btn">¿Tienen opciones vegetarianas o veganas en su menú?</button>
                        <div class="panel">
                            <p>Sí, en nuestro menú ofrecemos una variedad de opciones vegetarianas y veganas para nuestros clientes que prefieren evitar los productos de origen animal. Desde rollos de vegetales hasta opciones de tempura de verduras, tenemos platos deliciosos que satisfarán tus preferencias dietéticas.</p>
                        </div>
                    </div>
                    <div class="question">
                        <button class="accordion-btn">¿Cómo se prepara el arroz para el sushi?</button>
                        <div class="panel">
                            <p>El arroz para sushi se prepara con arroz de grano corto específico para sushi, que se lava y se cuece al vapor. Luego, se sazona con una mezcla de vinagre de arroz, azúcar y sal, que le da su característico sabor y textura pegajosa. En Umai Sushi, seguimos una receta tradicional japonesa para garantizar que nuestro arroz de sushi sea auténtico y delicioso.</p>
                        </div>
                    </div>
                    <div class="question">
                        <button class="accordion-btn">¿Ofrecen opciones sin gluten?</button>
                        <div class="panel">
                            <p>Sí, entendemos la importancia de ofrecer opciones sin gluten para nuestros clientes con necesidades dietéticas especiales. Tenemos platos sin gluten en nuestro menú, como el sashimi, el edamame, y otros rollos de sushi que pueden adaptarse para cumplir con tus requisitos alimenticios. Además, tomamos medidas especiales para evitar la contaminación cruzada en la preparación de estos platos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- FIN preguntas frecuentes -->

    <!-- acordeón de preguntas frecuentes -->
        <script>
            var acc = document.getElementsByClassName("accordion-btn");
            var i;

            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.maxHeight) {
                        panel.style.maxHeight = null;
                    } else {
                        panel.style.maxHeight = panel.scrollHeight + "px";
                    }
                });
            }
        </script>
    <!-- FIN acordeón de preguntas frecuentes -->

    <!-- contacto -->
        <section id="contact">
            <div class="container">
                <h2>¿Dónde puedes encontrarnos?</h2>
            </div>

            <div class="ubicacion">
                <div class="contacto">
                    <div class="detalle">
                        <p><i class="fas fa-map-marker-alt"></i> Dirección restaurante: Calle Lorem Ipsum 33, Madrid</p>
                        <p><i class="fas fa-at"></i> No te olvides de etiquetarnos en nuestras redes sociales y... de disfrutar !!</p>
                        <p><i class="fas fa-phone-alt"></i> Puedees llamar al +34 6xx XX xx XX para reservar mesa (min. 5 personas)</p>
                    </div>
                </div>
                <div class="mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3192.890760920745!2d9.190285614832027!3d45.46536227910153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47881b4df3ad1b33%3A0x8ba4c6d98f8bdc1d!2sUmai%20Sushi!5e0!3m2!1sen!2sit!4v1638359514782!5m2!1sen!2sit" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </section>
    <!-- FIN contacto -->

    <!-- footer -->
        <footer>
                <div class="left">
                    <div class="ubicacion">
                        <i class="fas fa-map-marker-alt" style="color: #F6B26B;"></i>
                        <span>Calle Lorem Ipsum 33, Madrid</span>
                    </div>
                    <div class="telefono">
                        <i class="fas fa-phone-alt" style="color: #F6B26B;"></i>
                        <span>+34 6xx XX xx XX</span>
                    </div>
                    <div class="redes-sociales">
                        <a href="#"><i class="fab fa-twitter" style="color: #F6B26B;"></i></a>
                        <a href="#"><i class="fab fa-facebook-f" style="color: #F6B26B;"></i></a>
                        <a href="#"><i class="fab fa-instagram" style="color: #F6B26B;"></i></a>
                    </div>
                </div>
                <div class="middle">
                    <a href="pagina-principal.php" class="logo-link-footer">
                    <img src="imgs/logo.png" alt="Umai Sushi"/>
                </div>
                <div class="right">
                    <a href="#">PRIVACIDAD</a>
                    <a href="#">POLÍTICA DE COOKIES</a>
                    <a></a>
                    <span>COPYRIGHT © 2024 UMAI SUSHI</span>
                </div>
        </footer>
    <!-- FIN footer -->
        
    <!-- botón scroll arriba -->
        <button onclick="goToTop()" id="goTopButton" title="Ir arriba">↑</button>

        <script>
            function goToTop() {
                const currentScroll = document.documentElement.scrollTop || document.body.scrollTop;
                if (currentScroll > 0) {
                    window.requestAnimationFrame(goToTop);
                    window.scrollTo(0, currentScroll - (currentScroll / 8));
                }
            }

            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("goTopButton").style.display = "block";
                } else {
                    document.getElementById("goTopButton").style.display = "none";
                }
            }
        </script>
    <!-- FIN botón scroll arriba -->

    </body>
</html>
