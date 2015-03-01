<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::orderBy('id', 'DESC')->where('status' , 1)->get();
		return View::make('master')->with('users', $users);
	}

	/*
	* Login
	*/
	public function login()
	{
		if (Request::ajax()) {
			$userdata = array(
				'nick'     => Input::get('nick'),
				'password' => Input::get('password'),
				'status'   => 1
			);
			
			if (Auth::attempt($userdata)) {
					return Response::json(array(
						'success' => true
					));
			} else {
				return Response::json(array(
					'error' => true
				));
			}
		}
	}

	/*
	* Cerrar Sesión
	*/
	public function logout()
	{
		if (Auth::check()) {
			Auth::logout();
			return Redirect::to('/');
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if (Request::ajax()) {
        	$userData = array(
				'name'          => Input::get('name'),
				'lastname_1'    => Input::get('lastname_1'),
				'lastname_2'    => Input::get('lastname_2'),
				'rfc'           => Input::get('rfc'),
				'email'         => Input::get('email'),
				'street'        => Input::get('street'),
				'number'        => Input::get('number'),
				'suburb'        => Input::get('suburb'),
				'ps'            => Input::get('ps'),
				'city'          => Input::get('city'),
				'state'         => Input::get('state'),
				'nick'          => Input::get('nick'),
				'password'      => Input::get('password'),
				'password_conf' => Input::get('password_conf'),
				'phone'         => Input::get('phone'),
				'celphone'      => Input::get('celphone'),
				'rank'          => Input::get('rank')
	        );

			$rules = array(
				'name'          => 'required|min:2|max:50',
				'lastname_1'    => 'required|min:2|max:50',
				'lastname_2'    => 'min:2|max:50',
				'rfc'           => 'min:1|max:50',
				'email'         => 'required|email|unique:users',
				'street'        => 'min:2|max:7',
				'number'        => 'min:2|max:7',
				'suburb'        => 'min:2|max:50',
				'ps'            => 'min:2|max:10',
				'city'          => 'min:2|max:50',
				'state'         => 'min:2|max:50',
				'nick'          => 'required|min:2|max:50|unique:users',
				'password'      => 'required|min:7|max:14',
				'password_conf' => 'required|min:7|max:14|same:password',
				'phone'         => 'min:1|max:7',
				'celphone'      => 'min:1|max:7',
				'rank'          => 'required'
	        );

	        $messages = array(
				'required' => 'Compo requerido',
				'max'      => 'Máximo :max caracteres',
				'min'      => 'Mínimo :min caracteres',
				'email'    => 'Este campo debe tener formato de email',
				'unique'   => 'Ya existe',
				'same'     => 'Las contraseñas no coinciden'
			);

	        $validator = Validator::make(Input::all(), $rules, $messages);

	        if ($validator->fails()) {
	            return Response::json(array(
					'fail'   => true,
					'errors' => $validator->getMessageBag()->toArray()
            	));
	        } else {
				$user             = new User;
				$user->name       = Input::get('name');
				$user->lastname_1 = Input::get('lastname_1');
				$user->lastname_2 = Input::get('lastname_2');
				$user->rfc        = Input::get('rfc');
				$user->email      = Input::get('email');
				$user->street     = Input::get('street');
				$user->number     = Input::get('number');
				$user->suburb     = Input::get('suburb');
				$user->ps         = Input::get('ps');
				$user->city       = Input::get('city');
				$user->state      = Input::get('state');
				$user->nick       = Input::get('nick');
				$user->password   = Hash::make(Input::get('password'));
				$user->phone      = Input::get('phone');
				$user->celphone   = Input::get('celphone');
				$user->rank       = Input::get('rank');
				$user->save();

	        	return Response::json(array(
					'success'    => true,
					'name'       => $user->name,
					'lastname_1' => $user->lastname_1,
					'email'      => $user->email,
					'nick'       => $user->nick,
					'id'         => $user->id
            	));
	        }
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		if (Request::ajax()) {
			$user      = User::find($id);
			$user_data = array(
				'name'       => $user->name,
				'lastname_1' => $user->lastname_1,
				'lastname_2' => $user->lastname_2,
				'rfc'        => $user->rfc,
				'email'      => $user->email,
				'street'     => $user->street,
				'number'     => $user->number,
				'suburb'     => $user->suburb,
				'ps'         => $user->ps,
				'city'       => $user->city,
				'state'      => $user->state,
				'nick'       => $user->nick,
				'phone'      => $user->phone,
				'celphone'   => $user->celphone,
				'rank'       => $user->rank,
				'status'     => $user->status,
				'created_at' => $user->created_at,
				'updated_at' => $user->updated_at
			);
			return Response::json(array(
				'success'   => true,
				'user_data' => $user_data
			));
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		if (Request::ajax()) {
			$user = User::find($id);
			return Response::json(array(
				'success' => true,
			));
		}
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		if (Request::ajax()) {
			$rules = array(
				'name'          => 'required|min:2|max:50',
				'lastname_1'    => 'required|min:2|max:50',
				'lastname_2'    => 'min:2|max:50',
				'rfc'           => 'min:1|max:50',
				'street'        => 'min:2|max:7',
				'number'        => 'min:2|max:7',
				'suburb'        => 'min:2|max:50',
				'ps'            => 'min:2|max:10',
				'city'          => 'min:2|max:50',
				'state'         => 'min:2|max:50',
				'phone'         => 'min:1|max:7',
				'celphone'      => 'min:1|max:7'
	        );

	        $messages = array(
				'required' => 'Compo requerido',
				'max'      => 'Máximo :max caracteres',
				'min'      => 'Mínimo :min caracteres',
				'email'    => 'Este campo debe tener formato de email',
				'unique'   => 'Ya existe',
				'same'     => 'Las contraseñas no coinciden'
			);

	        $validator = Validator::make(Input::all(), $rules, $messages);

	        if ($validator->fails()) {
	            return Response::json(array(
					'fail'   => true,
					'errors' => $validator->getMessageBag()->toArray()
            	));
	        } else {
				$input            = Input::all();
				$user             = User::find($id);
				$user->name       = $input['name'];
				$user->lastname_1 = $input['lastname_1'];
				$user->lastname_2 = $input['lastname_2'];
				$user->rfc        = $input['rfc'];
				$user->street     = $input['street'];
				$user->number     = $input['number'];
				$user->suburb     = $input['suburb'];
				$user->ps         = $input['ps'];
				$user->city       = $input['city'];
				$user->state      = $input['state'];
				$user->phone      = $input['phone'];
				$user->celphone   = $input['celphone'];
				$user->rank       = $input['rank'];
				$user->status     = $input['status'];
				$user->save();

				return Response::json(array(
					'success' => true
				));
			}
		}
	}

	/*
	* Eliminar Usuario
	*/

	public function delete($id) {
		if (Request::ajax()) {
			$user = User::find($id);
			$user->status = 0;
			$user->save();

			return Response::json(array(
				'success' => true
			));
		}
	}
}