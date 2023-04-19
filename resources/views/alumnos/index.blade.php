@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel CRUD </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{url('/alumno/create') }}" title="Create alumno"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p></p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th width='280px'>Actions</th>
        </tr>   
        @foreach ($alumnos as $alumno)
            <tr>
                <td>{{alumno->id}}</td>
                <td>{{alumno->nombre}}</td>
                <td>{{alumno->apellido}}</td>
                <td>
                    <form action="{{ URL::to('alumno/' . $alumno->id) }}" method="POST">

                        <a href="{{ URL::to('/alumno/' . $alumno->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ URL::to('alumno/' . $alumno->id. '/edit') }}">
                            <i class="fas fa edit  fa lg"></i>
                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $alumnos->links() !!}

@endsection