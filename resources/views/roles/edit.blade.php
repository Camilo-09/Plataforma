@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Roles</h1>
    @include('includes.message')
@stop

@section('content')
<div class="container-fluid">
    <div class="card card-orange">
        <div class="card-header">
          <h3 class="card-title">Editar rol</h3>
        </div>

        <form method="POST" action="{{ route('roles.update', $role) }}">
            @method('PATCH')
            @include('includes.formRole')

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Actualizar</button>
          </div>
          
          
        </form>
      </div>
</div><!-- /.container-fluid -->

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop