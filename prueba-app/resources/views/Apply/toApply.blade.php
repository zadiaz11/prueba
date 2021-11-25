@extends('layouts.layout')
@section('content')
<div class="row justify-content-center">
	
		<div class="col-md-8 col-md-offset-2">
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Error!</strong> Revise los campos obligatorios.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif

		
					<h2 class="mb-3">Formulario de Contacto</h2>
			
				
						<form method="POST" action='{{ url("/apply/store") }}'  role="form">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6 mb-3">
									<div class="form-group">
										<input require type="text" name="name" id="name" class="form-control" placeholder="Nombres">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6 mb-3">
									<div class="form-group">
										<input require type="text" name="last_name" id="last_name" class="form-control" placeholder="Apellidos">
									</div>
								</div>
							
							</div>


							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6 mb-3">
									<div class="form-group">
										<input require type="email" name="email" id="email" class="form-control" placeholder="Correo">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6 mb-3">
									<div class="form-group">
										<input require type="number" name="contact" id="contact" class="form-control" placeholder="Telefono">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm mb-3">
										<select class="form-control" name="program" id="program">
											<option value="Bachillerato">Bachillerato</option>
											<option value="Ingles">Ingles</option>
											<option value="Preicfes">Preicfes</option>
										</select>
								</div>
							</div>
						
							<div class="row">

								<div class="col-xs-12 col-sm-12 col-md-12 text-center">

									<a href="/" class="btn m-3 btn-secondary">Volver</a>

									<input type="submit"  value="Guardar" class="btn m-3 btn-success btn-block">

									
									
								</div>	

							</div>
						</form>
				
		</div>
</div>
	@endsection