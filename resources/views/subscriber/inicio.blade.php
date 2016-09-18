<html>
<head>
    <title>Pandora</title>
    <link media="all" type="text/css" rel="stylesheet" href="../../public/media/css/bootstrap.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="../../public/media/css/landing.css">
    <link media="all" type="text/css" rel="stylesheet" href="../../public/media/css/layout.css">
    <link media="all" type="text/css" rel="stylesheet" href="../../public/media/css/pagina.css">
    <link media="all" type="text/css" rel="stylesheet" href="../../public/media/css/datepicker.css">
    <!-- <link media="all" type="text/css" rel="stylesheet" href="../../public/media/css/subscriber.css"> -->
    <!--link media="all" type="text/css" rel="stylesheet" href="{{env('MEDIA_URL')}}/css/bootstrap.css"-->
    <link media="all" type="text/css" rel="stylesheet" href="">
    @yield('styles')
    
</head>
<body>
    <div class="col-lg-12">
        <div align="center">
            <div class="col-lg-12">
                <div class="row pandora">
                    <h1>
                        <a href="inicio">
                            <img src="../../public/media/img/Usuario/Índice/pandora.png">
                        </a>
                    </h1>       
                </div>
            </div>
        </div>
        <div class="col-lg-12 border-container">
            <div class="col-lg-3 content">
                <div class="hexagon">
                    <div class="hexagon-in1">
                        <div class="hexagon-foto">
                            <img src="../../public/media/img/log in/usuario.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 content">
                <div class="hexagon">
                    <div class="hexagon-in1">
                        <div class="hexagon-perfil">
                            <a href="{{route('subscriber.editprofile')}}">
                                <img class="perfil" src="../../public/media/img/Usuario/Índice/perfil-2.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 content">
                <div class="hexagon">
                    <div class="hexagon-in1">
                        <div class="hexagon-inicio">
                            <img class="perfil" src="../../public/media/img/Usuario/Índice/streaming.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 content">
                <div class="hexagon">
                    <div class="hexagon-in1">
                        <div class="hexagon-publicidad">
                            <img class="perfil" src="../../public/media/img/Usuario/Índice/perfil-2.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 content">
                <div class="hexagon">
                    <div class="hexagon-in1">
                        <div class="hexagon-tokens">
                            <img class="perfil" src="../../public/media/img/Usuario/Índice/actividad tokens.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 content">
                <div class="hexagon">
                    <div class="hexagon-in1">
                        <div class="hexagon-tienda">
                            <img class="perfil" src="../../public/media/img/Usuario/Índice/tienda.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
