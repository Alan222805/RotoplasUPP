@extends('Comun')

@section('links_diseño')
    <link rel="stylesheet" href="/css/Estilos_datos_bancarios.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
@endsection

@section('ContenidoPrincipal')
    <div class="contenedor">

        <!-- Tarjeta -->
        <section class="tarjeta" id="tarjeta">
            <div class="delantera">
                <div class="logo-marca" id="logo-marca">
                    <!-- <img src="/img/logos/visa.png" alt=""> -->
                </div>
                <img src="/img/chip-tarjeta.png" class="chip" alt="">
                <div class="datos">
                    <div class="grupo" id="numero">
                        <p class="label">Número Tarjeta</p>
                        <p class="numero">#### #### #### ####</p>
                    </div>
                    <div class="flexbox">
                        <div class="grupo" id="nombre">
                            <p class="label">Nombre Tarjeta</p>
                            <p class="nombre">Jhon Doe</p>
                        </div>

                        <div class="grupo" id="expiracion">
                            <p class="label">Expiracion</p>
                            <p class="expiracion"><span class="mes">MM</span> / <span class="year">AA</span></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="trasera">
                <div class="barra-magnetica"></div>
                <div class="datos">
                    <div class="grupo" id="firma">
                        <p class="label">Firma</p>
                        <div class="firma">
                            <p></p>
                        </div>
                    </div>
                    <div class="grupo" id="ccv">
                        <p class="label">CCV</p>
                        <p class="ccv"></p>
                    </div>
                </div>
                <p class="leyenda">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus exercitationem,
                    voluptates illo.</p>
                <a href="#" class="link-banco">www.tubanco.com</a>
            </div>
        </section>

        <!-- Contenedor Boton Abrir Formulario -->
        <div class="contenedor-btn">
            <button class="btn-abrir-formulario" id="btn-abrir-formulario">
                <i class="fas fa-plus"></i>
            </button>
        </div>

        <!-- Formulario -->
        <form action="" id="formulario-tarjeta" class="formulario-tarjeta">
            <div class="grupo">
                <label for="inputNumero">Número Tarjeta</label>
                <input type="text" id="inputNumero" maxlength="19" autocomplete="off">
            </div>
            <div class="grupo">
                <label for="inputNombre">Nombre</label>
                <input type="text" id="inputNombre" maxlength="19" autocomplete="off">
            </div>
            <div class="flexbox">
                <div class="grupo expira">
                    <label for="selectMes">Expiracion</label>
                    <div class="flexbox">
                        <div class="grupo-select">
                            <select name="mes" id="selectMes">
                                <option disabled selected>Mes</option>
                            </select>
                            <i class="fas fa-angle-down"></i>
                        </div>
                        <div class="grupo-select">
                            <select name="year" id="selectYear">
                                <option disabled selected>Año</option>
                            </select>
                            <i class="fas fa-angle-down"></i>
                        </div>
                    </div>
                </div>

                <div class="grupo ccv">
                    <label for="inputCCV">CCV</label>
                    <input type="text" id="inputCCV" maxlength="3">
                </div>
            </div>
            <button type="submit" class="btn-enviar">Enviar</button>
        </form>
    </div>
@endsection

@section('archivosJS')
    <script src="/js/datosBancarios.js"></script>
@endsection
