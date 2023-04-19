@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar datos alumno</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{url('/alumno') }}" title="Regresar"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>


    <form action="{{ route ('alumno.update', $alumno->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{$alumno->nombre}}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>apellido:</strong>
                    <input type="text" name="name" value="{{$alumno->apellido}}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection