@extends('layouts.app')

@section('content')
<div class="container">
    @auth
    <div class="form-group">
        <div class="button_myPosts">
            <a class="btn btn-dark btn-lg btn-block" href="{{ route('MyPosts') }}" role="button">Ver solo mis publicaciones</a>
        </div>
    </div>
    @endauth
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
        </div>
    </div>
    @endforeach
    {{ $publicaciones->links() }}
</div>
@endsection