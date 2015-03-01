<div id="ModalDetail" class="modal-detail hide">
	<div class="frame">
		<div class="bit-2">
			Nombre: <span id="DetailName"></span> <span id="DetailLastName1"></span> <span id="DetailLastName2"></span>
		</div>	
		<div class="bit-2">
			Usuario: <span id="DetailNick"></span>
		</div>
		<div class="bit-2">
			RFC: <span id="DetailRFC"></span>
		</div>
		<div class="bit-2">
			Correo: <span id="DetailEmail"></span>
		</div>
		<div class="bit-3">
			Calle: <span id="DetailStreet"></span>
		</div>
		<div class="bit-3">
			Número: <span id="DetailNumber"></span>
		</div>
		<div class="bit-3">
			Colonia: <span id="DetailSuburb"></span>
		</div>
		<div class="bit-3">
			Código Postal: <span id="DetailPS"></span>
		</div>
		<div class="bit-3">
			Teléfono: <span id="DetailPhone"></span>
		</div>
		<div class="bit-3">
			Celular: <span id="DetailCelphone"></span>
		</div>
		<div class="bit-2">
			Ciudad y Estado: <span id="DetailCity"></span>, <span id="DetailState"></span>
		</div>
		<div class="bit-2">
			Departamento: <span id="DetailRank"></span>
		</div>
	</div>
</div>

<div id="ModalEdit" class="modal-edit hide">
	<div class="frame">
		<span class="button b-close"><span class="hide">X</span></span>
		<div class="bit-1">
			Editar a <span id="UserDetailEditName"></span>
		</div>
		{{ Form::open(array('url' => '#', 'id' => 'UserEdit')) }}
						<div class="bit-3">
							<label><span class="required-text">*</span> Nombre: <span class="required-text hide" id="name_detail"></span></label>
							{{ Form::text('text', '', array('placeholder' => 'Nombre', 'name' => 'name', 'class' => 'name_detail')); }}
						</div>
						<div class="bit-3">
							<label><span class="required-text">*</span> Apellido Paterno: <span class="required-text hide" id="lastname_1_detail"></span></label>
							{{ Form::text('text', '', array('placeholder' => 'Apellido Paterno', 'name' => 'lastname_1', 'class' => 'lastname_1_detail')); }}
						</div>
						<div class="bit-3">
							<label>Apellido Materno: <span class="required-text hide" id="lastname_2_detail"></span></label>
							{{ Form::text('text', '', array('placeholder' => 'Apellido Materno', 'name' => 'lastname_2', 'class' => 'lastname_2_detail')); }}
						</div>

						<div class="bit-2">
							<label>RFC o CURP: <span class="required-text hide" id="rfc_detail"></span></label>
							{{ Form::text('text', '', array('placeholder' => 'RFC o CURP', 'name' => 'rfc', 'class' => 'rfc_detail')); }}
						</div>
						<div class="bit-2">
							<label><span class="required-text">*</span> Correo Electrónico:</label>
							{{ Form::email('email', '', array('placeholder' => 'Correo electrónico: ejemplo@ejemplo.com', 'name' => 'email', 'class' => 'email_detail', 'disabled')); }}
						</div>

						<div class="bit-4">
							<label>Calle: <span class="required-text hide" id="street_detail"></span></label>
							{{ Form::text('text', '', array('placeholder' => 'Dirección: Calle', 'name' => 'street', 'class' => 'street_detail')); }}
						</div>
						<div class="bit-4">
							<label>Número exterior: <span class="required-text hide" id="number_detail"></span></label>
							{{ Form::text('text', '', array('placeholder' => 'Número exterior', 'name' => 'number', 'class' => 'number_detail')); }}
						</div>
						<div class="bit-4">
							<label>Teléfono: <span class="required-text hide" id="phone_detail"></span></label>
							{{ Form::text('tel', '', array('placeholder' => 'Número telefónico (Opcional)', 'name' => 'phone', 'class' => 'phone_detail')); }}
						</div>
						<div class="bit-4">
							<label>Celular: <span class="required-text hide" id="celphone_detail"></span></label>
							{{ Form::text('tel', '', array('placeholder' => 'Número de Celular (Opcional)', 'name' => 'celphone', 'class' => 'celphone_detail')); }}
						</div>

						<div class="bit-4">
							<label>Colonia: <span class="required-text hide" id="suburb_detail"></span></label>
							{{ Form::text('text', '', array('placeholder' => 'Dirección: Colonia', 'name' => 'suburb', 'class' => 'suburb_detail')); }}
						</div>
						<div class="bit-4">
							<label>Código Postal: <span class="required-text hide" id="ps_detail"></span></label>
							{{ Form::text('text', '', array('placeholder' => 'Dirección: Código Postal', 'name' => 'ps', 'class' => 'ps_detail')); }}
						</div>
						<div class="bit-4">
							<label>Ciudad: <span class="required-text hide" id="city_detail"></span></label>
							{{ Form::text('text', '', array('placeholder' => 'Dirección: Ciudad', 'name' => 'city', 'class' => 'city_detail')); }}
						</div>
						<div class="bit-4">
							<label>Estado: <span class="required-text hide" id="state_detail"></span></label>
							{{ Form::text('email', '', array('placeholder' => 'Dirección: Estado', 'name' => 'state', 'class' => 'state_detail')); }}
						</div>

						<div class="bit-3">
							<label><span class="required-text">*</span> Nick de Usuario:</label>
							{{ Form::text('text', '', array('placeholder' => 'Nick de Usuario', 'name' => 'nick', 'class' => 'nick_detail', 'disabled')); }}
						</div>
						<div class="bit-3">
							<label><span class="required-text">*</span> Departamento: <span class="required-text hide" id="rank_detail"></span></label>
							{{ Form::select('rank', array('1' => 'Usuario', '2' => 'Administrador'), 'default', array('id' => 'UserEditRank', 'class' => 'rank_detail')); }}
						</div>
						<div class="bit-3">
							<label>Estatus:</label>
							{{ Form::select('status', array('1' => 'Activo', '2' => 'Inactivo'), 'default', array('id' => 'UserEditStatus', 'class' => 'status_detail')); }}
						</div>

						<div class="bit-1">
							<button type="submit" class="max success-btn">Editar Usuario <span class="hide" id="LoaderEditUsers"><i class="fa fa-spinner glyphicon-refresh-animate"></i></span></button>
						</div>
					{{ Form::close() }}
	</div>
</div>