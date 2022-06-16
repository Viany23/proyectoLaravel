<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     Aquí se incluyen todos los campos que se quieren validar*/
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:50'],
            'ape1' => ['required', 'string', 'max:50'],
            'ape2' => ['string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
            'telefono' => ['required', 'string', 'max:50'],
			'password' => ['required', 'string', 'min:8', 'max:100', 'confirmed'],
        ]);
    }
	/*En esta función se incluyen todos los campos de la BD*/
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'apellido1' => $data['ape1'],
            'apelido2' => $data['ape2'],
            'email' => $data['email'],
            'telefono' => $data['telefono'],
            'tipo' => 1,
            'password' => Hash::make($data['password']),
        ]);
    }
}
