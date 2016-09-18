<!DOCTYPE html>
<head>
    <title>Pandora</title>
    <link media="all" type="text/css" rel="stylesheet" href="../../public/media/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <link media="all" type="text/css" rel="stylesheet" href="../../public/media/css/landing.css">
    <link media="all" type="text/css" rel="stylesheet" href="../../public/media/css/layout.css">
    <link media="all" type="text/css" rel="stylesheet" href="../../public/media/css/studio.css">
</head>
<body>
<!--Header -->
<div align="center">
    <div class="col-lg-12">
        <div class="row pandora">
            <h1>
                <a href="{{route('landing')}}">
                    <br><img width= 300px height=80px src="../../public/media/img/Pantalla de inicio png/registro studio performer/pandora.png">
                </a>
                <div class="tittle-font">
                    <br><span style="color: #ffcc99; ">PERFORMERS</span>
                </div>
            </h1>
        </div>
    </div>
</div>


    <div class="container" >
        <div class="col-md-12 border-container">
            @foreach($performers as $performer)
            <div class="col-md-6 content-1"   >
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <div class="row fotico">
                                <img class= "circle" src="../../public/media/img/log in/usuario.png">
                            </div>
                            <div class="row">
                                <h2>{{$performer->nombreperformer}}</h2>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="col-md-12">

                                <div class="col-md-9">
                                    MEMBER SINCE:
                                </div>

                                <div class="col-md-3">
                                    2010/10/12
                                </div>


                                <div class="col-md-9">
                                    MONTH'S TOKENS:
                                </div>

                                <div class="col-md-3">
                                    12345
                                </div>

                                <div class="col-md-9">
                                    TOTAL:
                                </div>

                                <div class="col-md-3">
                                    12345
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <img class= "resize" src="../../public/media/img/registrostudioperformer/edit.png">
                                </div>

                                <div class="col-md-9">
                                    EDITAR
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <p><span class="glyphicon glyphicon-remove"></span></p>
                                </div>

                                <div class="col-md-9">
                                    ELIMINAR
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            @endforeach
        </div>
    </div>
</body >
</html>


