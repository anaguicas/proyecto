<html>
<head>
    <title>Pandora</title>
    <link media="all" type="text/css" rel="stylesheet" href="../../public/media/css/bootstrap.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="../../public/media/css/landing.css">
    <link media="all" type="text/css" rel="stylesheet" href="../../public/media/css/layout.css">
    <link media="all" type="text/css" rel="stylesheet" href="../../public/media/css/pagina.css">
    <link media="all" type="text/css" rel="stylesheet" href="../../public/media/css/admin.css">
    <link media="all" type="text/css" rel="stylesheet" href="../../public/media/css/datepicker.css">
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
                        <a href="#">
                            <img src="../../public/media/img/Usuario/Índice/pandora.png">
                        </a>
                    </h1>       
                </div>
            </div>
        </div>
        <div align="center">
            <div class="col-md-12 menu">
                <ul>
                  <li class="hexagon">
                    <a class="hexagon-in1" href="{{route('admin.requests')}}">
                        <span class="hexagon-in2">
                            <img class="perfil" src="../../public/media/img/Indice/request-list-admin.png">
                        </span>
                    </a>
                </li>
                <li class="hexagon">      
                    <a class="hexagon-in1" href="{{route('admin.requestshistory')}}">
                        <span class="hexagon-in2">
                            <img class="perfil" src="../../public/media/img/Indice/applications-history-admin.png">
                        </span>
                    </a>
                </li>
                <li class="hexagon">      
                    <a class="hexagon-in1" href="#">
                        <span class="hexagon-in2">
                            <img class="perfil" src="../../public/media/img/Admin/Indice/log-out.png">
                        </span>
                    </a>
                </li>
                <li class="hexagon">      
                    <a class="hexagon-in1" href="#">
                        <span class="hexagon-in2">
                            <img class="perfil" src="../../public/media/img/Admin/Indice/studio y modelo.png">
                        </span>
                    </a>
                </li>
                <li class="hexagon">      
                    <a class="hexagon-in1" href="#">
                        <span class="hexagon-in2">
                            <img class="perfil" src="../../public/media/img/Admin/Indice/studio y modelo.png">
                        </span>
                    </a>
                </li>
                <li class="hexagon">      
                    <a class="hexagon-in1" href="#">
                        <span class="hexagon-in2">
                            <img class="perfil" src="../../public/media/img/Indice/actividad-admin.png">
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>            
    </div>
</body>
</html>
