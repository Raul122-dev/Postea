@extends('layouts.app')
@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form class="form-horizontal" method="post">
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                {!! csrf_field() !!}
                <fieldset>
                    <legend>Editar Usuario</legend>
                    <div class="form-group">
                        <label for="name" class="col-lg-label">Nombre</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="name" name="name" value="{!!  $usuario->name !!}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-lg-label">Email</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="email" name="email" value="{!!  $usuario->email !!}">
                        </div>
                    </div>
 
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <a class="btn btn-dange" href="{{ route('MyPosts') }}" role="button">Cancelar</a>
                            <button type="submit" class="btn btn-dark">Actualizar</button>
                        </div>
                    </div>
                     
                </fieldset>
            </form>
        </div>
    </div>
@endsection