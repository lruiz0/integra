<?php namespace App\Services;

use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'name' => 'required|max:255',
			'apellidos' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|min:6',
			'tipo' => 'required',
			'mime' => '',
			'nombre_archivo_original' => '',
			'nombre_archivo' => '',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		$file = $data['foto'];
		$extension = $file->getClientOriginalExtension();
		Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));

		return User::create([
			'name' => $data['name'],
			'apellidos' => $data['apellidos'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
			'tipo' => $data['tipo'],
			'mime' => $file->getClientMimeType(),
			'nombre_archivo_original' => $file->getClientOriginalName(),
			'nombre_archivo' => $file->getFilename().'.'.$extension,
		]);
	}

}
