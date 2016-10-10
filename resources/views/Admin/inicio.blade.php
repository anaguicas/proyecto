@extends('layouts.admin')
@section('content')
<div class="col-lg-12">        
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
                <a class="hexagon-in1" href="{{route('logout')}}">
                    <span class="hexagon-in2">
                        <img class="perfil" src="../../public/media/img/Admin/Indice/log-out.png">
                    </span>
                </a>
            </li>
            <li class="hexagon">      
                <a class="hexagon-in1" href="">
                    <span class="hexagon-in2">
                        <img class="perfil" src="../../public/media/img/Admin/Indice/studio y modelo.png">
                    </span>
                </a>
            </li>
            <li class="hexagon">      
                <a class="hexagon-in1" href="{{route('admin.lists')}}">
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
@endsection
