<html>

<head>
    <title>Claro - Servicios ventas móviles, hogar, tecnología.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This is an example of a meta description. 
This will often show up in search results.">
    <meta name="keywords" content="palabra clave 1, palabra clave 2, palabra clave 3" />
    <link rel="icon" type="image/ico" href="img/favicon.ico" rs_id="" />
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <style>
        .btn-outline-danger {
            color: whitesmoke !important;
            border-color: #e8423c !important;
        }

        .btn-outline-danger:hover {
            color: whitesmoke !important;
            background-color: #e8423c !important;
        }

        .btnEnviar {
            margin: 2px;
        }
    </style>

</head>

<body>

    <div class=" bg-dark  sticky-top d-none d-md-block">
        <div class="container">
            <div class="col-12-offset-1 align-content-center">
                <div class="row">
                    <div class="col-2 text-center align-self-center">
                        <img src="img/logo.png" class="img-llamamos" alt="te llamamos" width="120px">
                    </div>
                    <div class="col-7 align-self-center">

                        <form class="row g-2 input-group-sm needs-validation" novalidate="">

                            <!-- input Indicativo-->
                            <div class="col-5">

                                <label for="indicativodesktop" class="form-label my-1 text-white small llamamos">Nombre:</label>
                                <input name="indicativodesktop" class="form-control form-control-sm" list="indicativos" id="indicativodesktop" placeholder="Nombre" onkeypress="send(event, 'lanzar2')" required="">

                            </div>
                            <!-- Fin input Indicativo-->

                            <!-- input Numero-->
                            <div class="col-5">
                                <label for="telefonodesktop" class="form-label my-1 text-white small llamamos">Déjanos tu
                                    número de teléfono</label>
                                <input name="telefonodesktop" class="form-control form-control-sm" id="telefonodesktop" type="number" placeholder="Teléfono fijo o Número celular" onkeypress="send(event, 'lanzar2')" maxlength="10" minlength="7" oninput="maxlengthNumber(this);" required="">
                            </div>
                            <!-- input Numero-->

                            <!--Input Conversión offline Google-->
                            <input type="hidden" id="gclid_field" name="gclid_field" value="">
                            <!-- Fin Input Conversión offline Google-->

                            <!-- Botón envío-->
                            <div class="col-2 pt-4">
                                <button class="btn btn-dark btn-outline-light rounded-circle p-1" id="submitNavbar" type="submit">
                                    <svg width="25" height="18" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                        <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"></path>
                                    </svg>
                                </button>
                            </div>
                            <!-- Fin Botón envío-->
                        </form>

                    </div>
                    <div class="col-3 text-center align-self-center">
                        <h4 id="totalCarrito" class="text-white">0 Add</h4>
                        <button style="margin: 0px;" class="text-white  btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalCarrito">
                            Ver Carrito...
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <br />
    <!-- inicio carrusel -->
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/01.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/02.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/03.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- fin carrusel -->
    </br>
    <div class="black-color">
        <center><img src="img/planes-incluyen-bg-negro.png"></center>
    </div>
    </br>

    <!-- Inicio Modal Carrito de compras-->
    <div class="modal fade" id="modalCarrito" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <!-- <div class="modal fade" id="modalContacto" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"> -->
        <div class="modal-dialog modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <h5 class="modal-title" id="staticBackdropLabel">Carrito de Compras</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-3"></div>
                            <div class="col-7 align-center">


                                <form class="row g-2 input-group-sm needs-validation" novalidate="">

                                    <!-- input Indicativo-->
                                    <div class="col-5">

                                        <label for="indicativodesktop" class="form-label my-1  small llamamos">Nombre:</label>
                                        <input name="indicativodesktop" class="form-control form-control-sm" list="indicativos" id="indicativodesktop" placeholder="Nombre" onkeypress="send(event, 'lanzar2')" required="">

                                    </div>
                                    <!-- Fin input Indicativo-->

                                    <!-- input Numero-->
                                    <div class="col-5">
                                        <label for="telefonodesktop" class="form-label my-1  small llamamos">Déjanos tu
                                            número de teléfono</label>
                                        <input name="telefonodesktop" class="form-control form-control-sm" id="telefonodesktop" type="number" placeholder="Teléfono fijo o Número celular" onkeypress="send(event, 'lanzar2')" maxlength="10" minlength="7" oninput="maxlengthNumber(this);" required="">
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-12">
                                <table id="myTable" class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Cliente Claro</th>
                                            <th>Precio Ahora</th>
                                            <th>Cantidad</th>
                                            <th>Total Cliente Claro</th>
                                            <th>Total Precio Ahora</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                            <div class="col-9"></div>
                            <input name="" type="submit" class="col-3 btn btn-success" data-bs-dismiss="modal" id="submitCarrito" required="true" value="Registrar Solicitud">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Fin Modal Carrito de compras-->


    <!-- inicio Modal contacto -->
    <div class="modal fade" id="modalContacto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

        <!-- <div class="modal fade" id="modalContacto" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"> -->
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <h5 class="modal-title" id="staticBackdropLabel">¡Te Llamamos!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <center><img src="img/call.png" width="100px" /></center>
                    <div class=" align-self-center">
                        <form class="row g-2 input-group-sm needs-validation" novalidate="">
                            <div class="col-4">
                                <p class="small  fw-normal lh-sm ">Déjanos tu número celular y te llamaremos en breve</p>
                            </div>

                            <div class="col-4">
                                <label for="indicativodesktop" class="form-label my-1  small llamamos">Nombre</label>
                                <input name="indicativodesktop" class="form-control form-control-sm" list="indicativos" id="indicativodesktop" placeholder="Nombre" required="">
                            </div>

                            <!-- input Numero-->
                            <div class="col-4">
                                <label for="telefonodesktop" class="form-label my-1  small llamamos"># Celular</label>
                                <input name="telefonodesktop" class="form-control form-control-sm" id="telefonodesktop" type="number" placeholder="Número celular" maxlength="10" minlength="7" oninput="maxlengthNumber(this);" required="">
                                <div class="invalid-feedback text-white"> Ingresa un número válido</div>
                            </div>

                            <div class="col-4"></div>

                            <!-- Botón envío-->
                            <div class="col-8 ">
                                <button class="btn btn-danger  form-control ">
                                    Registrar solicitud
                                </button>
                            </div>
                            <!-- Fin Botón envío-->

                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- Fin Modal contacto -->

    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h2>Tecnología</h2>
            </div>

            <!-- Initial car Samsung Galaxy S20 FE 256GB 4G -->
            <div class="card" style="width: 20rem;">
                <img src="img/clulares/Samsung Galaxy S20 FE 256GB 4G.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Samsung Galaxy S20 FE 256GB 4G</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="form-control btn btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#SamsungGalaxyS20FE256GB4G">Más detalles</button>
                    </div>
                    <div class="col-md-12">
                        <button class="btnEnviar form-control btn btn-info" type="button" onclick="addProduct(1, 'Samsung Galaxy S20 FE 256GB 4G', 2295950, 2550950);">Añadir al Carrito</button>
                    </div>
                    <div class="col-md-6">
                        <a href="https://wa.me/573143445751">
                            <button class="form-control btn btn-success">WhatsApp</button>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <button class="form-control btn btn-primary">Te llamamos</button>
                    </div>
                </div>
            </div>
            <!-- End car Samsung Galaxy S20 FE 256GB 4G -->

            <!-- Modal -->
            <div class="modal fade" id="SamsungGalaxyS20FE256GB4G" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Samsung Galaxy S20 FE 256GB 4G</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body ">
                            <center><img src="img/clulares/Samsung Galaxy S20 FE 256GB 4G.jpg" width="200px" /></center>
                            <h5>$2.295.950 Cliente Claro</h5>
                            <h5>$2.550.950 Precio Ahora</h5></br>
                            <h2>Kit Prepago</h2>
                            <ul>
                                <li>1 elegido de voz y de texto a móviles Claro</li>
                                <li>70 minutos a todo destino</li>
                                <li>Claro Drive 25GB</li>
                                <li>Claro Música por 1 mes</li>
                                <li>Recibe hasta 3GB de navegación**</li>
                                <li>Incluye 50 minutos gratis de llamadas larga distancia internacional únicamente a Estados Unidos, Canadá, Puerto Rico o México</li>
                            </ul>
                            <h2>Renovación</h2>
                            <ul>
                                <li>Si eres cliente Claro, cambia tu smartphone sin necesidad de tarjeta de crédito</li>
                                <li>Puedes financiar tu equipo a 6 o 12 meses en tu factura Claro</li>
                                <li>Puedes renovar tu equipo accediendo a un precio especial y manteniendo tu número, siempre y cuando tu servicio se encuentre activo.</li>
                                </br><small>*Aplica para referencias seleccionadas.</small>
                            </ul>

                            <h2>Características</h2>
                            <small>Cámara: </small>12.0 MP + 12.0 MP + 8.0 MP</br>
                            <small>Tamaño de pantalla: </small>6.5"</br>
                            <small>Procesador: </small>Octa-Core</br>
                            <small>Sistema operativo: </small> Android </br>
                            <small>Red: </small> 4G</br>
                            <small>Teclado: </small> Touch</br>
                            <small>Pantalla: </small> Touchscreen</br>
                            <small>Batería: </small> 4500mAh</br>
                            <small>Memoria interna: </small> 256 GB</br>
                            <small>Memoria externa: </small> Hasta 1TB</br>
                            <small>Dimensión del equipo: </small> 159.8 x 74.5 x 8.4</br>
                            <small>Frecuencia de banda: </small> B1(2100), B2(1900), B3(1800), B4(AWS), B5(850), B7(2600), B8(900), B12(700), B13(700), B17(700), B20(800), B26(850), B28(700), B32(1500), B66(AWS-3), B38(2600), B40(2300), B41(2500)</p>
                        </div>
                        <div class="modal-footer">
                            <button class="form-control btn btn-success">WhatsApp</button>
                            <button class="form-control btn btn-primary">Te contactamos</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Initial car Nokia G10 64GB 4G -->
            <div class="card" style="width: 20rem;">
                <img src="img/clulares/Nokia G10 64GB 4G.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Nokia G10 64GB 4G</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="form-control btn btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#NokiaG1064GB4G">Más detalles</button>
                    </div>
                    <div class="col-md-12">
                        <button class="btnEnviar form-control btn btn-info" type="button" onclick="addProduct(2, 'Nokia G10 64GB 4G', 467900, 519900);">Añadir al Carrito</button>
                    </div>
                    <div class="col-md-6">
                        <a href="https://wa.me/573143445751">
                            <button class="form-control btn btn-success">WhatsApp</button>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <button class="form-control btn btn-primary">Te llamamos</button>
                    </div>
                </div>
            </div>
            <!-- End car Nokia G10 64GB 4G -->

            <!-- Modal -->
            <div class="modal fade" id="NokiaG1064GB4G" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Nokia G10 64GB 4G</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <center><img src="img/clulares/Nokia G10 64GB 4G.jpg" width="200px" /></center>
                            <h5>$467.900 Cliente Claro</h5>
                            <h5>$519.900 Precio Ahora</h5></br>
                            <h2>Kit Prepago</h2>
                            <ul>
                                <li>1 elegido de voz y de texto a móviles Claro</li>
                                <li>70 minutos a todo destino</li>
                                <li>Claro Drive 25GB</li>
                                <li>Claro Música por 1 mes</li>
                                <li>Recibe hasta 3GB de navegación**</li>
                                <li>Incluye 50 minutos gratis de llamadas larga distancia internacional únicamente a Estados Unidos, Canadá, Puerto Rico o México</li>
                                <li>Renovación</li>
                                <li>Si eres cliente Claro, cambia tu smartphone sin necesidad de tarjeta de crédito</li>
                                <li>Puedes financiar tu equipo a 6 o 12 meses en tu factura Claro</li>
                                <li>Puedes renovar tu equipo accediendo a un precio especial y manteniendo tu número, siempre y cuando tu servicio se encuentre activo.</li>
                                <small>*Aplica para referencias seleccionadas.</small>
                            </ul>

                            <h2>Características</h2>

                            <p><small>Cámara: </small> 13 MP + 2 MP + 2 MP LED Flash</br>
                                <small>Tamaño: </small>de Pantalla: 6.5"</br>
                                <small>Procesador: </small> Octa-Core</br>
                                <small>Pantalla: </small> Touchscreen</br>
                                <small>Reproductor de música: </small>si</br>
                                <small>Frecuencia de banda: </small>GSM850/900/1800/1900 - WCDMA 1,4,2,5,8 - 1,2,3,4,5,7,8,12/ 17,28, 66</br>
                                <small>RAM:</small> 3 GB</br>
                                <small>Memoria interna: </small>64 GB</br>
                                <small>Memoria externa: </small>512 GB</br>
                                <small>Tipo de Cámara: </small>Triple</br>
                                <small>Sistema operativo: </small>Android 11</br>
                                <small>Teclado: </small> Touch</br>
                                <small>Batería: </small> 5.050 mAh</br>
                                <small>Dimensión del equipo: </small>164.86 x 76 x 9.23mm</br>
                                <small>WiFi:</small> Sí</br>
                                <small>Navegador Web: </small>Sí</br>
                                <small>Bluetooth: </small> Sí</br>
                                <small>Cámara frontal: </small>Sí</br>
                                <small>GPS: </small> Sí</br>
                                <small>Altavoz: </small> Sí</br>
                                <small>Email: </small> Sí</br>
                                <small>Mensajería SMS: </small>Sí</br>
                                <small>Red: </small> 4G
                            </p>

                        </div>
                        <div class="modal-footer">
                            <button class="form-control btn btn-success">WhatsApp</button>
                            <button class="form-control btn btn-primary">Te contactamos</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Initial car Xiaomi Redmi Note 10S 4G -->
            <div class="card" style="width: 20rem;">
                <img src="img/clulares/Xiaomi Redmi Note 10S 4G.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Xiaomi Redmi Note 10S 4G</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="form-control btn btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#XiaomiRedmiNote10S4G">Más detalles</button>
                    </div>
                    <div class="col-md-12">
                        <button class="btnEnviar form-control btn btn-info" type="button" onclick="addProduct(3, 'Xiaomi Redmi Note 10S 4G', 1079900, 1199900);">Añadir al Carrito</button>
                    </div>
                    <div class="col-md-6">
                        <a href="https://wa.me/573143445751">
                            <button class="form-control btn btn-success">WhatsApp</button>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <button class="form-control btn btn-primary">Te llamamos</button>
                    </div>
                </div>
            </div>
            <!-- End car Xiaomi Redmi Note 10S 4G -->

            <!-- Modal -->
            <div class="modal fade" id="XiaomiRedmiNote10S4G" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Xiaomi Redmi Note 10S 4G</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <center><img src="img/clulares/Xiaomi Redmi Note 10S 4G.jpg" width="200px" /></center>
                            <h5>$1.079.900 Cliente Claro</h5>
                            <h5>$1.199.900 Precio Ahora</h5></br>
                            <h2>Kit Prepago</h2>
                            <ul>
                                <li>1 elegido de voz y de texto a móviles Claro</li>
                                <li>70 minutos a todo destino</li>
                                <li>Claro Drive 25GB</li>
                                <li>Claro Música por 1 mes</li>
                                <li>Recibe hasta 3GB de navegación**</li>
                                <li>Incluye 50 minutos gratis de llamadas larga distancia internacional únicamente a Estados Unidos, Canadá, Puerto Rico o México</li>
                                <li>Renovación</li>
                                <li>Si eres cliente Claro, cambia tu smartphone sin necesidad de tarjeta de crédito</li>
                                <li>Puedes financiar tu equipo a 6 o 12 meses en tu factura Claro</li>
                                <li>Puedes renovar tu equipo accediendo a un precio especial y manteniendo tu número, siempre y cuando tu servicio se encuentre activo.</li>
                                <small>*Aplica para referencias seleccionadas.</small>
                            </ul>
                            <h2>Características</h2>
                            <small>Cámara:</small> 64MP + 8MP+ 2MP+ 2MP</br>
                            <small>Tamaño de Pantalla: </small> 6.43"</br>
                            <small>Procesador: </small> MediaTek Helio G95</br>
                            <small>Sistema operativo: </small>Android 10; MIUI 11</br>
                            <small>Reproductor de música: </small>Sí</br>
                            <small>Batería: </small> 5.000 mAh</br>
                            <small>Pantalla: </small> Touchscreen</br>
                            <small>Memoria interna: </small>128 GB</br>
                            <small>Peso: </small> 178 grm</br>
                            <small>RAM: </small> 6 GB</br>
                            <small>Teclado: </small> Touch</br>
                            <small>Video: </small> Sí</br>
                            <small>Memoria externa: </small>512 GB</br>
                            <small>Frecuencia de banda: </small>B1(2100), B2(1900), B3(1800+), B4(1700-2100), B5(850), B7(2600), B8(900), B28(700APT),B20(800),B38 (TDD 2600), B40(TDD 2300) MHz, B41 (TDD2500)</br>
                            <small>Tipo de Cámara: </small>Cuadruple</br>
                            <small>WiFi: </small> Sí</br>
                            <small>Navegador Web: </small>Sí</br>
                            <small>Bluetooth: </small> si</br>
                            <small>Cámara frontal: </small>Sí</br>
                            <small>GPS: </small> Sí</br>
                            <small>Marcación por voz: </small>Sí</br>
                            <small>Mensajería SMS: </small>Sí</br>
                            <small>Altavoz: </small> Sí</br>
                            <small>Email: </small> Sí</br>
                            <small>Red: </small> 4G</br>

                        </div>
                        <div class="modal-footer">
                            <button class="form-control btn btn-success">WhatsApp</button>
                            <button class="form-control btn btn-primary">Te contactamos</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Initial car Portátil Huawei MateBook D15 512GB con Obsequios -->
            <div class="card" style="width: 20rem;">
                <img src="img/tecnologia/Portátil Huawei MateBook D15 512GB.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Portátil Huawei MateBook D15 512GB con Obsequios</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="form-control btn btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#PortátilHuaweiMateBookD15512GB">Más detalles</button>
                    </div>
                    <div class="col-md-12">
                        <button class="btnEnviar form-control btn btn-info" type="button" onclick="addProduct(4, 'Portátil Huawei MateBook D15 512GB con Obsequios', 3699900, 3699900);">Añadir al Carrito</button>
                    </div>
                    <div class="col-md-6">
                        <a href="https://wa.me/573143445751">
                            <button class="form-control btn btn-success">WhatsApp</button>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <button class="form-control btn btn-primary">Te llamamos</button>
                    </div>
                </div>
            </div>
            <!-- End car Portátil Huawei MateBook D15 512GB con Obsequios -->

            <!-- Modal -->
            <div class="modal fade" id="PortátilHuaweiMateBookD15512GB" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Portátil Huawei MateBook D15 512GB con Obsequios</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <center><img src="img/tecnologia/Portátil Huawei MateBook D15 512GB.jpg" width="200px" /></center>
                            <h5>Precio Ahora $3.699.900</h5></br>
                            <b>Incluye super Obsequios: Backpack, Mouse y Audífonos Freelance.</b>
                            <h2>Características</h2>
                            <small>Cámara:</small> 64MP + 8MP+ 2MP+ 2MP</br>
                            <small>Tamaño de Pantalla: </small> 6.43"</br>
                            <small>Procesador: </small> MediaTek Helio G95</br>
                            <small>Sistema operativo: </small>Android 10; MIUI 11</br>
                            <small>Reproductor de música: </small>Sí</br>
                            <small>Batería: </small> 5.000 mAh</br>
                            <small>Pantalla: </small> Touchscreen</br>
                            <small>Memoria interna: </small>128 GB</br>
                            <small>Peso: </small> 178 grm</br>
                            <small>RAM: </small> 6 GB</br>
                            <small>Teclado: </small> Touch</br>
                            <small>Video: </small> Sí</br>
                            <small>Memoria externa: </small>512 GB</br>
                            <small>Frecuencia de banda: </small>B1(2100), B2(1900), B3(1800+), B4(1700-2100), B5(850), B7(2600), B8(900), B28(700APT),B20(800),B38 (TDD 2600), B40(TDD 2300) MHz, B41 (TDD2500)</br>
                            <small>Tipo de Cámara: </small>Cuadruple</br>
                            <small>WiFi: </small> Sí</br>
                            <small>Navegador Web: </small>Sí</br>
                            <small>Bluetooth: </small> si</br>
                            <small>Cámara frontal: </small>Sí</br>
                            <small>GPS: </small> Sí</br>
                            <small>Marcación por voz: </small>Sí</br>
                            <small>Mensajería SMS: </small>Sí</br>
                            <small>Altavoz: </small> Sí</br>
                            <small>Email: </small> Sí</br>
                            <small>Red: </small> 4G</br>

                        </div>
                        <div class="modal-footer">
                            <button id="add" class="form-control btn btn-primary">Add to Card</button>
                            <button class="form-control btn btn-success">WhatsApp</button>
                            <button class="form-control btn btn-info">Te contactamos</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- <php
    include('celular.php');
    ?> -->




    <footer class="footer">
        <p>&copy <?php echo date('Y'); ?></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>

    <script src="js/crud.js"></script>
    <!-- <script>
        function addProduct() {
            alert("entro");
            var product = {
                name: name,
                precioClaro: precioClaro,
                precioAhora: precioAhora,
                cant: 1
            };
            // appendObjectToLocalStorage(product);
        }
    </script> -->

</body>

</html>