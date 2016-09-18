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
                    <img src="../../public/media/img/Pantalla de inicio png/registro studio performer/pandora.png">
                </a>
            </h1>
        </div>
    </div>
</div>


    <div class="container" >

        <div class="col-md-12 border-container">

            <div class="col-md-6 content-1"   >
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <div class="row fotico">
                                <img class= "circle" src="../../public/media/img/log in/usuario.png">
                            </div>
                            <div class="row">
                                <h2>HELLO!</h2>
                            </div>

                        </div>
                        <div class="col-md-8">TEXTO!</div>

                    </div>
            </div>


            <div class="col-md-6 content-1"  >
                <div class="col-md-12">
                    <div class="col-md-4">
                        <div class="row fotico">
                            <img class= "circle" src="../../public/media/img/log in/usuario.png">
                        </div>
                        <div class="row">
                            <h2>{{$performers[0]->nombreperformer}}</h2>
                        </div>
                    </div>
                    <div class="col-md-8">TEXTO!</div>

                </div>
            </div>



            <div class="col-md-6 content-1"  >
                <div class="col-md-12">
                    <div class="col-md-4">
                        <div class="row fotico">
                            <img class= "circle" src="../../public/media/img/log in/usuario.png">
                        </div>
                        <div class="row">
                            <h2>HELLO!</h2>
                        </div>
                    </div>
                    <div class="col-md-8">TEXTO!</div>

                </div>
            </div>


            <div class="col-md-6 content" align="center">
                <img class= "resize" src="../../public/media/img/registrostudioperformer/caja1.png">
            </div>


            <div class="col-md-6 content" align="center">
                <img class= "resize" src="../../public/media/img/registrostudioperformer/caja1.png">

            </div>

            <div class="col-md-6 content" align="center">
                <img class= "resize" src="../../public/media/img/registrostudioperformer/caja1.png">
            </div>
        </div>
    </div>
</body >
</html>


