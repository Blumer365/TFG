<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Umai Sushi</title>
        <script src="https://kit.fontawesome.com/b7aadd81e0.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style-sushi.css">
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

    <!-- introducción nosotros -->
        <section id="nosotros">
            <div class="nosotros-intro">
                <h2>Sobre Nosotros</h2>
                <p>"Umai" es una palabra de origen japonés que significa "delicioso" o "sabroso". Esta palabra se ha convertido en una expresión común para describir alimentos deliciosos en la cultura japonesa. En el restaurante "Umai Sushi", nos inspiramos en esta palabra para ofrecer una experiencia culinaria que celebra la exquisita tradición de la cocina japonesa. Cada plato que servimos está cuidadosamente preparado para deleitar los paladares de nuestros clientes con sabores auténticos y frescos, ofreciendo una verdadera indulgencia para los amantes del sushi y la gastronomía japonesa.</p>
            </div>
            <div class="div-botonmas">
                <a href="sobre-nosotros.php" class="boton-saber-mas">Saber más</a>
            </div>
        </section>
    <!-- FIN introducción nosotros -->

    <!-- Imágenes de separación -->
        <div class="contenedor-imagenes">
            <div class="fila">
                <img src="imgs/separacion/img-separacion1.jpg" alt="Imagen 1"/>
                <img src="imgs/separacion/img-separacion2.jpg" alt="Imagen 2"/>
                <img src="imgs/separacion/img-separacion3.jpg" alt="Imagen 3"/>
                <img src="imgs/separacion/img-separacion4.jpg" alt="Imagen 4"/>
                <img src="imgs/separacion/img-separacion5.jpg" alt="Imagen 5"/>
                <img src="imgs/separacion/img-separacion6.jpg" alt="Imagen 6"/>
                <img src="imgs/separacion/img-separacion7.jpg" alt="Imagen 7"/>
                <img src="imgs/separacion/img-separacion8.jpg" alt="Imagen 8"/>
            </div>
        </div>
    <!-- FIN Imágenes de separación -->

        <section id="fondo-descubre">
                <div class="titulo-descubre">
                    <h2>Descubre nuestra carta</h2>
                    <p class="txt-contenedores">Puedes ver el menú abajo</p>
                </div>
        </section>

        <section id="menu-inicio">
            <div class="fondo-imagen"></div>
            <div class="fondo-semi-transparente"></div>
            <div class="fondo-menu">
                <div class="icono icono-arriba-izquierda"><i class="fa-solid fa-utensils" style="color: #543D29;"></i></div>
                <div class="icono icono-arriba-derecha"><i class="fa-solid fa-utensils" style="color: #543D29;"></i></div>
                <div class="icono icono-abajo-izquierda"><i class="fa-solid fa-bowl-food" style="color: #543D29;"></i></div>
                <div class="icono icono-abajo-derecha"><i class="fa-solid fa-bowl-food" style="color: #543D29;"></i></div>

    <!-- entrantes --> 
                <div class="category">
                    <h3 class="ttl-entrante">Entrantes</h3>
                <div class="categorias">
                    <div class="dish">
                        <div class="dish-info">
                            <h4>Gyoza (Empanadillas japonesas)</h4>
                            <p>Alérgenos: Puede contener trigo, soja, y sésamo.</p>
                        </div>
                        <div class="dish-image">
                            <img src="imgs/entrantes/entrante-2.jpg" alt="Nombre del entrante 2"/>
                        </div>
                    </div>
                    <div class="dish">
                        <div class="dish-info">
                            <h4>Yakitori (Brochetas de pollo a la parrilla)</h4>
                            <p>Alérgenos: Puede contener soja.</p>
                        </div>
                        <div class="dish-image">
                            <img src="imgs/entrantes/entrante-4.jpg" alt="Nombre del entrante 4"/>
                        </div>
                    </div>
                    <div class="dish">
                        <div class="dish-info">
                            <h4>Takoyaki (Bolitas de pulpo)</h4>
                            <p>Alérgenos: Puede contener trigo, soja, y sésamo.</p>
                        </div>
                        <div class="dish-image">
                            <img src="imgs/entrantes/entrante-6.jpg" alt="Nombre del entrante 6"/>
                        </div>
                    </div>
                </div>
                </div>
    <!-- FIN entrantes -->

    <!-- platos calientes -->    
                <div class="category">
                    <h3>Platos Calientes</h3>
                <div class="categorias">
                    <div class="dish">
                        <div class="dish-info">
                            <h4>Ramen</h4>
                            <p>Alérgenos: Puede contener trigo y soja en la sopa base, gluten, mariscos, huevos y productos lácteos.</p>
                        </div>
                        <div class="dish-image">
                            <img src="imgs/platos/plato-1.jpg" alt="Nombre del plato 1"/>
                        </div>
                    </div>
                    <div class="dish">
                        <div class="dish-info">
                            <h4>Yakiniku</h4>
                            <p>Alérgenos: Puede contener soja, gluten, mariscos y sésamo.</p>
                        </div>
                        <div class="dish-image">
                            <img src="imgs/platos/plato-6.jpg" alt="Nombre del plato 6"/>
                        </div>
                    </div>
                    <div class="dish">
                        <div class="dish-info">
                            <h4>Nikujaga (Estofado de carne y patatas)</h4>
                            <p>Alérgenos: Puede contener gluten en la salsa de soja y trigo en la preparación del plato.</p>
                        </div>
                        <div class="dish-image">
                            <img src="imgs/platos/plato-7.jpg" alt="Nombre del plato 7"/>
                        </div>
                    </div>
                </div>
                </div>
    <!-- FIN platos calientes -->

    <!-- sushi -->         
                <div class="category">
                    <h3>Sushi</h3>
                <div class="categorias">
                    <div class="dish">
                        <div class="dish-info">
                            <h4>Nigiri Sushi</h4>
                            <p>Alérgenos: Puede contener pescado crudo o cocido, así como mariscos. Dependiendo de la variedad, también puede contener trigo en la salsa de soja o el vinagre de arroz.</p>
                        </div>
                        <div class="dish-image">
                            <img src="imgs/sushi/sushi-1.jpg" alt="Nombre del sushi 1"/>
                        </div>
                    </div>
                    <div class="dish">
                        <div class="dish-info">
                            <h4>Maki Sushi variedad</h4>
                            <p>Alérgenos: Incluye pescado crudo, cocido, mariscos, aguacate y pepino. El alga nori puede contener trazas de mariscos.</p>
                        </div>
                        <div class="dish-image">
                            <img src="imgs/sushi/sushi-2.jpg" alt="Nombre del sushi 2"/>
                        </div>
                    </div>
                    <div class="dish">
                        <div class="dish-info">
                            <h4>Sashimi</h4>
                            <p>Alérgenos: Pescado crudo, por lo que puede representar un riesgo de contaminación cruzada con mariscos u otros alérgenos presentes en el área de preparación.</p>
                        </div>
                        <div class="dish-image">
                            <img src="imgs/sushi/sushi-3.jpg" alt="Nombre del sushi 3"/>
                        </div>
                    </div>
                    <div class="dish">
                        <div class="dish-info">
                            <h4>California Roll</h4>
                            <p>Alérgenos: Puede contener cangrejo, aguacate, pepino y masago (huevas de pescado). La salsa teriyaki o mayonesa utilizada para condimentar el roll también puede contener trigo y soja.</p>
                        </div>
                        <div class="dish-image">
                            <img src="imgs/sushi/sushi-4.jpg" alt="Nombre del sushi 4"/>
                        </div>
                    </div>
                    <div class="dish">
                        <div class="dish-info">
                            <h4>Spicy Tuna Roll</h4>
                            <p>Alérgenos: Puede contener atún picante, pepino, cebolletas y mayonesa picante. La salsa picante puede contener trigo y soja.</p>
                        </div>
                        <div class="dish-image">
                            <img src="imgs/sushi/sushi-5.jpg" alt="Nombre del sushi 5"/>
                        </div>
                    </div>
                    <div class="dish">
                        <div class="dish-info">
                            <h4>Dragon Roll</h4>
                            <p>Alérgenos: Puede contener anguila asada, aguacate y pepino. La salsa de anguila puede contener trigo y soja.</p>
                        </div>
                        <div class="dish-image">
                            <img src="imgs/sushi/sushi-6.jpg" alt="Nombre del sushi 6"/>
                        </div>
                    </div>
                    <div class="dish">
                        <div class="dish-info">
                            <h4>Rainbow Roll</h4>
                            <p>Alérgenos: Puede contener una variedad de pescados crudos o cocidos, aguacate, pepino y mayonesa. Las opciones de pescado pueden variar según la disponibilidad y la preferencia del chef.</p>
                        </div>
                        <div class="dish-image">
                            <img src="imgs/sushi/sushi-7.jpg" alt="Nombre del sushi 7"/>
                        </div>
                    </div>
                    <div class="dish">
                        <div class="dish-info">
                            <h4>Caterpillar Roll</h4>
                            <p>Alérgenos: Puede contener anguila asada, aguacate y pepino. La salsa de anguila puede contener trigo y soja.</p>
                        </div>
                        <div class="dish-image">
                            <img src="imgs/sushi/sushi-8.jpg" alt="Nombre del sushi 8"/>
                        </div>
                    </div>
                    <div class="dish">
                        <div class="dish-info">
                            <h4>Philadelphia Roll</h4>
                            <p>Alérgenos: Puede contener salmón ahumado, queso crema, pepino y cebolleta. El queso crema puede contener productos lácteos.</p>
                        </div>
                        <div class="dish-image">
                            <img src="imgs/sushi/sushi-9.jpg" alt="Nombre del sushi 9"/>
                        </div>
                    </div>
                </div>
                </div>
    <!-- FIN sushi -->
            </div>
            <div class="div-botonmenu">
                <a href="menu-completo.php" class="boton-menu-completo">Menú completo</a>
            </div>
        </section>

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

    <!-- opiniones -->
        <section id="reviews">
            <div class="container">
                <h2>Opiniones de nuestros clientes</h2>
                <div class="opiniones">
                    <div class="cliente">
                        <img src="imgs/opiniones/cliente1.jpg" alt="Cliente 1"/>
                        <p>"Me encanta el sushi fresco y delicioso de aquí. Siempre es una experiencia increíble cada vez que visito este restaurante."</p>
                    </div>
                    <div class="cliente">
                        <img src="imgs/opiniones/cliente2.jpg" alt="Cliente 2"/>
                        <p>"Umai Sushi ofrece una amplia variedad de sushi y platos japoneses auténticos. ¡Es mi lugar favorito para comer sushi en la ciudad!"</p>
                    </div>
                    <div class="cliente">
                        <img src="imgs/opiniones/cliente3.jpg" alt="Cliente 3"/>
                        <p>"La calidad del sushi es insuperable. Siempre fresco y delicioso, nunca me decepciona."</p>
                    </div>
                    <div class="cliente">
                        <img src="imgs/opiniones/cliente4.jpg" alt="Cliente 4"/>
                        <p>"El ambiente es muy acogedor y relajante. Es un lugar perfecto para disfrutar de una comida tranquila y sabrosa."</p>
                    </div>
                    <div class="cliente">
                        <img src="imgs/opiniones/cliente5.jpg" alt="Cliente 5"/>
                        <p>"He probado muchos restaurantes de sushi, pero Umai Sushi es mi favorito absoluto. La variedad de opciones y la calidad siempre son excelentes."</p>
                    </div>
                    <div class="cliente">
                        <img src="imgs/opiniones/cliente6.jpg" alt="Cliente 6"/>
                        <p>"El personal siempre es amable y atento. Siempre me siento bienvenido y bien cuidado cada vez que voy."</p>
                    </div>
                </div>
            </div>
        </section>
    <!-- FIN opiniones -->
    
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



