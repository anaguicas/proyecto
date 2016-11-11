<!DOCTYPE html>
<head>
    <title>Pandora</title>
    <link media="all" type="text/css" rel="stylesheet" href="../../public/media/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <link media="all" type="text/css" rel="stylesheet" href="../../public/media/css/landing.css">
    <link media="all" type="text/css" rel="stylesheet" href="../../public/media/css/layout.css">
    <link media="all" type="text/css" rel="stylesheet" href="../../public/media/css/pagina.css">
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
                        <br><span>PERFORMERS</span>
                    </div>
                </h1>
            </div>
        </div>
    </div>

    <div class="col-md-12 container-performer">
        @foreach($performers as $performer)
        <div class="col-md-6 content-1"   >
            <div class="col-md-12">
                <div class="col-md-4 imagen">
                    <div class="row circle ">
                        <img align="middle" class= "fotico" src="../../public/media/img/log in/usuario.png">
                    </div>
                    <div class="row name">
                        {{$performer->nombreperformer}}
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="col-md-12 info">
                        <table class="row campos">
                            <tr>
                                <td>MEMBER SINCE: </td>
                                <td>{{ date('m/d/Y', strtotime($performer->created_at)) }}</td>
                            </tr>
                            <tr>
                                <td>MONTH'S TOKENS: </td>
                                <td>12345</td>
                            </tr>
                            <tr>
                                <td>TOTAL: </td>
                                <td>12345</td>
                            </tr>
                        </table>
                        <table class="row campos" id="opciones">
                            <tr>
                                <td class="edit">
                                    <a href="{{route('studio.editprofile', ['id' => $performer->id_user])}}">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                </td>
                                <td><p>EDIT</p></td>
                            </tr>
                            <tr>
                                <td class="delete">
                                    <a href="{{route('studio.removeperformer', ['id' => $performer->id_user])}}">
                                        <span class="glyphicon glyphicon-remove"></span>
                                    </a>
                                </td>
                                <td><p>DELETE</p></td>
                            </tr>
                        </table>  
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</body >
</html>


