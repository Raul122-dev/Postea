@extends('layouts.app')

@section('content')
<div class="container">
    @auth
        <a class="btn btn-primary"  href="{{action('PostController@index')}}" role="button">Regresar a mis publicaciones</a>
    @endauth
    @foreach(Auth::user()->notifications as $notificacion)
    <br>
    <div class="row md-4 justify-content-md-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card card-body">
                    <h5 class="card-title">
                        <a href="{{ action('PostController@show', $notificacion->data['publicacion']) }}">{{ $notificacion->data["message"] }}</a>
                        <br>
                        <br>
                        <a href="#">
                          Creacion del Comentario: {{ $notificacion->created_at }}
                        </a>
                    </h5>                    
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection