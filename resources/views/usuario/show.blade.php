@extends('layouts.app')

@section('template_title')
    {{ $usuario->name ?? 'Show Usuario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('usuarios.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $usuario->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $usuario->email }}
                        </div>
                        <div class="form-group">
                            <strong>Rol:</strong>
                            {{ $usuario->rolesId }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
