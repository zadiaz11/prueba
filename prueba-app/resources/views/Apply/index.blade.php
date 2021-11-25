@extends('layouts.layout')
@section('content')
<div class="row mb-3">
    <div class="col text-end">
        <p class="h1">Lista de solicitudes</p>
    </div>
</div>
<div class="row">
    <div class="col">
        <form class="form-inline" method="GET">
            <div class="row">
                <div class="col-sm mb-3 text-end">
                    <label for="filter" class="h4">Buscar</label>
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="filter" name="filter" placeholder="Nombre" value="{{$filter}}">
          
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-info mb-2">Buscar</button>
                </div>
            </div>
    
          
        </form>
    </div>
</div>

<div class="row justify-content-center">
    
        <div class="col-md-8">
           
                
                   
                    <div class="table-container">
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Correo</th>
                                <th>Telefono</th>
                                <th>Programa</th>
                                <th>Estado</th>
                                
                            </thead>
                            <tbody>
                                @if($applies->count())  
                                @foreach($applies as $apply)  
                                <tr>
                                    <td>{{$apply->name}}</td>
                                    <td>{{$apply->last_name}}</td>
                                    <td>{{$apply->email}}</td>
                                    <td>{{$apply->contact}}</td>
                                    <td>{{$apply->program}}</td>
                                    <td>{{$apply->estado()}}</td>
                                    <td><a class="btn btn-primary btn-xs" href='{{ url("/apply/edit/{$apply->id}") }}' >Editar</a></td>
                                    <td>
                                        
                                    </td>
                                </tr>
                                @endforeach 
                                @else
                                <tr>
                                    <td colspan="8">No hay registros</td>
                                </tr>
                                @endif
                            </tbody>
                            
                        </table>
                    </div>
                </div>
                <div class="text-center">
                    {{ $applies->links() }}
                </div>
           
            </div>
        </div>
 
    
    @endsection