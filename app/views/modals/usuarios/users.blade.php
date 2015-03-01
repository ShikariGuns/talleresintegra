<div class="modal hide" id="catalogo">
	<nav>
		<ul>
			<li><span><i class="icon-13"></i> Catalogo</span></li>
			<li class="close display-right"><a href="#" rel="modal:close">&times;</a></li>
		</ul>
	</nav>
	<section>
		<div id="contenido-catalogo" class="modal-container">
			<ul>
				<li><a href="#usuarios-lista" id="UserList">Listado de Usuarios</a></li>
				<li><a href="#usuarios-agregar">Nuevo Usuario</a></li>
			</ul>
			<div class="modal-content frame">
				<div id="usuarios-lista">
					<div class="bit-1">
						<div class="header-text">
							Listado de Usuarios
						</div>
					</div>
					<div class="bit-1">
						<table id="TableDataUser">
							<thead>
								<tr>
									<th>Nombre</th>
									<th>Correo</th>
									<th>Usuario</th>
									<th>Fecha de Ingreso</th>
									<th>Acciones</th>
								</tr>
							</thead>
							<tbody id="DataUserContent">
							@if(count($users) > 0)
							@foreach($users as $user)
								<tr>
									<td>{{ $user->name }} {{ $user->lastname_1 }}</td>
									<td>{{ $user->email }}</td>
									<td>{{ $user->nick }}</td>
									<td>{{ $user->created_at }}</td>
									<td>
										<a href="#" class="button small info UserClickDetail" id="{{ $user->id }}">
											Detalle
										</a>
										<a href="#" class="button small green UserClickEdit" id="{{ $user->id }}">
											Editar
										</a>
										<a href="#" class="button small red UserClickDelete" id="{{ $user->id }}">
											Eliminar
										</a>
									</td>
								</tr>
							@endforeach
							@else
								<tr>
									<td>No hay usuarios registrados</td>
									<td>*</td>
									<td>*</td>
									<td>*</td>
								</tr>
							@endif
							</tbody>
						</table>
					</div>
				</div>
				<div id="usuarios-agregar">
					<div class="bit-1">
						<div class="header-text">
							Formulario para agregar Usuarios
						</div>
					</div>
					{{ Form::open(array('url' => '#', 'id' => 'UserRegister')) }}
						<div class="bit-3">
							<label><span class="required-text">*</span> Nombre: <span class="required-text hide" id="name_error"></span></label>
							{{ Form::text('text', '', array('placeholder' => 'Nombre', 'name' => 'name', 'class' => 'name_error')); }}
						</div>
						<div class="bit-3">
							<label><span class="required-text">*</span> Apellido Paterno: <span class="required-text hide" id="lastname_1_error"></span></label>
							{{ Form::text('text', '', array('placeholder' => 'Apellido Paterno', 'name' => 'lastname_1', 'class' => 'lastname_1_error')); }}
						</div>
						<div class="bit-3">
							<label>Apellido Materno: <span class="required-text hide" id="lastname_2_error"></span></label>
							{{ Form::text('text', '', array('placeholder' => 'Apellido Materno', 'name' => 'lastname_2', 'class' => 'lastname_2_error')); }}
						</div>

						<div class="bit-2">
							<label>RFC o CURP: <span class="required-text hide" id="rfc_error"></span></label>
							{{ Form::text('text', '', array('placeholder' => 'RFC o CURP', 'name' => 'rfc', 'class' => 'rfc_error')); }}
						</div>
						<div class="bit-2">
							<label><span class="required-text">*</span> Correo Electrónico: <span class="required-text hide" id="email_error"></span></label>
							{{ Form::email('email', '', array('placeholder' => 'Correo electrónico: ejemplo@ejemplo.com', 'name' => 'email', 'class' => 'email_error')); }}
						</div>

						<div class="bit-4">
							<label>Calle: <span class="required-text hide" id="street_error"></span></label>
							{{ Form::text('text', '', array('placeholder' => 'Dirección: Calle', 'name' => 'street', 'class' => 'street_error')); }}
						</div>
						<div class="bit-4">
							<label>Número Exterior: <span class="required-text hide" id="number_error"></span></label>
							{{ Form::text('text', '', array('placeholder' => 'Número exterior', 'name' => 'number', 'class' => 'number_error')); }}
						</div>
						<div class="bit-4">
							<label>Teléfono: <span class="required-text hide" id="phone_error"></span></label>
							{{ Form::text('tel', '', array('placeholder' => 'Número telefónico (Opcional)', 'name' => 'phone', 'class' => 'phone_error')); }}
						</div>
						<div class="bit-4">
							<label>Teléfono Celular: <span class="required-text hide" id="celphone_error"></span></label>
							{{ Form::text('tel', '', array('placeholder' => 'Número de Celular (Opcional)', 'name' => 'celphone', 'class' => 'celphone_error')); }}
						</div>

						<div class="bit-4">
							<label>Colonia: <span class="required-text hide" id="suburb_error"></span></label>
							{{ Form::text('text', '', array('placeholder' => 'Dirección: Colonia', 'name' => 'suburb', 'class' => 'suburb_error')); }}
						</div>
						<div class="bit-4">
							<label>Código Postal: <span class="required-text hide" id="ps_error"></span></label>
							{{ Form::text('text', '', array('placeholder' => 'Dirección: Código Postal', 'name' => 'ps', 'class' => 'ps_error')); }}
						</div>
						<div class="bit-4">
							<label>Ciudad: <span class="required-text hide" id="city_error"></span></label>
							{{ Form::text('text', '', array('placeholder' => 'Dirección: Ciudad', 'name' => 'city', 'class' => 'city_error')); }}
						</div>
						<div class="bit-4">
							<label>Estado: <span class="required-text hide" id="state_error"></span></label>
							{{ Form::text('text', '', array('placeholder' => 'Dirección: Estado', 'name' => 'state', 'class' => 'state_error')); }}
						</div>

						<div class="bit-3">
							<label><span class="required-text">*</span> Nick de Usuario: <span class="required-text hide" id="nick_error"></span></label>
							{{ Form::text('text', '', array('placeholder' => 'Nick de Usuario', 'name' => 'nick', 'class' => 'nick_error')); }}
						</div>
						<div class="bit-3">
							<label><span class="required-text">*</span> Contraseña: <span class="required-text hide" id="password_error"></span></label>
							{{ Form::password('password', array('placeholder' => 'Contraseña', 'name' => 'password', 'class' => 'password_error')); }}
						</div>
						<div class="bit-3">
							<label><span class="required-text">*</span> Confirmar Contraseña: <span class="required-text hide" id="password_conf_error"></span></label>
							{{ Form::password('password', array('placeholder' => 'Confirmar Contraseña', 'name' => 'password_conf', 'class' => 'password_conf_error')); }}
						</div>

						<div class="bit-1">
							<label><span class="required-text">*</span> Departamento: <span class="required-text hide" id="rank_error"></span></label>
							{{ Form::select('rank', array('' => 'Seleccionar...', '1' => 'Usuario', '2' => 'Administrador'), 'Default', array('class' => 'rank_error')); }}
						</div>
						<div class="bit-1">
							<button type="submit" class="max default">Crear Usuario<span class="hide" id="LoaderUsers"> <i class="fa fa-spinner glyphicon-refresh-animate"></i></span></button>
						</div>
					{{ Form::close() }}
				</div>
			</div>
		</div>
	</section>
</div>