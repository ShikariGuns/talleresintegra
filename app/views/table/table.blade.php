<table id="TableDataUser">
							<thead>
								<tr>
									<th>Nombre</th>
									<th>Correo</th>
									<th>Usuario</th>
									<th>Acciones</th>
								</tr>
							</thead>
							<tbody>
							@if(count($users) > 0)
							@foreach($users as $user)
								<tr>
									<td>{{ $user->name }} {{ $user->lastname_1 }}</td>
									<td>{{ $user->email }}</td>
									<td>{{ $user->nick }}</td>
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