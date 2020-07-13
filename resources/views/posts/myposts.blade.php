@extends('layouts.app')

@section('content')
<div class="container">

    <div class="d-flex flex-row-reverse bd-highlight">
        <div div class="p-2 bd-highlight">
        <a href="{!! action('UserController@edit') !!}" class="btn btn-info">Editar Usuario</a>
        </div>
    </div>
    @foreach( $publicaciones as $publicacion)
    <div class="row mb-4 justify-content-md-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="{{ action('PostController@show', $publicacion->id) }}">{{ $publicacion->title }}</a>
                    </h5>
                </div>
                <img src="{{ asset($publicacion->image) }}" class="card-img-top" alt="...">
            </div>
            <div>
                <form method="POST" action="{{ url("posts/{$publicacion->id}") }}">
                    @csrf
                    @method('DELETE')
 
                    <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
    {{ $publicaciones->links() }}
</div>
@endsection