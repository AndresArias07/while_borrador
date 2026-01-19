<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="ms-5 ps-5 ">
    <?= $this->include("partials/menu-post.php") ?>
    <div class="container-fluid main d-flex flex-column justify-content-center align-items-center">
        <!-- post1 -->
        <div class="card card-post p-4 mt-5 gap-3 ">
            <!-- Header del post -->
            <div class="d-flex flex-row gap-3 align-items-center">
                <div>
                    <img src="img/post/profile_prueba.png" alt="profile" class="img-fluid rounded-circle profile-photo">
                </div>
                <div class="d-flex flex-column justify-content-center  mb-0">
                    <h5 class="mb-0 fw-bold fs-5">feid</h5>
                    <small class="text-muted small">hace 2 horas</small>
                </div>
            </div>

            <!-- Texto del post -->
            <p class="mb-3 text-post small">
                XTHE ENDX EL PRINCIPIO DEL FIN 🖤 GRACIAS!!! a los que fueron a ver el docu a los cines!! Les abrimos las puertas de la casa, del corazón y les queríamos mostrar de qué estamos hechos ! En memoria a nuestros seres queridos a quienes soñaron con nosotros el vernos aquí desde hace tantos años , con mucho cariño 🫶 Adiós Ferxxo 💚 <!--  GRACIAS SEBAS @sebassanchezv GRACIAS GODIE @diegoptino Por hacer esta pieza tan especial para las personas que conectan conmigo 🫀⭐️ --> </p>

            <!-- Imágenes del post -->
            <div class="d-flex flex-row gap-3 overflow-hidden">
                <div class="flex-shrink-0"><img src="img/post/feid1.png" class="img-fluid photo-post"></div>
                <div class="flex-shrink-0"><img src="img/post/feid2.png" class="img-fluid photo-post"></div>
                <div class="flex-shrink-0"><img src="img/post/feid3.png" class="img-fluid photo-post"></div>
                <div class="flex-shrink-0"><img src="img/post/feid4.png" class="img-fluid photo-post"></div>

            </div>

            <!-- Métricas del post -->
            <div class="d-flex justify-content-start text-muted small gap-4">
                <!-- like icon start -->
                <label class="container-icon d-flex flex-row align-items-center ">
                    <input type="checkbox">
                    <div class="checkmark d-flex justify-content-center">
                        <svg width="24" viewBox="0 0 256 256">
                            <path stroke="#000" d="M224.6,51.9a59.5,59.5,0,0,0-43-19.9,60.5,60.5,0,0,0-44,17.6L128,59.1l-7.5-7.4C97.2,28.3,59.2,26.3,35.9,47.4a59.9,59.9,0,0,0-2.3,87l83.1,83.1a15.9,15.9,0,0,0,22.6,0l81-81C243.7,113.2,245.6,75.2,224.6,51.9Z" stroke-width="20px" fill="none"></path>
                        </svg>
                    </div>
                    <small class="text-muted">1M</small>
                </label>
                <!-- like icon end -->
                <!-- comment icon start -->
                <label class="container-icon-comment d-flex flex-row align-items-center ">
                    <input type="checkbox">
                    <div class="checkmark-comment d-flex justify-content-center align-items-center">
                        <svg width="30" height="30" fill="#000000" viewBox="0 0 256 256" ck>
                            <path d="M168,112a8,8,0,0,1-8,8H96a8,8,0,0,1,0-16h64A8,8,0,0,1,168,112Zm-8,24H96a8,8,0,0,0,0,16h64a8,8,0,0,0,0-16Zm72-8A104,104,0,0,1,79.12,219.82L45.07,231.17a16,16,0,0,1-20.24-20.24l11.35-34.05A104,104,0,1,1,232,128Zm-16,0A88,88,0,1,0,51.81,172.06a8,8,0,0,1,.66,6.54L40,216,77.4,203.53a7.85,7.85,0,0,1,2.53-.42,8,8,0,0,1,4,1.08A88,88,0,0,0,216,128Z"></path>
                        </svg>

                    </div>
                    <small class="text-muted ms-1 d-flex align-items-center">266.150</small>
                </label>
                <!-- comment icon end -->
                <!-- save icon start -->
                <label class="container-icon-save d-flex flex-row align-items-center ">
                    <input type="checkbox">
                    <div class="checkmark-save d-flex justify-content-center align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            width="30" height="30" viewBox="0 0 24 24"
                            fill="none" stroke="black" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M7 3h10a1 1 0 0 1 1 1v16l-6-4-6 4V4a1 1 0 0 1 1-1z" />
                        </svg>


                    </div>
                    <small class="text-muted ms-1 d-flex align-items-center">155.144</small>
                </label>
                <!-- save icon end -->
            </div>
        </div>
        <!-- post 2 -->
        <div class="card card-post p-4 mt-5 gap-3 ">
            <!-- Header del post -->
            <div class="d-flex flex-row gap-3 align-items-center">
                <div>
                    <img src="img/post/profile_prueba.png" alt="profile" class="img-fluid rounded-circle profile-photo">
                </div>
                <div class="d-flex flex-column justify-content-center  mb-0">
                    <h5 class="mb-0 fw-bold fs-5">feid</h5>
                    <small class="text-muted small">hace 2 horas</small>
                </div>
            </div>

            <!-- Texto del post -->
            <p class="mb-3 text-post small">
                XTHE ENDX EL PRINCIPIO DEL FIN 🖤 GRACIAS!!! a los que fueron a ver el docu a los cines!! Les abrimos las puertas de la casa, del corazón y les queríamos mostrar de qué estamos hechos ! En memoria a nuestros seres queridos a quienes soñaron con nosotros el vernos aquí desde hace tantos años , con mucho cariño 🫶 Adiós Ferxxo 💚 <!--  GRACIAS SEBAS @sebassanchezv GRACIAS GODIE @diegoptino Por hacer esta pieza tan especial para las personas que conectan conmigo 🫀⭐️ --> </p>

            <!-- Imágenes del post -->
            <div class="d-flex flex-row gap-3 overflow-hidden">
                <div class="flex-shrink-0"><img src="img/post/feid1.png" class="img-fluid photo-post"></div>
                <div class="flex-shrink-0"><img src="img/post/feid2.png" class="img-fluid photo-post"></div>
                <div class="flex-shrink-0"><img src="img/post/feid3.png" class="img-fluid photo-post"></div>
                <div class="flex-shrink-0"><img src="img/post/feid4.png" class="img-fluid photo-post"></div>

            </div>

            <!-- Métricas del post -->
            <div class="d-flex justify-content-start text-muted small gap-4">
                <!-- like icon start -->
                <label class="container-icon d-flex flex-row align-items-center ">
                    <input type="checkbox">
                    <div class="checkmark d-flex justify-content-center">
                        <svg width="24" viewBox="0 0 256 256">
                            <path stroke="#000" d="M224.6,51.9a59.5,59.5,0,0,0-43-19.9,60.5,60.5,0,0,0-44,17.6L128,59.1l-7.5-7.4C97.2,28.3,59.2,26.3,35.9,47.4a59.9,59.9,0,0,0-2.3,87l83.1,83.1a15.9,15.9,0,0,0,22.6,0l81-81C243.7,113.2,245.6,75.2,224.6,51.9Z" stroke-width="20px" fill="none"></path>
                        </svg>
                    </div>
                    <small class="text-muted">1M</small>
                </label>
                <!-- like icon end -->
                <!-- comment icon start -->
                <label class="container-icon-comment d-flex flex-row align-items-center ">
                    <input type="checkbox">
                    <div class="checkmark-comment d-flex justify-content-center align-items-center">
                        <svg width="30" height="30" fill="#000000" viewBox="0 0 256 256" ck>
                            <path d="M168,112a8,8,0,0,1-8,8H96a8,8,0,0,1,0-16h64A8,8,0,0,1,168,112Zm-8,24H96a8,8,0,0,0,0,16h64a8,8,0,0,0,0-16Zm72-8A104,104,0,0,1,79.12,219.82L45.07,231.17a16,16,0,0,1-20.24-20.24l11.35-34.05A104,104,0,1,1,232,128Zm-16,0A88,88,0,1,0,51.81,172.06a8,8,0,0,1,.66,6.54L40,216,77.4,203.53a7.85,7.85,0,0,1,2.53-.42,8,8,0,0,1,4,1.08A88,88,0,0,0,216,128Z"></path>
                        </svg>

                    </div>
                    <small class="text-muted ms-1 d-flex align-items-center">266.150</small>
                </label>
                <!-- comment icon end -->
                <!-- save icon start -->
                <label class="container-icon-save d-flex flex-row align-items-center ">
                    <input type="checkbox">
                    <div class="checkmark-save d-flex justify-content-center align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            width="30" height="30" viewBox="0 0 24 24"
                            fill="none" stroke="black" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M7 3h10a1 1 0 0 1 1 1v16l-6-4-6 4V4a1 1 0 0 1 1-1z" />
                        </svg>


                    </div>
                    <small class="text-muted ms-1 d-flex align-items-center">155.144</small>
                </label>
                <!-- save icon end -->
            </div>
        </div>
        <?= $this->include("partials/sugerencias.php") ?>
    </div>
    <!-- Repite estructura con otros datos -->
</div>
<?= $this->endSection() ?>