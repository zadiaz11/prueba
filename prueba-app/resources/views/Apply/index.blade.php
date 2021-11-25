@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista de aplicaciones</h3></div>
          <div class="pull-right">
          </div>
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
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>

          </table>
        </div>
      </div>
      {{ $applies->links() }}
    </div>
  </div>
</section>

@endsection