@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Iniciar Sesión</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> Las credenciales que ingresastes no coinciden con nuestros registros.<br><br>
						</div>
					@endif

					{!! Form::open(['url' => 'auth/login', 'role' => 'form', 'class' => 'form-horizontal'])!!}
					{{-- <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}

						<div class="form-group">
							{!! Form::label('email', 'Email:', ['class' => 'col-md-4 control-label']) !!}
							{{-- <label class="col-md-4 control-label">Email:</label> --}}
							<div class="col-md-6">
								{!! Form::email('email', old('email'),
									['class' => 'form-control']
								)!!}
								{{-- <input type="email" class="form-control" name="email" value="{{ old('email') }}"> --}}

							</div>
						</div>

						<div class="form-group">
							{!! Form::label('password', 'Password:', ['class' => 'col-md-4 control-label']) !!}
							{{-- <label class="col-md-4 control-label">Contraseña:</label> --}}
							<div class="col-md-6">
								{!! Form::password('password', ['class' => 'form-control']) !!}
								{{-- <input type="password" class="form-control" name="password"> --}}

							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Recuérdame
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Entrar</button>

								<a class="btn btn-link" href="{!! url('/password/email') !!}">¿Olvidaste tu contraseña?</a>
							</div>
						</div>
					{!! Form::close() !!}
					{{-- </form> --}}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
